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
class SalesDataCreditmemoCreationArgumentsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCreationArgumentsInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCreationArgumentsInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\SalesDataCreditmemoCreationArgumentsInterface();
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (double) $data['shipping_amount'];
        }
        if (\array_key_exists('adjustment_positive', $data) && \is_int($data['adjustment_positive'])) {
            $data['adjustment_positive'] = (double) $data['adjustment_positive'];
        }
        if (\array_key_exists('adjustment_negative', $data) && \is_int($data['adjustment_negative'])) {
            $data['adjustment_negative'] = (double) $data['adjustment_negative'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('adjustment_positive', $data)) {
            $object->setAdjustmentPositive($data['adjustment_positive']);
        }
        if (\array_key_exists('adjustment_negative', $data)) {
            $object->setAdjustmentNegative($data['adjustment_negative']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCreationArgumentsExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getAdjustmentPositive()) {
            $data['adjustment_positive'] = $object->getAdjustmentPositive();
        }
        if (null !== $object->getAdjustmentNegative()) {
            $data['adjustment_negative'] = $object->getAdjustmentNegative();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}