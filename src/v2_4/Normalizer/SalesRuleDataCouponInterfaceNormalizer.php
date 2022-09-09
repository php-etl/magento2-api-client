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

class SalesRuleDataCouponInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesRuleDataCouponInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesRuleDataCouponInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesRuleDataCouponInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('coupon_id', $data) && $data['coupon_id'] !== null) {
            $object->setCouponId($data['coupon_id']);
        } elseif (\array_key_exists('coupon_id', $data) && $data['coupon_id'] === null) {
            $object->setCouponId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('is_primary', $data) && $data['is_primary'] !== null) {
            $object->setIsPrimary($data['is_primary']);
        } elseif (\array_key_exists('is_primary', $data) && $data['is_primary'] === null) {
            $object->setIsPrimary(null);
        }
        if (\array_key_exists('rule_id', $data) && $data['rule_id'] !== null) {
            $object->setRuleId($data['rule_id']);
        } elseif (\array_key_exists('rule_id', $data) && $data['rule_id'] === null) {
            $object->setRuleId(null);
        }
        if (\array_key_exists('times_used', $data) && $data['times_used'] !== null) {
            $object->setTimesUsed($data['times_used']);
        } elseif (\array_key_exists('times_used', $data) && $data['times_used'] === null) {
            $object->setTimesUsed(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('usage_limit', $data) && $data['usage_limit'] !== null) {
            $object->setUsageLimit($data['usage_limit']);
        } elseif (\array_key_exists('usage_limit', $data) && $data['usage_limit'] === null) {
            $object->setUsageLimit(null);
        }
        if (\array_key_exists('usage_per_customer', $data) && $data['usage_per_customer'] !== null) {
            $object->setUsagePerCustomer($data['usage_per_customer']);
        } elseif (\array_key_exists('usage_per_customer', $data) && $data['usage_per_customer'] === null) {
            $object->setUsagePerCustomer(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getCouponId()) {
            $data['coupon_id'] = $object->getCouponId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['is_primary'] = $object->getIsPrimary();
        $data['rule_id'] = $object->getRuleId();
        $data['times_used'] = $object->getTimesUsed();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUsageLimit()) {
            $data['usage_limit'] = $object->getUsageLimit();
        }
        if (null !== $object->getUsagePerCustomer()) {
            $data['usage_per_customer'] = $object->getUsagePerCustomer();
        }
        return $data;
    }
}
