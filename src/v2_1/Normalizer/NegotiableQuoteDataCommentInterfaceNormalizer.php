<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NegotiableQuoteDataCommentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataCommentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataCommentInterface';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Kiboko\Magento\V2_1\Model\NegotiableQuoteDataCommentInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachments', $data) && $data['attachments'] !== null) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataCommentAttachmentInterface', 'json', $context);
            }
            $object->setAttachments($values);
        } elseif (\array_key_exists('attachments', $data) && $data['attachments'] === null) {
            $object->setAttachments(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('creator_id', $data) && $data['creator_id'] !== null) {
            $object->setCreatorId($data['creator_id']);
        } elseif (\array_key_exists('creator_id', $data) && $data['creator_id'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('creator_type', $data) && $data['creator_type'] !== null) {
            $object->setCreatorType($data['creator_type']);
        } elseif (\array_key_exists('creator_type', $data) && $data['creator_type'] === null) {
            $object->setCreatorType(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('is_decline', $data) && $data['is_decline'] !== null) {
            $object->setIsDecline($data['is_decline']);
        } elseif (\array_key_exists('is_decline', $data) && $data['is_decline'] === null) {
            $object->setIsDecline(null);
        }
        if (\array_key_exists('is_draft', $data) && $data['is_draft'] !== null) {
            $object->setIsDraft($data['is_draft']);
        } elseif (\array_key_exists('is_draft', $data) && $data['is_draft'] === null) {
            $object->setIsDraft(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        } elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getAttachments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['attachments'] = $values;
        $data['comment'] = $object->getComment();
        $data['created_at'] = $object->getCreatedAt();
        $data['creator_id'] = $object->getCreatorId();
        $data['creator_type'] = $object->getCreatorType();
        $data['entity_id'] = $object->getEntityId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['is_decline'] = $object->getIsDecline();
        $data['is_draft'] = $object->getIsDraft();
        $data['parent_id'] = $object->getParentId();
        return $data;
    }
}
