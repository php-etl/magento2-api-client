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

class SalesDataTransactionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataTransactionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataTransactionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataTransactionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_information', $data)) {
            $values = array();
            foreach ($data['additional_information'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalInformation($values);
        }
        if (\array_key_exists('child_transactions', $data)) {
            $values_1 = array();
            foreach ($data['child_transactions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\SalesDataTransactionInterface', 'json', $context);
            }
            $object->setChildTransactions($values_1);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('is_closed', $data)) {
            $object->setIsClosed($data['is_closed']);
        }
        if (\array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('parent_txn_id', $data)) {
            $object->setParentTxnId($data['parent_txn_id']);
        }
        if (\array_key_exists('payment_id', $data)) {
            $object->setPaymentId($data['payment_id']);
        }
        if (\array_key_exists('transaction_id', $data)) {
            $object->setTransactionId($data['transaction_id']);
        }
        if (\array_key_exists('txn_id', $data)) {
            $object->setTxnId($data['txn_id']);
        }
        if (\array_key_exists('txn_type', $data)) {
            $object->setTxnType($data['txn_type']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalInformation()) {
            $values = array();
            foreach ($object->getAdditionalInformation() as $value) {
                $values[] = $value;
            }
            $data['additional_information'] = $values;
        }
        $values_1 = array();
        foreach ($object->getChildTransactions() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['child_transactions'] = $values_1;
        $data['created_at'] = $object->getCreatedAt();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['is_closed'] = $object->getIsClosed();
        $data['order_id'] = $object->getOrderId();
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        $data['parent_txn_id'] = $object->getParentTxnId();
        $data['payment_id'] = $object->getPaymentId();
        $data['transaction_id'] = $object->getTransactionId();
        $data['txn_id'] = $object->getTxnId();
        $data['txn_type'] = $object->getTxnType();
        return $data;
    }
}
