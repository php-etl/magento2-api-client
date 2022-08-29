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

class CatalogDataCategoryAttributeInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataCategoryAttributeInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataCategoryAttributeInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CatalogDataCategoryAttributeInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_wysiwyg_enabled', $data)) {
            $object->setIsWysiwygEnabled($data['is_wysiwyg_enabled']);
        }
        if (\array_key_exists('is_html_allowed_on_front', $data)) {
            $object->setIsHtmlAllowedOnFront($data['is_html_allowed_on_front']);
        }
        if (\array_key_exists('used_for_sort_by', $data)) {
            $object->setUsedForSortBy($data['used_for_sort_by']);
        }
        if (\array_key_exists('is_filterable', $data)) {
            $object->setIsFilterable($data['is_filterable']);
        }
        if (\array_key_exists('is_filterable_in_search', $data)) {
            $object->setIsFilterableInSearch($data['is_filterable_in_search']);
        }
        if (\array_key_exists('is_used_in_grid', $data)) {
            $object->setIsUsedInGrid($data['is_used_in_grid']);
        }
        if (\array_key_exists('is_visible_in_grid', $data)) {
            $object->setIsVisibleInGrid($data['is_visible_in_grid']);
        }
        if (\array_key_exists('is_filterable_in_grid', $data)) {
            $object->setIsFilterableInGrid($data['is_filterable_in_grid']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('apply_to', $data)) {
            $values = array();
            foreach ($data['apply_to'] as $value) {
                $values[] = $value;
            }
            $object->setApplyTo($values);
        }
        if (\array_key_exists('is_searchable', $data)) {
            $object->setIsSearchable($data['is_searchable']);
        }
        if (\array_key_exists('is_visible_in_advanced_search', $data)) {
            $object->setIsVisibleInAdvancedSearch($data['is_visible_in_advanced_search']);
        }
        if (\array_key_exists('is_comparable', $data)) {
            $object->setIsComparable($data['is_comparable']);
        }
        if (\array_key_exists('is_used_for_promo_rules', $data)) {
            $object->setIsUsedForPromoRules($data['is_used_for_promo_rules']);
        }
        if (\array_key_exists('is_visible_on_front', $data)) {
            $object->setIsVisibleOnFront($data['is_visible_on_front']);
        }
        if (\array_key_exists('used_in_product_listing', $data)) {
            $object->setUsedInProductListing($data['used_in_product_listing']);
        }
        if (\array_key_exists('is_visible', $data)) {
            $object->setIsVisible($data['is_visible']);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('attribute_id', $data)) {
            $object->setAttributeId($data['attribute_id']);
        }
        if (\array_key_exists('attribute_code', $data)) {
            $object->setAttributeCode($data['attribute_code']);
        }
        if (\array_key_exists('frontend_input', $data)) {
            $object->setFrontendInput($data['frontend_input']);
        }
        if (\array_key_exists('entity_type_id', $data)) {
            $object->setEntityTypeId($data['entity_type_id']);
        }
        if (\array_key_exists('is_required', $data)) {
            $object->setIsRequired($data['is_required']);
        }
        if (\array_key_exists('options', $data)) {
            $values_1 = array();
            foreach ($data['options'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\EavDataAttributeOptionInterface', 'json', $context);
            }
            $object->setOptions($values_1);
        }
        if (\array_key_exists('is_user_defined', $data)) {
            $object->setIsUserDefined($data['is_user_defined']);
        }
        if (\array_key_exists('default_frontend_label', $data)) {
            $object->setDefaultFrontendLabel($data['default_frontend_label']);
        }
        if (\array_key_exists('frontend_labels', $data)) {
            $values_2 = array();
            foreach ($data['frontend_labels'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_3\\Model\\EavDataAttributeFrontendLabelInterface', 'json', $context);
            }
            $object->setFrontendLabels($values_2);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('backend_type', $data)) {
            $object->setBackendType($data['backend_type']);
        }
        if (\array_key_exists('backend_model', $data)) {
            $object->setBackendModel($data['backend_model']);
        }
        if (\array_key_exists('source_model', $data)) {
            $object->setSourceModel($data['source_model']);
        }
        if (\array_key_exists('default_value', $data)) {
            $object->setDefaultValue($data['default_value']);
        }
        if (\array_key_exists('is_unique', $data)) {
            $object->setIsUnique($data['is_unique']);
        }
        if (\array_key_exists('frontend_class', $data)) {
            $object->setFrontendClass($data['frontend_class']);
        }
        if (\array_key_exists('validation_rules', $data)) {
            $values_3 = array();
            foreach ($data['validation_rules'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_3\\Model\\EavDataAttributeValidationRuleInterface', 'json', $context);
            }
            $object->setValidationRules($values_3);
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values_4 = array();
            foreach ($data['custom_attributes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\v2_3\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_4);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsWysiwygEnabled()) {
            $data['is_wysiwyg_enabled'] = $object->getIsWysiwygEnabled();
        }
        if (null !== $object->getIsHtmlAllowedOnFront()) {
            $data['is_html_allowed_on_front'] = $object->getIsHtmlAllowedOnFront();
        }
        if (null !== $object->getUsedForSortBy()) {
            $data['used_for_sort_by'] = $object->getUsedForSortBy();
        }
        if (null !== $object->getIsFilterable()) {
            $data['is_filterable'] = $object->getIsFilterable();
        }
        if (null !== $object->getIsFilterableInSearch()) {
            $data['is_filterable_in_search'] = $object->getIsFilterableInSearch();
        }
        if (null !== $object->getIsUsedInGrid()) {
            $data['is_used_in_grid'] = $object->getIsUsedInGrid();
        }
        if (null !== $object->getIsVisibleInGrid()) {
            $data['is_visible_in_grid'] = $object->getIsVisibleInGrid();
        }
        if (null !== $object->getIsFilterableInGrid()) {
            $data['is_filterable_in_grid'] = $object->getIsFilterableInGrid();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getApplyTo()) {
            $values = array();
            foreach ($object->getApplyTo() as $value) {
                $values[] = $value;
            }
            $data['apply_to'] = $values;
        }
        if (null !== $object->getIsSearchable()) {
            $data['is_searchable'] = $object->getIsSearchable();
        }
        if (null !== $object->getIsVisibleInAdvancedSearch()) {
            $data['is_visible_in_advanced_search'] = $object->getIsVisibleInAdvancedSearch();
        }
        if (null !== $object->getIsComparable()) {
            $data['is_comparable'] = $object->getIsComparable();
        }
        if (null !== $object->getIsUsedForPromoRules()) {
            $data['is_used_for_promo_rules'] = $object->getIsUsedForPromoRules();
        }
        if (null !== $object->getIsVisibleOnFront()) {
            $data['is_visible_on_front'] = $object->getIsVisibleOnFront();
        }
        if (null !== $object->getUsedInProductListing()) {
            $data['used_in_product_listing'] = $object->getUsedInProductListing();
        }
        if (null !== $object->getIsVisible()) {
            $data['is_visible'] = $object->getIsVisible();
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getAttributeId()) {
            $data['attribute_id'] = $object->getAttributeId();
        }
        $data['attribute_code'] = $object->getAttributeCode();
        $data['frontend_input'] = $object->getFrontendInput();
        $data['entity_type_id'] = $object->getEntityTypeId();
        $data['is_required'] = $object->getIsRequired();
        if (null !== $object->getOptions()) {
            $values_1 = array();
            foreach ($object->getOptions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['options'] = $values_1;
        }
        if (null !== $object->getIsUserDefined()) {
            $data['is_user_defined'] = $object->getIsUserDefined();
        }
        if (null !== $object->getDefaultFrontendLabel()) {
            $data['default_frontend_label'] = $object->getDefaultFrontendLabel();
        }
        $values_2 = array();
        foreach ($object->getFrontendLabels() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['frontend_labels'] = $values_2;
        if (null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if (null !== $object->getBackendType()) {
            $data['backend_type'] = $object->getBackendType();
        }
        if (null !== $object->getBackendModel()) {
            $data['backend_model'] = $object->getBackendModel();
        }
        if (null !== $object->getSourceModel()) {
            $data['source_model'] = $object->getSourceModel();
        }
        if (null !== $object->getDefaultValue()) {
            $data['default_value'] = $object->getDefaultValue();
        }
        if (null !== $object->getIsUnique()) {
            $data['is_unique'] = $object->getIsUnique();
        }
        if (null !== $object->getFrontendClass()) {
            $data['frontend_class'] = $object->getFrontendClass();
        }
        if (null !== $object->getValidationRules()) {
            $values_3 = array();
            foreach ($object->getValidationRules() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['validation_rules'] = $values_3;
        }
        if (null !== $object->getCustomAttributes()) {
            $values_4 = array();
            foreach ($object->getCustomAttributes() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['custom_attributes'] = $values_4;
        }
        return $data;
    }
}
