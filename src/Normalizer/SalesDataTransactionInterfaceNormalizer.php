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
class SalesDataTransactionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataTransactionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataTransactionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataTransactionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('transaction_id', $data) && $data['transaction_id'] !== null) {
            $object->setTransactionId($data['transaction_id']);
        }
        elseif (\array_key_exists('transaction_id', $data) && $data['transaction_id'] === null) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('payment_id', $data) && $data['payment_id'] !== null) {
            $object->setPaymentId($data['payment_id']);
        }
        elseif (\array_key_exists('payment_id', $data) && $data['payment_id'] === null) {
            $object->setPaymentId(null);
        }
        if (\array_key_exists('txn_id', $data) && $data['txn_id'] !== null) {
            $object->setTxnId($data['txn_id']);
        }
        elseif (\array_key_exists('txn_id', $data) && $data['txn_id'] === null) {
            $object->setTxnId(null);
        }
        if (\array_key_exists('parent_txn_id', $data) && $data['parent_txn_id'] !== null) {
            $object->setParentTxnId($data['parent_txn_id']);
        }
        elseif (\array_key_exists('parent_txn_id', $data) && $data['parent_txn_id'] === null) {
            $object->setParentTxnId(null);
        }
        if (\array_key_exists('txn_type', $data) && $data['txn_type'] !== null) {
            $object->setTxnType($data['txn_type']);
        }
        elseif (\array_key_exists('txn_type', $data) && $data['txn_type'] === null) {
            $object->setTxnType(null);
        }
        if (\array_key_exists('is_closed', $data) && $data['is_closed'] !== null) {
            $object->setIsClosed($data['is_closed']);
        }
        elseif (\array_key_exists('is_closed', $data) && $data['is_closed'] === null) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('additional_information', $data) && $data['additional_information'] !== null) {
            $values = array();
            foreach ($data['additional_information'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalInformation($values);
        }
        elseif (\array_key_exists('additional_information', $data) && $data['additional_information'] === null) {
            $object->setAdditionalInformation(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('child_transactions', $data) && $data['child_transactions'] !== null) {
            $values_1 = array();
            foreach ($data['child_transactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\SalesDataTransactionInterface', 'json', $context);
            }
            $object->setChildTransactions($values_1);
        }
        elseif (\array_key_exists('child_transactions', $data) && $data['child_transactions'] === null) {
            $object->setChildTransactions(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
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
        $data['transaction_id'] = $object->getTransactionId();
        if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        $data['order_id'] = $object->getOrderId();
        $data['payment_id'] = $object->getPaymentId();
        $data['txn_id'] = $object->getTxnId();
        $data['parent_txn_id'] = $object->getParentTxnId();
        $data['txn_type'] = $object->getTxnType();
        $data['is_closed'] = $object->getIsClosed();
        if ($object->isInitialized('additionalInformation') && null !== $object->getAdditionalInformation()) {
            $values = array();
            foreach ($object->getAdditionalInformation() as $value) {
                $values[] = $value;
            }
            $data['additional_information'] = $values;
        }
        $data['created_at'] = $object->getCreatedAt();
        $values_1 = array();
        foreach ($object->getChildTransactions() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['child_transactions'] = $values_1;
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataTransactionInterface' => false);
    }
}