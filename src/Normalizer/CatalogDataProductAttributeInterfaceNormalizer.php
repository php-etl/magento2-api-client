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
class CatalogDataProductAttributeInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductAttributeInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductAttributeInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductAttributeInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\EavDataAttributeExtensionInterface', 'json', $context));
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('is_wysiwyg_enabled', $data) && $data['is_wysiwyg_enabled'] !== null) {
            $object->setIsWysiwygEnabled($data['is_wysiwyg_enabled']);
        }
        elseif (\array_key_exists('is_wysiwyg_enabled', $data) && $data['is_wysiwyg_enabled'] === null) {
            $object->setIsWysiwygEnabled(null);
        }
        if (\array_key_exists('is_html_allowed_on_front', $data) && $data['is_html_allowed_on_front'] !== null) {
            $object->setIsHtmlAllowedOnFront($data['is_html_allowed_on_front']);
        }
        elseif (\array_key_exists('is_html_allowed_on_front', $data) && $data['is_html_allowed_on_front'] === null) {
            $object->setIsHtmlAllowedOnFront(null);
        }
        if (\array_key_exists('used_for_sort_by', $data) && $data['used_for_sort_by'] !== null) {
            $object->setUsedForSortBy($data['used_for_sort_by']);
        }
        elseif (\array_key_exists('used_for_sort_by', $data) && $data['used_for_sort_by'] === null) {
            $object->setUsedForSortBy(null);
        }
        if (\array_key_exists('is_filterable', $data) && $data['is_filterable'] !== null) {
            $object->setIsFilterable($data['is_filterable']);
        }
        elseif (\array_key_exists('is_filterable', $data) && $data['is_filterable'] === null) {
            $object->setIsFilterable(null);
        }
        if (\array_key_exists('is_filterable_in_search', $data) && $data['is_filterable_in_search'] !== null) {
            $object->setIsFilterableInSearch($data['is_filterable_in_search']);
        }
        elseif (\array_key_exists('is_filterable_in_search', $data) && $data['is_filterable_in_search'] === null) {
            $object->setIsFilterableInSearch(null);
        }
        if (\array_key_exists('is_used_in_grid', $data) && $data['is_used_in_grid'] !== null) {
            $object->setIsUsedInGrid($data['is_used_in_grid']);
        }
        elseif (\array_key_exists('is_used_in_grid', $data) && $data['is_used_in_grid'] === null) {
            $object->setIsUsedInGrid(null);
        }
        if (\array_key_exists('is_visible_in_grid', $data) && $data['is_visible_in_grid'] !== null) {
            $object->setIsVisibleInGrid($data['is_visible_in_grid']);
        }
        elseif (\array_key_exists('is_visible_in_grid', $data) && $data['is_visible_in_grid'] === null) {
            $object->setIsVisibleInGrid(null);
        }
        if (\array_key_exists('is_filterable_in_grid', $data) && $data['is_filterable_in_grid'] !== null) {
            $object->setIsFilterableInGrid($data['is_filterable_in_grid']);
        }
        elseif (\array_key_exists('is_filterable_in_grid', $data) && $data['is_filterable_in_grid'] === null) {
            $object->setIsFilterableInGrid(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        }
        elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('apply_to', $data) && $data['apply_to'] !== null) {
            $values = array();
            foreach ($data['apply_to'] as $value) {
                $values[] = $value;
            }
            $object->setApplyTo($values);
        }
        elseif (\array_key_exists('apply_to', $data) && $data['apply_to'] === null) {
            $object->setApplyTo(null);
        }
        if (\array_key_exists('is_searchable', $data) && $data['is_searchable'] !== null) {
            $object->setIsSearchable($data['is_searchable']);
        }
        elseif (\array_key_exists('is_searchable', $data) && $data['is_searchable'] === null) {
            $object->setIsSearchable(null);
        }
        if (\array_key_exists('is_visible_in_advanced_search', $data) && $data['is_visible_in_advanced_search'] !== null) {
            $object->setIsVisibleInAdvancedSearch($data['is_visible_in_advanced_search']);
        }
        elseif (\array_key_exists('is_visible_in_advanced_search', $data) && $data['is_visible_in_advanced_search'] === null) {
            $object->setIsVisibleInAdvancedSearch(null);
        }
        if (\array_key_exists('is_comparable', $data) && $data['is_comparable'] !== null) {
            $object->setIsComparable($data['is_comparable']);
        }
        elseif (\array_key_exists('is_comparable', $data) && $data['is_comparable'] === null) {
            $object->setIsComparable(null);
        }
        if (\array_key_exists('is_used_for_promo_rules', $data) && $data['is_used_for_promo_rules'] !== null) {
            $object->setIsUsedForPromoRules($data['is_used_for_promo_rules']);
        }
        elseif (\array_key_exists('is_used_for_promo_rules', $data) && $data['is_used_for_promo_rules'] === null) {
            $object->setIsUsedForPromoRules(null);
        }
        if (\array_key_exists('is_visible_on_front', $data) && $data['is_visible_on_front'] !== null) {
            $object->setIsVisibleOnFront($data['is_visible_on_front']);
        }
        elseif (\array_key_exists('is_visible_on_front', $data) && $data['is_visible_on_front'] === null) {
            $object->setIsVisibleOnFront(null);
        }
        if (\array_key_exists('used_in_product_listing', $data) && $data['used_in_product_listing'] !== null) {
            $object->setUsedInProductListing($data['used_in_product_listing']);
        }
        elseif (\array_key_exists('used_in_product_listing', $data) && $data['used_in_product_listing'] === null) {
            $object->setUsedInProductListing(null);
        }
        if (\array_key_exists('is_visible', $data) && $data['is_visible'] !== null) {
            $object->setIsVisible($data['is_visible']);
        }
        elseif (\array_key_exists('is_visible', $data) && $data['is_visible'] === null) {
            $object->setIsVisible(null);
        }
        if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
            $object->setScope($data['scope']);
        }
        elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('attribute_id', $data) && $data['attribute_id'] !== null) {
            $object->setAttributeId($data['attribute_id']);
        }
        elseif (\array_key_exists('attribute_id', $data) && $data['attribute_id'] === null) {
            $object->setAttributeId(null);
        }
        if (\array_key_exists('attribute_code', $data) && $data['attribute_code'] !== null) {
            $object->setAttributeCode($data['attribute_code']);
        }
        elseif (\array_key_exists('attribute_code', $data) && $data['attribute_code'] === null) {
            $object->setAttributeCode(null);
        }
        if (\array_key_exists('frontend_input', $data) && $data['frontend_input'] !== null) {
            $object->setFrontendInput($data['frontend_input']);
        }
        elseif (\array_key_exists('frontend_input', $data) && $data['frontend_input'] === null) {
            $object->setFrontendInput(null);
        }
        if (\array_key_exists('entity_type_id', $data) && $data['entity_type_id'] !== null) {
            $object->setEntityTypeId($data['entity_type_id']);
        }
        elseif (\array_key_exists('entity_type_id', $data) && $data['entity_type_id'] === null) {
            $object->setEntityTypeId(null);
        }
        if (\array_key_exists('is_required', $data) && $data['is_required'] !== null) {
            $object->setIsRequired($data['is_required']);
        }
        elseif (\array_key_exists('is_required', $data) && $data['is_required'] === null) {
            $object->setIsRequired(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_1 = array();
            foreach ($data['options'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\EavDataAttributeOptionInterface', 'json', $context);
            }
            $object->setOptions($values_1);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('is_user_defined', $data) && $data['is_user_defined'] !== null) {
            $object->setIsUserDefined($data['is_user_defined']);
        }
        elseif (\array_key_exists('is_user_defined', $data) && $data['is_user_defined'] === null) {
            $object->setIsUserDefined(null);
        }
        if (\array_key_exists('default_frontend_label', $data) && $data['default_frontend_label'] !== null) {
            $object->setDefaultFrontendLabel($data['default_frontend_label']);
        }
        elseif (\array_key_exists('default_frontend_label', $data) && $data['default_frontend_label'] === null) {
            $object->setDefaultFrontendLabel(null);
        }
        if (\array_key_exists('frontend_labels', $data) && $data['frontend_labels'] !== null) {
            $values_2 = array();
            foreach ($data['frontend_labels'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\EavDataAttributeFrontendLabelInterface', 'json', $context);
            }
            $object->setFrontendLabels($values_2);
        }
        elseif (\array_key_exists('frontend_labels', $data) && $data['frontend_labels'] === null) {
            $object->setFrontendLabels(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('backend_type', $data) && $data['backend_type'] !== null) {
            $object->setBackendType($data['backend_type']);
        }
        elseif (\array_key_exists('backend_type', $data) && $data['backend_type'] === null) {
            $object->setBackendType(null);
        }
        if (\array_key_exists('backend_model', $data) && $data['backend_model'] !== null) {
            $object->setBackendModel($data['backend_model']);
        }
        elseif (\array_key_exists('backend_model', $data) && $data['backend_model'] === null) {
            $object->setBackendModel(null);
        }
        if (\array_key_exists('source_model', $data) && $data['source_model'] !== null) {
            $object->setSourceModel($data['source_model']);
        }
        elseif (\array_key_exists('source_model', $data) && $data['source_model'] === null) {
            $object->setSourceModel(null);
        }
        if (\array_key_exists('default_value', $data) && $data['default_value'] !== null) {
            $object->setDefaultValue($data['default_value']);
        }
        elseif (\array_key_exists('default_value', $data) && $data['default_value'] === null) {
            $object->setDefaultValue(null);
        }
        if (\array_key_exists('is_unique', $data) && $data['is_unique'] !== null) {
            $object->setIsUnique($data['is_unique']);
        }
        elseif (\array_key_exists('is_unique', $data) && $data['is_unique'] === null) {
            $object->setIsUnique(null);
        }
        if (\array_key_exists('frontend_class', $data) && $data['frontend_class'] !== null) {
            $object->setFrontendClass($data['frontend_class']);
        }
        elseif (\array_key_exists('frontend_class', $data) && $data['frontend_class'] === null) {
            $object->setFrontendClass(null);
        }
        if (\array_key_exists('validation_rules', $data) && $data['validation_rules'] !== null) {
            $values_3 = array();
            foreach ($data['validation_rules'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\Model\\EavDataAttributeValidationRuleInterface', 'json', $context);
            }
            $object->setValidationRules($values_3);
        }
        elseif (\array_key_exists('validation_rules', $data) && $data['validation_rules'] === null) {
            $object->setValidationRules(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values_4 = array();
            foreach ($data['custom_attributes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_4);
        }
        elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if ($object->isInitialized('isWysiwygEnabled') && null !== $object->getIsWysiwygEnabled()) {
            $data['is_wysiwyg_enabled'] = $object->getIsWysiwygEnabled();
        }
        if ($object->isInitialized('isHtmlAllowedOnFront') && null !== $object->getIsHtmlAllowedOnFront()) {
            $data['is_html_allowed_on_front'] = $object->getIsHtmlAllowedOnFront();
        }
        if ($object->isInitialized('usedForSortBy') && null !== $object->getUsedForSortBy()) {
            $data['used_for_sort_by'] = $object->getUsedForSortBy();
        }
        if ($object->isInitialized('isFilterable') && null !== $object->getIsFilterable()) {
            $data['is_filterable'] = $object->getIsFilterable();
        }
        if ($object->isInitialized('isFilterableInSearch') && null !== $object->getIsFilterableInSearch()) {
            $data['is_filterable_in_search'] = $object->getIsFilterableInSearch();
        }
        if ($object->isInitialized('isUsedInGrid') && null !== $object->getIsUsedInGrid()) {
            $data['is_used_in_grid'] = $object->getIsUsedInGrid();
        }
        if ($object->isInitialized('isVisibleInGrid') && null !== $object->getIsVisibleInGrid()) {
            $data['is_visible_in_grid'] = $object->getIsVisibleInGrid();
        }
        if ($object->isInitialized('isFilterableInGrid') && null !== $object->getIsFilterableInGrid()) {
            $data['is_filterable_in_grid'] = $object->getIsFilterableInGrid();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('applyTo') && null !== $object->getApplyTo()) {
            $values = array();
            foreach ($object->getApplyTo() as $value) {
                $values[] = $value;
            }
            $data['apply_to'] = $values;
        }
        if ($object->isInitialized('isSearchable') && null !== $object->getIsSearchable()) {
            $data['is_searchable'] = $object->getIsSearchable();
        }
        if ($object->isInitialized('isVisibleInAdvancedSearch') && null !== $object->getIsVisibleInAdvancedSearch()) {
            $data['is_visible_in_advanced_search'] = $object->getIsVisibleInAdvancedSearch();
        }
        if ($object->isInitialized('isComparable') && null !== $object->getIsComparable()) {
            $data['is_comparable'] = $object->getIsComparable();
        }
        if ($object->isInitialized('isUsedForPromoRules') && null !== $object->getIsUsedForPromoRules()) {
            $data['is_used_for_promo_rules'] = $object->getIsUsedForPromoRules();
        }
        if ($object->isInitialized('isVisibleOnFront') && null !== $object->getIsVisibleOnFront()) {
            $data['is_visible_on_front'] = $object->getIsVisibleOnFront();
        }
        if ($object->isInitialized('usedInProductListing') && null !== $object->getUsedInProductListing()) {
            $data['used_in_product_listing'] = $object->getUsedInProductListing();
        }
        if ($object->isInitialized('isVisible') && null !== $object->getIsVisible()) {
            $data['is_visible'] = $object->getIsVisible();
        }
        if ($object->isInitialized('scope') && null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if ($object->isInitialized('attributeId') && null !== $object->getAttributeId()) {
            $data['attribute_id'] = $object->getAttributeId();
        }
        $data['attribute_code'] = $object->getAttributeCode();
        $data['frontend_input'] = $object->getFrontendInput();
        $data['entity_type_id'] = $object->getEntityTypeId();
        $data['is_required'] = $object->getIsRequired();
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $values_1 = array();
            foreach ($object->getOptions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['options'] = $values_1;
        }
        if ($object->isInitialized('isUserDefined') && null !== $object->getIsUserDefined()) {
            $data['is_user_defined'] = $object->getIsUserDefined();
        }
        if ($object->isInitialized('defaultFrontendLabel') && null !== $object->getDefaultFrontendLabel()) {
            $data['default_frontend_label'] = $object->getDefaultFrontendLabel();
        }
        $values_2 = array();
        foreach ($object->getFrontendLabels() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['frontend_labels'] = $values_2;
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('backendType') && null !== $object->getBackendType()) {
            $data['backend_type'] = $object->getBackendType();
        }
        if ($object->isInitialized('backendModel') && null !== $object->getBackendModel()) {
            $data['backend_model'] = $object->getBackendModel();
        }
        if ($object->isInitialized('sourceModel') && null !== $object->getSourceModel()) {
            $data['source_model'] = $object->getSourceModel();
        }
        if ($object->isInitialized('defaultValue') && null !== $object->getDefaultValue()) {
            $data['default_value'] = $object->getDefaultValue();
        }
        if ($object->isInitialized('isUnique') && null !== $object->getIsUnique()) {
            $data['is_unique'] = $object->getIsUnique();
        }
        if ($object->isInitialized('frontendClass') && null !== $object->getFrontendClass()) {
            $data['frontend_class'] = $object->getFrontendClass();
        }
        if ($object->isInitialized('validationRules') && null !== $object->getValidationRules()) {
            $values_3 = array();
            foreach ($object->getValidationRules() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['validation_rules'] = $values_3;
        }
        if ($object->isInitialized('customAttributes') && null !== $object->getCustomAttributes()) {
            $values_4 = array();
            foreach ($object->getCustomAttributes() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['custom_attributes'] = $values_4;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductAttributeInterface' => false);
    }
}