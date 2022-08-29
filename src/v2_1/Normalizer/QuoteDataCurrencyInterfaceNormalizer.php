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

class QuoteDataCurrencyInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataCurrencyInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataCurrencyInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\QuoteDataCurrencyInterface();
        if (\array_key_exists('store_to_base_rate', $data) && \is_int($data['store_to_base_rate'])) {
            $data['store_to_base_rate'] = (float) $data['store_to_base_rate'];
        }
        if (\array_key_exists('store_to_quote_rate', $data) && \is_int($data['store_to_quote_rate'])) {
            $data['store_to_quote_rate'] = (float) $data['store_to_quote_rate'];
        }
        if (\array_key_exists('base_to_global_rate', $data) && \is_int($data['base_to_global_rate'])) {
            $data['base_to_global_rate'] = (float) $data['base_to_global_rate'];
        }
        if (\array_key_exists('base_to_quote_rate', $data) && \is_int($data['base_to_quote_rate'])) {
            $data['base_to_quote_rate'] = (float) $data['base_to_quote_rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('global_currency_code', $data)) {
            $object->setGlobalCurrencyCode($data['global_currency_code']);
        }
        if (\array_key_exists('base_currency_code', $data)) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        if (\array_key_exists('store_currency_code', $data)) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        }
        if (\array_key_exists('quote_currency_code', $data)) {
            $object->setQuoteCurrencyCode($data['quote_currency_code']);
        }
        if (\array_key_exists('store_to_base_rate', $data)) {
            $object->setStoreToBaseRate($data['store_to_base_rate']);
        }
        if (\array_key_exists('store_to_quote_rate', $data)) {
            $object->setStoreToQuoteRate($data['store_to_quote_rate']);
        }
        if (\array_key_exists('base_to_global_rate', $data)) {
            $object->setBaseToGlobalRate($data['base_to_global_rate']);
        }
        if (\array_key_exists('base_to_quote_rate', $data)) {
            $object->setBaseToQuoteRate($data['base_to_quote_rate']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        if (null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if (null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if (null !== $object->getQuoteCurrencyCode()) {
            $data['quote_currency_code'] = $object->getQuoteCurrencyCode();
        }
        if (null !== $object->getStoreToBaseRate()) {
            $data['store_to_base_rate'] = $object->getStoreToBaseRate();
        }
        if (null !== $object->getStoreToQuoteRate()) {
            $data['store_to_quote_rate'] = $object->getStoreToQuoteRate();
        }
        if (null !== $object->getBaseToGlobalRate()) {
            $data['base_to_global_rate'] = $object->getBaseToGlobalRate();
        }
        if (null !== $object->getBaseToQuoteRate()) {
            $data['base_to_quote_rate'] = $object->getBaseToQuoteRate();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
