<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1InvoiceInvoiceIdRefundPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\V1InvoiceInvoiceIdRefundPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\V1InvoiceInvoiceIdRefundPostBody';
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
        $object = new \Kiboko\Magento\V2_2\Model\V1InvoiceInvoiceIdRefundPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('appendComment', $data) && $data['appendComment'] !== null) {
            $object->setAppendComment($data['appendComment']);
        } elseif (\array_key_exists('appendComment', $data) && $data['appendComment'] === null) {
            $object->setAppendComment(null);
        }
        if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
            $object->setArguments($this->denormalizer->denormalize($data['arguments'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataCreditmemoCreationArgumentsInterface', 'json', $context));
        } elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
            $object->setArguments(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataCreditmemoCommentCreationInterface', 'json', $context));
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('isOnline', $data) && $data['isOnline'] !== null) {
            $object->setIsOnline($data['isOnline']);
        } elseif (\array_key_exists('isOnline', $data) && $data['isOnline'] === null) {
            $object->setIsOnline(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataCreditmemoItemCreationInterface', 'json', $context);
            }
            $object->setItems($values);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('notify', $data) && $data['notify'] !== null) {
            $object->setNotify($data['notify']);
        } elseif (\array_key_exists('notify', $data) && $data['notify'] === null) {
            $object->setNotify(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAppendComment()) {
            $data['appendComment'] = $object->getAppendComment();
        }
        if (null !== $object->getArguments()) {
            $data['arguments'] = $this->normalizer->normalize($object->getArguments(), 'json', $context);
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getIsOnline()) {
            $data['isOnline'] = $object->getIsOnline();
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getNotify()) {
            $data['notify'] = $object->getNotify();
        }
        return $data;
    }
}
