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

class CompanyCreditDataCreditLimitInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\CompanyCreditDataCreditLimitInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\CompanyCreditDataCreditLimitInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\CompanyCreditDataCreditLimitInterface();
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
        if (\array_key_exists('available_limit', $data)) {
            $object->setAvailableLimit($data['available_limit']);
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (\array_key_exists('company_id', $data)) {
            $object->setCompanyId($data['company_id']);
        }
        if (\array_key_exists('credit_comment', $data)) {
            $object->setCreditComment($data['credit_comment']);
        }
        if (\array_key_exists('credit_limit', $data)) {
            $object->setCreditLimit($data['credit_limit']);
        }
        if (\array_key_exists('currency_code', $data)) {
            $object->setCurrencyCode($data['currency_code']);
        }
        if (\array_key_exists('exceed_limit', $data)) {
            $object->setExceedLimit($data['exceed_limit']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
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
