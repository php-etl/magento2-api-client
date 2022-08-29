<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\V1InvoiceInvoiceIdRefundPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\V1InvoiceInvoiceIdRefundPostBody';
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
        $object = new \Kiboko\Magento\v2_1\Model\V1InvoiceInvoiceIdRefundPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoItemCreationInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('isOnline', $data)) {
            $object->setIsOnline($data['isOnline']);
        }
        if (\array_key_exists('notify', $data)) {
            $object->setNotify($data['notify']);
        }
        if (\array_key_exists('appendComment', $data)) {
            $object->setAppendComment($data['appendComment']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCommentCreationInterface', 'json', $context));
        }
        if (\array_key_exists('arguments', $data)) {
            $object->setArguments($this->denormalizer->denormalize($data['arguments'], 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCreationArgumentsInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getIsOnline()) {
            $data['isOnline'] = $object->getIsOnline();
        }
        if (null !== $object->getNotify()) {
            $data['notify'] = $object->getNotify();
        }
        if (null !== $object->getAppendComment()) {
            $data['appendComment'] = $object->getAppendComment();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getArguments()) {
            $data['arguments'] = $this->normalizer->normalize($object->getArguments(), 'json', $context);
        }
        return $data;
    }
}
