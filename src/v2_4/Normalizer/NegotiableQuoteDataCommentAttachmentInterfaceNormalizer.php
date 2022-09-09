<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NegotiableQuoteDataCommentAttachmentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\NegotiableQuoteDataCommentAttachmentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\NegotiableQuoteDataCommentAttachmentInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\NegotiableQuoteDataCommentAttachmentInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachment_id', $data) && $data['attachment_id'] !== null) {
            $object->setAttachmentId($data['attachment_id']);
        } elseif (\array_key_exists('attachment_id', $data) && $data['attachment_id'] === null) {
            $object->setAttachmentId(null);
        }
        if (\array_key_exists('comment_id', $data) && $data['comment_id'] !== null) {
            $object->setCommentId($data['comment_id']);
        } elseif (\array_key_exists('comment_id', $data) && $data['comment_id'] === null) {
            $object->setCommentId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('file_name', $data) && $data['file_name'] !== null) {
            $object->setFileName($data['file_name']);
        } elseif (\array_key_exists('file_name', $data) && $data['file_name'] === null) {
            $object->setFileName(null);
        }
        if (\array_key_exists('file_path', $data) && $data['file_path'] !== null) {
            $object->setFilePath($data['file_path']);
        } elseif (\array_key_exists('file_path', $data) && $data['file_path'] === null) {
            $object->setFilePath(null);
        }
        if (\array_key_exists('file_type', $data) && $data['file_type'] !== null) {
            $object->setFileType($data['file_type']);
        } elseif (\array_key_exists('file_type', $data) && $data['file_type'] === null) {
            $object->setFileType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['attachment_id'] = $object->getAttachmentId();
        $data['comment_id'] = $object->getCommentId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['file_name'] = $object->getFileName();
        $data['file_path'] = $object->getFilePath();
        $data['file_type'] = $object->getFileType();
        return $data;
    }
}
