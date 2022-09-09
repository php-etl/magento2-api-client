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

class CompanyCreditDataCreditLimitInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CompanyCreditDataCreditLimitInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CompanyCreditDataCreditLimitInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CompanyCreditDataCreditLimitInterface();
        if (\array_key_exists('available_limit', $data) && \is_int($data['available_limit'])) {
            $data['available_limit'] = (float) $data['available_limit'];
        }
        if (\array_key_exists('balance', $data) && \is_int($data['balance'])) {
            $data['balance'] = (float) $data['balance'];
        }
        if (\array_key_exists('credit_limit', $data) && \is_int($data['credit_limit'])) {
            $data['credit_limit'] = (float) $data['credit_limit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('available_limit', $data) && $data['available_limit'] !== null) {
            $object->setAvailableLimit($data['available_limit']);
        } elseif (\array_key_exists('available_limit', $data) && $data['available_limit'] === null) {
            $object->setAvailableLimit(null);
        }
        if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
            $object->setBalance($data['balance']);
        } elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
            $object->setBalance(null);
        }
        if (\array_key_exists('company_id', $data) && $data['company_id'] !== null) {
            $object->setCompanyId($data['company_id']);
        } elseif (\array_key_exists('company_id', $data) && $data['company_id'] === null) {
            $object->setCompanyId(null);
        }
        if (\array_key_exists('credit_comment', $data) && $data['credit_comment'] !== null) {
            $object->setCreditComment($data['credit_comment']);
        } elseif (\array_key_exists('credit_comment', $data) && $data['credit_comment'] === null) {
            $object->setCreditComment(null);
        }
        if (\array_key_exists('credit_limit', $data) && $data['credit_limit'] !== null) {
            $object->setCreditLimit($data['credit_limit']);
        } elseif (\array_key_exists('credit_limit', $data) && $data['credit_limit'] === null) {
            $object->setCreditLimit(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
        } elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('exceed_limit', $data) && $data['exceed_limit'] !== null) {
            $object->setExceedLimit($data['exceed_limit']);
        } elseif (\array_key_exists('exceed_limit', $data) && $data['exceed_limit'] === null) {
            $object->setExceedLimit(null);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAvailableLimit()) {
            $data['available_limit'] = $object->getAvailableLimit();
        }
        if (null !== $object->getBalance()) {
            $data['balance'] = $object->getBalance();
        }
        if (null !== $object->getCompanyId()) {
            $data['company_id'] = $object->getCompanyId();
        }
        if (null !== $object->getCreditComment()) {
            $data['credit_comment'] = $object->getCreditComment();
        }
        if (null !== $object->getCreditLimit()) {
            $data['credit_limit'] = $object->getCreditLimit();
        }
        if (null !== $object->getCurrencyCode()) {
            $data['currency_code'] = $object->getCurrencyCode();
        }
        $data['exceed_limit'] = $object->getExceedLimit();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        return $data;
    }
}
