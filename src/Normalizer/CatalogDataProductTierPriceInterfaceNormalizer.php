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
class CatalogDataProductTierPriceInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductTierPriceInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductTierPriceInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductTierPriceInterface();
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (double) $data['value'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] !== null) {
            $object->setCustomerGroupId($data['customer_group_id']);
        }
        elseif (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] === null) {
            $object->setCustomerGroupId(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
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
        $data['customer_group_id'] = $object->getCustomerGroupId();
        $data['qty'] = $object->getQty();
        $data['value'] = $object->getValue();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductTierPriceInterface' => false);
    }
}