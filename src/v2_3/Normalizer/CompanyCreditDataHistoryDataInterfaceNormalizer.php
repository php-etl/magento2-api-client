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

class CompanyCreditDataHistoryDataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CompanyCreditDataHistoryDataInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CompanyCreditDataHistoryDataInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CompanyCreditDataHistoryDataInterface();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('available_limit', $data) && \is_int($data['available_limit'])) {
            $data['available_limit'] = (float) $data['available_limit'];
        }
        if (\array_key_exists('balance', $data) && \is_int($data['balance'])) {
            $data['balance'] = (float) $data['balance'];
        }
        if (\array_key_exists('credit_limit', $data) && \is_int($data['credit_limit'])) {
            $data['credit_limit'] = (float) $data['credit_limit'];
        }
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
        }
        if (\array_key_exists('rate_credit', $data) && \is_int($data['rate_credit'])) {
            $data['rate_credit'] = (float) $data['rate_credit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('available_limit', $data)) {
            $object->setAvailableLimit($data['available_limit']);
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        if (\array_key_exists('company_credit_id', $data)) {
            $object->setCompanyCreditId($data['company_credit_id']);
        }
        if (\array_key_exists('credit_limit', $data)) {
            $object->setCreditLimit($data['credit_limit']);
        }
        if (\array_key_exists('currency_credit', $data)) {
            $object->setCurrencyCredit($data['currency_credit']);
        }
        if (\array_key_exists('currency_operation', $data)) {
            $object->setCurrencyOperation($data['currency_operation']);
        }
        if (\array_key_exists('datetime', $data)) {
            $object->setDatetime($data['datetime']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('purchase_order', $data)) {
            $object->setPurchaseOrder($data['purchase_order']);
        }
        if (\array_key_exists('rate', $data)) {
            $object->setRate($data['rate']);
        }
        if (\array_key_exists('rate_credit', $data)) {
            $object->setRateCredit($data['rate_credit']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('user_type', $data)) {
            $object->setUserType($data['user_type']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['amount'] = $object->getAmount();
        if (null !== $object->getAvailableLimit()) {
            $data['available_limit'] = $object->getAvailableLimit();
        }
        $data['balance'] = $object->getBalance();
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getCompanyCreditId()) {
            $data['company_credit_id'] = $object->getCompanyCreditId();
        }
        $data['credit_limit'] = $object->getCreditLimit();
        if (null !== $object->getCurrencyCredit()) {
            $data['currency_credit'] = $object->getCurrencyCredit();
        }
        if (null !== $object->getCurrencyOperation()) {
            $data['currency_operation'] = $object->getCurrencyOperation();
        }
        if (null !== $object->getDatetime()) {
            $data['datetime'] = $object->getDatetime();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        $data['rate'] = $object->getRate();
        if (null !== $object->getRateCredit()) {
            $data['rate_credit'] = $object->getRateCredit();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUserType()) {
            $data['user_type'] = $object->getUserType();
        }
        return $data;
    }
}
