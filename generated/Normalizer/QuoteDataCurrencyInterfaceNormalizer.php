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
class QuoteDataCurrencyInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\QuoteDataCurrencyInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\QuoteDataCurrencyInterface';
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
        $object = new \Kiboko\Magento\Model\QuoteDataCurrencyInterface();
        if (\array_key_exists('store_to_base_rate', $data) && \is_int($data['store_to_base_rate'])) {
            $data['store_to_base_rate'] = (double) $data['store_to_base_rate'];
        }
        if (\array_key_exists('store_to_quote_rate', $data) && \is_int($data['store_to_quote_rate'])) {
            $data['store_to_quote_rate'] = (double) $data['store_to_quote_rate'];
        }
        if (\array_key_exists('base_to_global_rate', $data) && \is_int($data['base_to_global_rate'])) {
            $data['base_to_global_rate'] = (double) $data['base_to_global_rate'];
        }
        if (\array_key_exists('base_to_quote_rate', $data) && \is_int($data['base_to_quote_rate'])) {
            $data['base_to_quote_rate'] = (double) $data['base_to_quote_rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] !== null) {
            $object->setGlobalCurrencyCode($data['global_currency_code']);
        }
        elseif (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] === null) {
            $object->setGlobalCurrencyCode(null);
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] !== null) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        }
        elseif (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] === null) {
            $object->setStoreCurrencyCode(null);
        }
        if (\array_key_exists('quote_currency_code', $data) && $data['quote_currency_code'] !== null) {
            $object->setQuoteCurrencyCode($data['quote_currency_code']);
        }
        elseif (\array_key_exists('quote_currency_code', $data) && $data['quote_currency_code'] === null) {
            $object->setQuoteCurrencyCode(null);
        }
        if (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] !== null) {
            $object->setStoreToBaseRate($data['store_to_base_rate']);
        }
        elseif (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] === null) {
            $object->setStoreToBaseRate(null);
        }
        if (\array_key_exists('store_to_quote_rate', $data) && $data['store_to_quote_rate'] !== null) {
            $object->setStoreToQuoteRate($data['store_to_quote_rate']);
        }
        elseif (\array_key_exists('store_to_quote_rate', $data) && $data['store_to_quote_rate'] === null) {
            $object->setStoreToQuoteRate(null);
        }
        if (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] !== null) {
            $object->setBaseToGlobalRate($data['base_to_global_rate']);
        }
        elseif (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] === null) {
            $object->setBaseToGlobalRate(null);
        }
        if (\array_key_exists('base_to_quote_rate', $data) && $data['base_to_quote_rate'] !== null) {
            $object->setBaseToQuoteRate($data['base_to_quote_rate']);
        }
        elseif (\array_key_exists('base_to_quote_rate', $data) && $data['base_to_quote_rate'] === null) {
            $object->setBaseToQuoteRate(null);
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
        if ($object->isInitialized('globalCurrencyCode') && null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        if ($object->isInitialized('baseCurrencyCode') && null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if ($object->isInitialized('storeCurrencyCode') && null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if ($object->isInitialized('quoteCurrencyCode') && null !== $object->getQuoteCurrencyCode()) {
            $data['quote_currency_code'] = $object->getQuoteCurrencyCode();
        }
        if ($object->isInitialized('storeToBaseRate') && null !== $object->getStoreToBaseRate()) {
            $data['store_to_base_rate'] = $object->getStoreToBaseRate();
        }
        if ($object->isInitialized('storeToQuoteRate') && null !== $object->getStoreToQuoteRate()) {
            $data['store_to_quote_rate'] = $object->getStoreToQuoteRate();
        }
        if ($object->isInitialized('baseToGlobalRate') && null !== $object->getBaseToGlobalRate()) {
            $data['base_to_global_rate'] = $object->getBaseToGlobalRate();
        }
        if ($object->isInitialized('baseToQuoteRate') && null !== $object->getBaseToQuoteRate()) {
            $data['base_to_quote_rate'] = $object->getBaseToQuoteRate();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\QuoteDataCurrencyInterface' => false);
    }
}