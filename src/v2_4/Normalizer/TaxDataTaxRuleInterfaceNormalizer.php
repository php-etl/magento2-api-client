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

class TaxDataTaxRuleInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\TaxDataTaxRuleInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\TaxDataTaxRuleInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\TaxDataTaxRuleInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('calculate_subtotal', $data) && $data['calculate_subtotal'] !== null) {
            $object->setCalculateSubtotal($data['calculate_subtotal']);
        } elseif (\array_key_exists('calculate_subtotal', $data) && $data['calculate_subtotal'] === null) {
            $object->setCalculateSubtotal(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('customer_tax_class_ids', $data) && $data['customer_tax_class_ids'] !== null) {
            $values = array();
            foreach ($data['customer_tax_class_ids'] as $value) {
                $values[] = $value;
            }
            $object->setCustomerTaxClassIds($values);
        } elseif (\array_key_exists('customer_tax_class_ids', $data) && $data['customer_tax_class_ids'] === null) {
            $object->setCustomerTaxClassIds(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
            $object->setPriority($data['priority']);
        } elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
            $object->setPriority(null);
        }
        if (\array_key_exists('product_tax_class_ids', $data) && $data['product_tax_class_ids'] !== null) {
            $values_1 = array();
            foreach ($data['product_tax_class_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProductTaxClassIds($values_1);
        } elseif (\array_key_exists('product_tax_class_ids', $data) && $data['product_tax_class_ids'] === null) {
            $object->setProductTaxClassIds(null);
        }
        if (\array_key_exists('tax_rate_ids', $data) && $data['tax_rate_ids'] !== null) {
            $values_2 = array();
            foreach ($data['tax_rate_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTaxRateIds($values_2);
        } elseif (\array_key_exists('tax_rate_ids', $data) && $data['tax_rate_ids'] === null) {
            $object->setTaxRateIds(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCalculateSubtotal()) {
            $data['calculate_subtotal'] = $object->getCalculateSubtotal();
        }
        $data['code'] = $object->getCode();
        $values = array();
        foreach ($object->getCustomerTaxClassIds() as $value) {
            $values[] = $value;
        }
        $data['customer_tax_class_ids'] = $values;
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['position'] = $object->getPosition();
        $data['priority'] = $object->getPriority();
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
        return $data;
    }
}
