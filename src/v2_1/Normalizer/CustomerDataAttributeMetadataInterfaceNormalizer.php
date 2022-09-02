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

class CustomerDataAttributeMetadataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataAttributeMetadataInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataAttributeMetadataInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\CustomerDataAttributeMetadataInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_code', $data)) {
            $object->setAttributeCode($data['attribute_code']);
        }
        if (\array_key_exists('backend_type', $data)) {
            $object->setBackendType($data['backend_type']);
        }
        if (\array_key_exists('data_model', $data)) {
            $object->setDataModel($data['data_model']);
        }
        if (\array_key_exists('frontend_class', $data)) {
            $object->setFrontendClass($data['frontend_class']);
        }
        if (\array_key_exists('frontend_input', $data)) {
            $object->setFrontendInput($data['frontend_input']);
        }
        if (\array_key_exists('frontend_label', $data)) {
            $object->setFrontendLabel($data['frontend_label']);
        }
        if (\array_key_exists('input_filter', $data)) {
            $object->setInputFilter($data['input_filter']);
        }
        if (\array_key_exists('is_filterable_in_grid', $data)) {
            $object->setIsFilterableInGrid($data['is_filterable_in_grid']);
        }
        if (\array_key_exists('is_searchable_in_grid', $data)) {
            $object->setIsSearchableInGrid($data['is_searchable_in_grid']);
        }
        if (\array_key_exists('is_used_in_grid', $data)) {
            $object->setIsUsedInGrid($data['is_used_in_grid']);
        }
        if (\array_key_exists('is_visible_in_grid', $data)) {
            $object->setIsVisibleInGrid($data['is_visible_in_grid']);
        }
        if (\array_key_exists('multiline_count', $data)) {
            $object->setMultilineCount($data['multiline_count']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('options', $data)) {
            $values = array();
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataOptionInterface', 'json', $context);
            }
            $object->setOptions($values);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
        }
        if (\array_key_exists('store_label', $data)) {
            $object->setStoreLabel($data['store_label']);
        }
        if (\array_key_exists('system', $data)) {
            $object->setSystem($data['system']);
        }
        if (\array_key_exists('user_defined', $data)) {
            $object->setUserDefined($data['user_defined']);
        }
        if (\array_key_exists('validation_rules', $data)) {
            $values_1 = array();
            foreach ($data['validation_rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataValidationRuleInterface', 'json', $context);
            }
            $object->setValidationRules($values_1);
        }
        if (\array_key_exists('visible', $data)) {
            $object->setVisible($data['visible']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['attribute_code'] = $object->getAttributeCode();
        $data['backend_type'] = $object->getBackendType();
        $data['data_model'] = $object->getDataModel();
        $data['frontend_class'] = $object->getFrontendClass();
        $data['frontend_input'] = $object->getFrontendInput();
        $data['frontend_label'] = $object->getFrontendLabel();
        $data['input_filter'] = $object->getInputFilter();
        if (null !== $object->getIsFilterableInGrid()) {
            $data['is_filterable_in_grid'] = $object->getIsFilterableInGrid();
        }
        if (null !== $object->getIsSearchableInGrid()) {
            $data['is_searchable_in_grid'] = $object->getIsSearchableInGrid();
        }
        if (null !== $object->getIsUsedInGrid()) {
            $data['is_used_in_grid'] = $object->getIsUsedInGrid();
        }
        if (null !== $object->getIsVisibleInGrid()) {
            $data['is_visible_in_grid'] = $object->getIsVisibleInGrid();
        }
        $data['multiline_count'] = $object->getMultilineCount();
        $data['note'] = $object->getNote();
        $values = array();
        foreach ($object->getOptions() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['options'] = $values;
        $data['required'] = $object->getRequired();
        $data['sort_order'] = $object->getSortOrder();
        $data['store_label'] = $object->getStoreLabel();
        $data['system'] = $object->getSystem();
        $data['user_defined'] = $object->getUserDefined();
        $values_1 = array();
        foreach ($object->getValidationRules() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['validation_rules'] = $values_1;
        $data['visible'] = $object->getVisible();
        return $data;
    }
}
