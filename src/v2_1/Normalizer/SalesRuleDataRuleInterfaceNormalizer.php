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

class SalesRuleDataRuleInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataRuleInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataRuleInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\SalesRuleDataRuleInterface();
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('discount_qty', $data) && \is_int($data['discount_qty'])) {
            $data['discount_qty'] = (float) $data['discount_qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('action_condition', $data) && $data['action_condition'] !== null) {
            $object->setActionCondition($this->denormalizer->denormalize($data['action_condition'], 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataConditionInterface', 'json', $context));
        } elseif (\array_key_exists('action_condition', $data) && $data['action_condition'] === null) {
            $object->setActionCondition(null);
        }
        if (\array_key_exists('apply_to_shipping', $data) && $data['apply_to_shipping'] !== null) {
            $object->setApplyToShipping($data['apply_to_shipping']);
        } elseif (\array_key_exists('apply_to_shipping', $data) && $data['apply_to_shipping'] === null) {
            $object->setApplyToShipping(null);
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $object->setCondition($this->denormalizer->denormalize($data['condition'], 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataConditionInterface', 'json', $context));
        } elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->setCondition(null);
        }
        if (\array_key_exists('coupon_type', $data) && $data['coupon_type'] !== null) {
            $object->setCouponType($data['coupon_type']);
        } elseif (\array_key_exists('coupon_type', $data) && $data['coupon_type'] === null) {
            $object->setCouponType(null);
        }
        if (\array_key_exists('customer_group_ids', $data) && $data['customer_group_ids'] !== null) {
            $values = array();
            foreach ($data['customer_group_ids'] as $value) {
                $values[] = $value;
            }
            $object->setCustomerGroupIds($values);
        } elseif (\array_key_exists('customer_group_ids', $data) && $data['customer_group_ids'] === null) {
            $object->setCustomerGroupIds(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        } elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('discount_qty', $data) && $data['discount_qty'] !== null) {
            $object->setDiscountQty($data['discount_qty']);
        } elseif (\array_key_exists('discount_qty', $data) && $data['discount_qty'] === null) {
            $object->setDiscountQty(null);
        }
        if (\array_key_exists('discount_step', $data) && $data['discount_step'] !== null) {
            $object->setDiscountStep($data['discount_step']);
        } elseif (\array_key_exists('discount_step', $data) && $data['discount_step'] === null) {
            $object->setDiscountStep(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataRuleExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('from_date', $data) && $data['from_date'] !== null) {
            $object->setFromDate($data['from_date']);
        } elseif (\array_key_exists('from_date', $data) && $data['from_date'] === null) {
            $object->setFromDate(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_advanced', $data) && $data['is_advanced'] !== null) {
            $object->setIsAdvanced($data['is_advanced']);
        } elseif (\array_key_exists('is_advanced', $data) && $data['is_advanced'] === null) {
            $object->setIsAdvanced(null);
        }
        if (\array_key_exists('is_rss', $data) && $data['is_rss'] !== null) {
            $object->setIsRss($data['is_rss']);
        } elseif (\array_key_exists('is_rss', $data) && $data['is_rss'] === null) {
            $object->setIsRss(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('product_ids', $data) && $data['product_ids'] !== null) {
            $values_1 = array();
            foreach ($data['product_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProductIds($values_1);
        } elseif (\array_key_exists('product_ids', $data) && $data['product_ids'] === null) {
            $object->setProductIds(null);
        }
        if (\array_key_exists('rule_id', $data) && $data['rule_id'] !== null) {
            $object->setRuleId($data['rule_id']);
        } elseif (\array_key_exists('rule_id', $data) && $data['rule_id'] === null) {
            $object->setRuleId(null);
        }
        if (\array_key_exists('simple_action', $data) && $data['simple_action'] !== null) {
            $object->setSimpleAction($data['simple_action']);
        } elseif (\array_key_exists('simple_action', $data) && $data['simple_action'] === null) {
            $object->setSimpleAction(null);
        }
        if (\array_key_exists('simple_free_shipping', $data) && $data['simple_free_shipping'] !== null) {
            $object->setSimpleFreeShipping($data['simple_free_shipping']);
        } elseif (\array_key_exists('simple_free_shipping', $data) && $data['simple_free_shipping'] === null) {
            $object->setSimpleFreeShipping(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        } elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        if (\array_key_exists('stop_rules_processing', $data) && $data['stop_rules_processing'] !== null) {
            $object->setStopRulesProcessing($data['stop_rules_processing']);
        } elseif (\array_key_exists('stop_rules_processing', $data) && $data['stop_rules_processing'] === null) {
            $object->setStopRulesProcessing(null);
        }
        if (\array_key_exists('store_labels', $data) && $data['store_labels'] !== null) {
            $values_2 = array();
            foreach ($data['store_labels'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataRuleLabelInterface', 'json', $context);
            }
            $object->setStoreLabels($values_2);
        } elseif (\array_key_exists('store_labels', $data) && $data['store_labels'] === null) {
            $object->setStoreLabels(null);
        }
        if (\array_key_exists('times_used', $data) && $data['times_used'] !== null) {
            $object->setTimesUsed($data['times_used']);
        } elseif (\array_key_exists('times_used', $data) && $data['times_used'] === null) {
            $object->setTimesUsed(null);
        }
        if (\array_key_exists('to_date', $data) && $data['to_date'] !== null) {
            $object->setToDate($data['to_date']);
        } elseif (\array_key_exists('to_date', $data) && $data['to_date'] === null) {
            $object->setToDate(null);
        }
        if (\array_key_exists('use_auto_generation', $data) && $data['use_auto_generation'] !== null) {
            $object->setUseAutoGeneration($data['use_auto_generation']);
        } elseif (\array_key_exists('use_auto_generation', $data) && $data['use_auto_generation'] === null) {
            $object->setUseAutoGeneration(null);
        }
        if (\array_key_exists('uses_per_coupon', $data) && $data['uses_per_coupon'] !== null) {
            $object->setUsesPerCoupon($data['uses_per_coupon']);
        } elseif (\array_key_exists('uses_per_coupon', $data) && $data['uses_per_coupon'] === null) {
            $object->setUsesPerCoupon(null);
        }
        if (\array_key_exists('uses_per_customer', $data) && $data['uses_per_customer'] !== null) {
            $object->setUsesPerCustomer($data['uses_per_customer']);
        } elseif (\array_key_exists('uses_per_customer', $data) && $data['uses_per_customer'] === null) {
            $object->setUsesPerCustomer(null);
        }
        if (\array_key_exists('website_ids', $data) && $data['website_ids'] !== null) {
            $values_3 = array();
            foreach ($data['website_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setWebsiteIds($values_3);
        } elseif (\array_key_exists('website_ids', $data) && $data['website_ids'] === null) {
            $object->setWebsiteIds(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActionCondition()) {
            $data['action_condition'] = $this->normalizer->normalize($object->getActionCondition(), 'json', $context);
        }
        $data['apply_to_shipping'] = $object->getApplyToShipping();
        if (null !== $object->getCondition()) {
            $data['condition'] = $this->normalizer->normalize($object->getCondition(), 'json', $context);
        }
        $data['coupon_type'] = $object->getCouponType();
        $values = array();
        foreach ($object->getCustomerGroupIds() as $value) {
            $values[] = $value;
        }
        $data['customer_group_ids'] = $values;
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['discount_amount'] = $object->getDiscountAmount();
        if (null !== $object->getDiscountQty()) {
            $data['discount_qty'] = $object->getDiscountQty();
        }
        $data['discount_step'] = $object->getDiscountStep();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFromDate()) {
            $data['from_date'] = $object->getFromDate();
        }
        $data['is_active'] = $object->getIsActive();
        $data['is_advanced'] = $object->getIsAdvanced();
        $data['is_rss'] = $object->getIsRss();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getProductIds()) {
            $values_1 = array();
            foreach ($object->getProductIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['product_ids'] = $values_1;
        }
        if (null !== $object->getRuleId()) {
            $data['rule_id'] = $object->getRuleId();
        }
        if (null !== $object->getSimpleAction()) {
            $data['simple_action'] = $object->getSimpleAction();
        }
        if (null !== $object->getSimpleFreeShipping()) {
            $data['simple_free_shipping'] = $object->getSimpleFreeShipping();
        }
        $data['sort_order'] = $object->getSortOrder();
        $data['stop_rules_processing'] = $object->getStopRulesProcessing();
        if (null !== $object->getStoreLabels()) {
            $values_2 = array();
            foreach ($object->getStoreLabels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['store_labels'] = $values_2;
        }
        $data['times_used'] = $object->getTimesUsed();
        if (null !== $object->getToDate()) {
            $data['to_date'] = $object->getToDate();
        }
        $data['use_auto_generation'] = $object->getUseAutoGeneration();
        $data['uses_per_coupon'] = $object->getUsesPerCoupon();
        $data['uses_per_customer'] = $object->getUsesPerCustomer();
        $values_3 = array();
        foreach ($object->getWebsiteIds() as $value_3) {
            $values_3[] = $value_3;
        }
        $data['website_ids'] = $values_3;
        return $data;
    }
}
