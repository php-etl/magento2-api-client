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

class CustomerDataAttributeMetadataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataAttributeMetadataInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataAttributeMetadataInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\CustomerDataAttributeMetadataInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_code', $data) && $data['attribute_code'] !== null) {
            $object->setAttributeCode($data['attribute_code']);
        } elseif (\array_key_exists('attribute_code', $data) && $data['attribute_code'] === null) {
            $object->setAttributeCode(null);
        }
        if (\array_key_exists('backend_type', $data) && $data['backend_type'] !== null) {
            $object->setBackendType($data['backend_type']);
        } elseif (\array_key_exists('backend_type', $data) && $data['backend_type'] === null) {
            $object->setBackendType(null);
        }
        if (\array_key_exists('data_model', $data) && $data['data_model'] !== null) {
            $object->setDataModel($data['data_model']);
        } elseif (\array_key_exists('data_model', $data) && $data['data_model'] === null) {
            $object->setDataModel(null);
        }
        if (\array_key_exists('frontend_class', $data) && $data['frontend_class'] !== null) {
            $object->setFrontendClass($data['frontend_class']);
        } elseif (\array_key_exists('frontend_class', $data) && $data['frontend_class'] === null) {
            $object->setFrontendClass(null);
        }
        if (\array_key_exists('frontend_input', $data) && $data['frontend_input'] !== null) {
            $object->setFrontendInput($data['frontend_input']);
        } elseif (\array_key_exists('frontend_input', $data) && $data['frontend_input'] === null) {
            $object->setFrontendInput(null);
        }
        if (\array_key_exists('frontend_label', $data) && $data['frontend_label'] !== null) {
            $object->setFrontendLabel($data['frontend_label']);
        } elseif (\array_key_exists('frontend_label', $data) && $data['frontend_label'] === null) {
            $object->setFrontendLabel(null);
        }
        if (\array_key_exists('input_filter', $data) && $data['input_filter'] !== null) {
            $object->setInputFilter($data['input_filter']);
        } elseif (\array_key_exists('input_filter', $data) && $data['input_filter'] === null) {
            $object->setInputFilter(null);
        }
        if (\array_key_exists('is_filterable_in_grid', $data) && $data['is_filterable_in_grid'] !== null) {
            $object->setIsFilterableInGrid($data['is_filterable_in_grid']);
        } elseif (\array_key_exists('is_filterable_in_grid', $data) && $data['is_filterable_in_grid'] === null) {
            $object->setIsFilterableInGrid(null);
        }
        if (\array_key_exists('is_searchable_in_grid', $data) && $data['is_searchable_in_grid'] !== null) {
            $object->setIsSearchableInGrid($data['is_searchable_in_grid']);
        } elseif (\array_key_exists('is_searchable_in_grid', $data) && $data['is_searchable_in_grid'] === null) {
            $object->setIsSearchableInGrid(null);
        }
        if (\array_key_exists('is_used_in_grid', $data) && $data['is_used_in_grid'] !== null) {
            $object->setIsUsedInGrid($data['is_used_in_grid']);
        } elseif (\array_key_exists('is_used_in_grid', $data) && $data['is_used_in_grid'] === null) {
            $object->setIsUsedInGrid(null);
        }
        if (\array_key_exists('is_visible_in_grid', $data) && $data['is_visible_in_grid'] !== null) {
            $object->setIsVisibleInGrid($data['is_visible_in_grid']);
        } elseif (\array_key_exists('is_visible_in_grid', $data) && $data['is_visible_in_grid'] === null) {
            $object->setIsVisibleInGrid(null);
        }
        if (\array_key_exists('multiline_count', $data) && $data['multiline_count'] !== null) {
            $object->setMultilineCount($data['multiline_count']);
        } elseif (\array_key_exists('multiline_count', $data) && $data['multiline_count'] === null) {
            $object->setMultilineCount(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
        } elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values = array();
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataOptionInterface', 'json', $context);
            }
            $object->setOptions($values);
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
        } elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        } elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        if (\array_key_exists('store_label', $data) && $data['store_label'] !== null) {
            $object->setStoreLabel($data['store_label']);
        } elseif (\array_key_exists('store_label', $data) && $data['store_label'] === null) {
            $object->setStoreLabel(null);
        }
        if (\array_key_exists('system', $data) && $data['system'] !== null) {
            $object->setSystem($data['system']);
        } elseif (\array_key_exists('system', $data) && $data['system'] === null) {
            $object->setSystem(null);
        }
        if (\array_key_exists('user_defined', $data) && $data['user_defined'] !== null) {
            $object->setUserDefined($data['user_defined']);
        } elseif (\array_key_exists('user_defined', $data) && $data['user_defined'] === null) {
            $object->setUserDefined(null);
        }
        if (\array_key_exists('validation_rules', $data) && $data['validation_rules'] !== null) {
            $values_1 = array();
            foreach ($data['validation_rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataValidationRuleInterface', 'json', $context);
            }
            $object->setValidationRules($values_1);
        } elseif (\array_key_exists('validation_rules', $data) && $data['validation_rules'] === null) {
            $object->setValidationRules(null);
        }
        if (\array_key_exists('visible', $data) && $data['visible'] !== null) {
            $object->setVisible($data['visible']);
        } elseif (\array_key_exists('visible', $data) && $data['visible'] === null) {
            $object->setVisible(null);
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
