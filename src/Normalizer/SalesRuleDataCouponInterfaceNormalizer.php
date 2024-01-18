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
class SalesRuleDataCouponInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesRuleDataCouponInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesRuleDataCouponInterface';
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
        $object = new \Kiboko\Magento\Model\SalesRuleDataCouponInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('coupon_id', $data) && $data['coupon_id'] !== null) {
            $object->setCouponId($data['coupon_id']);
        }
        elseif (\array_key_exists('coupon_id', $data) && $data['coupon_id'] === null) {
            $object->setCouponId(null);
        }
        if (\array_key_exists('rule_id', $data) && $data['rule_id'] !== null) {
            $object->setRuleId($data['rule_id']);
        }
        elseif (\array_key_exists('rule_id', $data) && $data['rule_id'] === null) {
            $object->setRuleId(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('usage_limit', $data) && $data['usage_limit'] !== null) {
            $object->setUsageLimit($data['usage_limit']);
        }
        elseif (\array_key_exists('usage_limit', $data) && $data['usage_limit'] === null) {
            $object->setUsageLimit(null);
        }
        if (\array_key_exists('usage_per_customer', $data) && $data['usage_per_customer'] !== null) {
            $object->setUsagePerCustomer($data['usage_per_customer']);
        }
        elseif (\array_key_exists('usage_per_customer', $data) && $data['usage_per_customer'] === null) {
            $object->setUsagePerCustomer(null);
        }
        if (\array_key_exists('times_used', $data) && $data['times_used'] !== null) {
            $object->setTimesUsed($data['times_used']);
        }
        elseif (\array_key_exists('times_used', $data) && $data['times_used'] === null) {
            $object->setTimesUsed(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        }
        elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('is_primary', $data) && $data['is_primary'] !== null) {
            $object->setIsPrimary($data['is_primary']);
        }
        elseif (\array_key_exists('is_primary', $data) && $data['is_primary'] === null) {
            $object->setIsPrimary(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\SalesRuleDataCouponExtensionInterface', 'json', $context));
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
        if ($object->isInitialized('couponId') && null !== $object->getCouponId()) {
            $data['coupon_id'] = $object->getCouponId();
        }
        $data['rule_id'] = $object->getRuleId();
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('usageLimit') && null !== $object->getUsageLimit()) {
            $data['usage_limit'] = $object->getUsageLimit();
        }
        if ($object->isInitialized('usagePerCustomer') && null !== $object->getUsagePerCustomer()) {
            $data['usage_per_customer'] = $object->getUsagePerCustomer();
        }
        $data['times_used'] = $object->getTimesUsed();
        if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        $data['is_primary'] = $object->getIsPrimary();
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesRuleDataCouponInterface' => false);
    }
}