<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaxDataTaxRuleInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\TaxDataTaxRuleInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\TaxDataTaxRuleInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\TaxDataTaxRuleInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('customer_tax_class_ids', $data)) {
            $values = array();
            foreach ($data['customer_tax_class_ids'] as $value) {
                $values[] = $value;
            }
            $object->setCustomerTaxClassIds($values);
        }
        if (\array_key_exists('product_tax_class_ids', $data)) {
            $values_1 = array();
            foreach ($data['product_tax_class_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProductTaxClassIds($values_1);
        }
        if (\array_key_exists('tax_rate_ids', $data)) {
            $values_2 = array();
            foreach ($data['tax_rate_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTaxRateIds($values_2);
        }
        if (\array_key_exists('calculate_subtotal', $data)) {
            $object->setCalculateSubtotal($data['calculate_subtotal']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['code'] = $object->getCode();
        $data['priority'] = $object->getPriority();
        $data['position'] = $object->getPosition();
        $values = array();
        foreach ($object->getCustomerTaxClassIds() as $value) {
            $values[] = $value;
        }
        $data['customer_tax_class_ids'] = $values;
        $values_1 = array();
        foreach ($object->getProductTaxClassIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['product_tax_class_ids'] = $values_1;
        $values_2 = array();
        foreach ($object->getTaxRateIds() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['tax_rate_ids'] = $values_2;
        if (null !== $object->getCalculateSubtotal()) {
            $data['calculate_subtotal'] = $object->getCalculateSubtotal();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}