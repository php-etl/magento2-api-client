<?php

namespace Kiboko\Magento\V2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesRuleDataConditionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\SalesRuleDataConditionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\SalesRuleDataConditionInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\SalesRuleDataConditionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aggregator_type', $data) && $data['aggregator_type'] !== null) {
            $object->setAggregatorType($data['aggregator_type']);
        } elseif (\array_key_exists('aggregator_type', $data) && $data['aggregator_type'] === null) {
            $object->setAggregatorType(null);
        }
        if (\array_key_exists('attribute_name', $data) && $data['attribute_name'] !== null) {
            $object->setAttributeName($data['attribute_name']);
        } elseif (\array_key_exists('attribute_name', $data) && $data['attribute_name'] === null) {
            $object->setAttributeName(null);
        }
        if (\array_key_exists('condition_type', $data) && $data['condition_type'] !== null) {
            $object->setConditionType($data['condition_type']);
        } elseif (\array_key_exists('condition_type', $data) && $data['condition_type'] === null) {
            $object->setConditionType(null);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $values = array();
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\SalesRuleDataConditionInterface', 'json', $context);
            }
            $object->setConditions($values);
        } elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('operator', $data) && $data['operator'] !== null) {
            $object->setOperator($data['operator']);
        } elseif (\array_key_exists('operator', $data) && $data['operator'] === null) {
            $object->setOperator(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
        } elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAggregatorType()) {
            $data['aggregator_type'] = $object->getAggregatorType();
        }
        if (null !== $object->getAttributeName()) {
            $data['attribute_name'] = $object->getAttributeName();
        }
        $data['condition_type'] = $object->getConditionType();
        if (null !== $object->getConditions()) {
            $values = array();
            foreach ($object->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['conditions'] = $values;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['operator'] = $object->getOperator();
        $data['value'] = $object->getValue();
        return $data;
    }
}
