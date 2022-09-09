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

class CompanyCreditDataHistoryDataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\CompanyCreditDataHistoryDataInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\CompanyCreditDataHistoryDataInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\CompanyCreditDataHistoryDataInterface();
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
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
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
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('company_credit_id', $data) && $data['company_credit_id'] !== null) {
            $object->setCompanyCreditId($data['company_credit_id']);
        } elseif (\array_key_exists('company_credit_id', $data) && $data['company_credit_id'] === null) {
            $object->setCompanyCreditId(null);
        }
        if (\array_key_exists('credit_limit', $data) && $data['credit_limit'] !== null) {
            $object->setCreditLimit($data['credit_limit']);
        } elseif (\array_key_exists('credit_limit', $data) && $data['credit_limit'] === null) {
            $object->setCreditLimit(null);
        }
        if (\array_key_exists('currency_credit', $data) && $data['currency_credit'] !== null) {
            $object->setCurrencyCredit($data['currency_credit']);
        } elseif (\array_key_exists('currency_credit', $data) && $data['currency_credit'] === null) {
            $object->setCurrencyCredit(null);
        }
        if (\array_key_exists('currency_operation', $data) && $data['currency_operation'] !== null) {
            $object->setCurrencyOperation($data['currency_operation']);
        } elseif (\array_key_exists('currency_operation', $data) && $data['currency_operation'] === null) {
            $object->setCurrencyOperation(null);
        }
        if (\array_key_exists('datetime', $data) && $data['datetime'] !== null) {
            $object->setDatetime($data['datetime']);
        } elseif (\array_key_exists('datetime', $data) && $data['datetime'] === null) {
            $object->setDatetime(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('purchase_order', $data) && $data['purchase_order'] !== null) {
            $object->setPurchaseOrder($data['purchase_order']);
        } elseif (\array_key_exists('purchase_order', $data) && $data['purchase_order'] === null) {
            $object->setPurchaseOrder(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('rate_credit', $data) && $data['rate_credit'] !== null) {
            $object->setRateCredit($data['rate_credit']);
        } elseif (\array_key_exists('rate_credit', $data) && $data['rate_credit'] === null) {
            $object->setRateCredit(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('user_type', $data) && $data['user_type'] !== null) {
            $object->setUserType($data['user_type']);
        } elseif (\array_key_exists('user_type', $data) && $data['user_type'] === null) {
            $object->setUserType(null);
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
