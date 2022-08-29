<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class QuoteDataTotalsExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataTotalsExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataTotalsExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\QuoteDataTotalsExtensionInterface();
        if (\array_key_exists('base_customer_balance_amount', $data) && \is_int($data['base_customer_balance_amount'])) {
            $data['base_customer_balance_amount'] = (double) $data['base_customer_balance_amount'];
        }
        if (\array_key_exists('customer_balance_amount', $data) && \is_int($data['customer_balance_amount'])) {
            $data['customer_balance_amount'] = (double) $data['customer_balance_amount'];
        }
        if (\array_key_exists('reward_points_balance', $data) && \is_int($data['reward_points_balance'])) {
            $data['reward_points_balance'] = (double) $data['reward_points_balance'];
        }
        if (\array_key_exists('reward_currency_amount', $data) && \is_int($data['reward_currency_amount'])) {
            $data['reward_currency_amount'] = (double) $data['reward_currency_amount'];
        }
        if (\array_key_exists('base_reward_currency_amount', $data) && \is_int($data['base_reward_currency_amount'])) {
            $data['base_reward_currency_amount'] = (double) $data['base_reward_currency_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_customer_balance_amount', $data)) {
            $object->setBaseCustomerBalanceAmount($data['base_customer_balance_amount']);
        }
        if (\array_key_exists('customer_balance_amount', $data)) {
            $object->setCustomerBalanceAmount($data['customer_balance_amount']);
        }
        if (\array_key_exists('reward_points_balance', $data)) {
            $object->setRewardPointsBalance($data['reward_points_balance']);
        }
        if (\array_key_exists('reward_currency_amount', $data)) {
            $object->setRewardCurrencyAmount($data['reward_currency_amount']);
        }
        if (\array_key_exists('base_reward_currency_amount', $data)) {
            $object->setBaseRewardCurrencyAmount($data['base_reward_currency_amount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaseCustomerBalanceAmount()) {
            $data['base_customer_balance_amount'] = $object->getBaseCustomerBalanceAmount();
        }
        if (null !== $object->getCustomerBalanceAmount()) {
            $data['customer_balance_amount'] = $object->getCustomerBalanceAmount();
        }
        if (null !== $object->getRewardPointsBalance()) {
            $data['reward_points_balance'] = $object->getRewardPointsBalance();
        }
        if (null !== $object->getRewardCurrencyAmount()) {
            $data['reward_currency_amount'] = $object->getRewardCurrencyAmount();
        }
        if (null !== $object->getBaseRewardCurrencyAmount()) {
            $data['base_reward_currency_amount'] = $object->getBaseRewardCurrencyAmount();
        }
        return $data;
    }
}