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
class QuoteDataShippingMethodInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\QuoteDataShippingMethodInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\QuoteDataShippingMethodInterface';
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
        $object = new \Kiboko\Magento\Model\QuoteDataShippingMethodInterface();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('base_amount', $data) && \is_int($data['base_amount'])) {
            $data['base_amount'] = (double) $data['base_amount'];
        }
        if (\array_key_exists('price_excl_tax', $data) && \is_int($data['price_excl_tax'])) {
            $data['price_excl_tax'] = (double) $data['price_excl_tax'];
        }
        if (\array_key_exists('price_incl_tax', $data) && \is_int($data['price_incl_tax'])) {
            $data['price_incl_tax'] = (double) $data['price_incl_tax'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('carrier_code', $data) && $data['carrier_code'] !== null) {
            $object->setCarrierCode($data['carrier_code']);
        }
        elseif (\array_key_exists('carrier_code', $data) && $data['carrier_code'] === null) {
            $object->setCarrierCode(null);
        }
        if (\array_key_exists('method_code', $data) && $data['method_code'] !== null) {
            $object->setMethodCode($data['method_code']);
        }
        elseif (\array_key_exists('method_code', $data) && $data['method_code'] === null) {
            $object->setMethodCode(null);
        }
        if (\array_key_exists('carrier_title', $data) && $data['carrier_title'] !== null) {
            $object->setCarrierTitle($data['carrier_title']);
        }
        elseif (\array_key_exists('carrier_title', $data) && $data['carrier_title'] === null) {
            $object->setCarrierTitle(null);
        }
        if (\array_key_exists('method_title', $data) && $data['method_title'] !== null) {
            $object->setMethodTitle($data['method_title']);
        }
        elseif (\array_key_exists('method_title', $data) && $data['method_title'] === null) {
            $object->setMethodTitle(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('base_amount', $data) && $data['base_amount'] !== null) {
            $object->setBaseAmount($data['base_amount']);
        }
        elseif (\array_key_exists('base_amount', $data) && $data['base_amount'] === null) {
            $object->setBaseAmount(null);
        }
        if (\array_key_exists('available', $data) && $data['available'] !== null) {
            $object->setAvailable($data['available']);
        }
        elseif (\array_key_exists('available', $data) && $data['available'] === null) {
            $object->setAvailable(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('error_message', $data) && $data['error_message'] !== null) {
            $object->setErrorMessage($data['error_message']);
        }
        elseif (\array_key_exists('error_message', $data) && $data['error_message'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('price_excl_tax', $data) && $data['price_excl_tax'] !== null) {
            $object->setPriceExclTax($data['price_excl_tax']);
        }
        elseif (\array_key_exists('price_excl_tax', $data) && $data['price_excl_tax'] === null) {
            $object->setPriceExclTax(null);
        }
        if (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] !== null) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        elseif (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] === null) {
            $object->setPriceInclTax(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['carrier_code'] = $object->getCarrierCode();
        $data['method_code'] = $object->getMethodCode();
        if ($object->isInitialized('carrierTitle') && null !== $object->getCarrierTitle()) {
            $data['carrier_title'] = $object->getCarrierTitle();
        }
        if ($object->isInitialized('methodTitle') && null !== $object->getMethodTitle()) {
            $data['method_title'] = $object->getMethodTitle();
        }
        $data['amount'] = $object->getAmount();
        $data['base_amount'] = $object->getBaseAmount();
        $data['available'] = $object->getAvailable();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['error_message'] = $object->getErrorMessage();
        $data['price_excl_tax'] = $object->getPriceExclTax();
        $data['price_incl_tax'] = $object->getPriceInclTax();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\QuoteDataShippingMethodInterface' => false);
    }
}