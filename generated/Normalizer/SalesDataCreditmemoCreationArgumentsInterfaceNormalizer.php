<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoCreationArgumentsInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoCreationArgumentsInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataCreditmemoCreationArgumentsInterface();
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
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('adjustment_positive', $data) && $data['adjustment_positive'] !== null) {
            $object->setAdjustmentPositive($data['adjustment_positive']);
        }
        elseif (\array_key_exists('adjustment_positive', $data) && $data['adjustment_positive'] === null) {
            $object->setAdjustmentPositive(null);
        }
        if (\array_key_exists('adjustment_negative', $data) && $data['adjustment_negative'] !== null) {
            $object->setAdjustmentNegative($data['adjustment_negative']);
        }
        elseif (\array_key_exists('adjustment_negative', $data) && $data['adjustment_negative'] === null) {
            $object->setAdjustmentNegative(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\SalesDataCreditmemoCreationArgumentsExtensionInterface', 'json', $context));
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('shippingAmount') && null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if ($object->isInitialized('adjustmentPositive') && null !== $object->getAdjustmentPositive()) {
            $data['adjustment_positive'] = $object->getAdjustmentPositive();
        }
        if ($object->isInitialized('adjustmentNegative') && null !== $object->getAdjustmentNegative()) {
            $data['adjustment_negative'] = $object->getAdjustmentNegative();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataCreditmemoCreationArgumentsInterface' => false);
    }
}