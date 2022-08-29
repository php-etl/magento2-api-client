<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesRuleDataRuleInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataRuleInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataRuleInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\SalesRuleDataRuleInterface();
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('discount_qty', $data) && \is_int($data['discount_qty'])) {
            $data['discount_qty'] = (float) $data['discount_qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rule_id', $data)) {
            $object->setRuleId($data['rule_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('store_labels', $data)) {
            $values = array();
            foreach ($data['store_labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataRuleLabelInterface', 'json', $context);
            }
            $object->setStoreLabels($values);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('website_ids', $data)) {
            $values_1 = array();
            foreach ($data['website_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWebsiteIds($values_1);
        }
        if (\array_key_exists('customer_group_ids', $data)) {
            $values_2 = array();
            foreach ($data['customer_group_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCustomerGroupIds($values_2);
        }
        if (\array_key_exists('from_date', $data)) {
            $object->setFromDate($data['from_date']);
        }
        if (\array_key_exists('to_date', $data)) {
            $object->setToDate($data['to_date']);
        }
        if (\array_key_exists('uses_per_customer', $data)) {
            $object->setUsesPerCustomer($data['uses_per_customer']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($this->denormalizer->denormalize($data['condition'], 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataConditionInterface', 'json', $context));
        }
        if (\array_key_exists('action_condition', $data)) {
            $object->setActionCondition($this->denormalizer->denormalize($data['action_condition'], 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataConditionInterface', 'json', $context));
        }
        if (\array_key_exists('stop_rules_processing', $data)) {
            $object->setStopRulesProcessing($data['stop_rules_processing']);
        }
        if (\array_key_exists('is_advanced', $data)) {
            $object->setIsAdvanced($data['is_advanced']);
        }
        if (\array_key_exists('product_ids', $data)) {
            $values_3 = array();
            foreach ($data['product_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setProductIds($values_3);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
        }
        if (\array_key_exists('simple_action', $data)) {
            $object->setSimpleAction($data['simple_action']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('discount_qty', $data)) {
            $object->setDiscountQty($data['discount_qty']);
        }
        if (\array_key_exists('discount_step', $data)) {
            $object->setDiscountStep($data['discount_step']);
        }
        if (\array_key_exists('apply_to_shipping', $data)) {
            $object->setApplyToShipping($data['apply_to_shipping']);
        }
        if (\array_key_exists('times_used', $data)) {
            $object->setTimesUsed($data['times_used']);
        }
        if (\array_key_exists('is_rss', $data)) {
            $object->setIsRss($data['is_rss']);
        }
        if (\array_key_exists('coupon_type', $data)) {
            $object->setCouponType($data['coupon_type']);
        }
        if (\array_key_exists('use_auto_generation', $data)) {
            $object->setUseAutoGeneration($data['use_auto_generation']);
        }
        if (\array_key_exists('uses_per_coupon', $data)) {
            $object->setUsesPerCoupon($data['uses_per_coupon']);
        }
        if (\array_key_exists('simple_free_shipping', $data)) {
            $object->setSimpleFreeShipping($data['simple_free_shipping']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataRuleExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRuleId()) {
            $data['rule_id'] = $object->getRuleId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getStoreLabels()) {
            $values = array();
            foreach ($object->getStoreLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['store_labels'] = $values;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $values_1 = array();
        foreach ($object->getWebsiteIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['website_ids'] = $values_1;
        $values_2 = array();
        foreach ($object->getCustomerGroupIds() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['customer_group_ids'] = $values_2;
        if (null !== $object->getFromDate()) {
            $data['from_date'] = $object->getFromDate();
        }
        if (null !== $object->getToDate()) {
            $data['to_date'] = $object->getToDate();
        }
        $data['uses_per_customer'] = $object->getUsesPerCustomer();
        $data['is_active'] = $object->getIsActive();
        if (null !== $object->getCondition()) {
            $data['condition'] = $this->normalizer->normalize($object->getCondition(), 'json', $context);
        }
        if (null !== $object->getActionCondition()) {
            $data['action_condition'] = $this->normalizer->normalize($object->getActionCondition(), 'json', $context);
        }
        $data['stop_rules_processing'] = $object->getStopRulesProcessing();
        $data['is_advanced'] = $object->getIsAdvanced();
        if (null !== $object->getProductIds()) {
            $values_3 = array();
            foreach ($object->getProductIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['product_ids'] = $values_3;
        }
        $data['sort_order'] = $object->getSortOrder();
        if (null !== $object->getSimpleAction()) {
            $data['simple_action'] = $object->getSimpleAction();
        }
        $data['discount_amount'] = $object->getDiscountAmount();
        if (null !== $object->getDiscountQty()) {
            $data['discount_qty'] = $object->getDiscountQty();
        }
        $data['discount_step'] = $object->getDiscountStep();
        $data['apply_to_shipping'] = $object->getApplyToShipping();
        $data['times_used'] = $object->getTimesUsed();
        $data['is_rss'] = $object->getIsRss();
        $data['coupon_type'] = $object->getCouponType();
        $data['use_auto_generation'] = $object->getUseAutoGeneration();
        $data['uses_per_coupon'] = $object->getUsesPerCoupon();
        if (null !== $object->getSimpleFreeShipping()) {
            $data['simple_free_shipping'] = $object->getSimpleFreeShipping();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
