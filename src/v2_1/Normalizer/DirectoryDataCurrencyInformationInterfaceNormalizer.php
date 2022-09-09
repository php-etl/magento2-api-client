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

class DirectoryDataCurrencyInformationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\DirectoryDataCurrencyInformationInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\DirectoryDataCurrencyInformationInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\DirectoryDataCurrencyInformationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('available_currency_codes', $data) && $data['available_currency_codes'] !== null) {
            $values = array();
            foreach ($data['available_currency_codes'] as $value) {
                $values[] = $value;
            }
            $object->setAvailableCurrencyCodes($values);
        } elseif (\array_key_exists('available_currency_codes', $data) && $data['available_currency_codes'] === null) {
            $object->setAvailableCurrencyCodes(null);
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        } elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('base_currency_symbol', $data) && $data['base_currency_symbol'] !== null) {
            $object->setBaseCurrencySymbol($data['base_currency_symbol']);
        } elseif (\array_key_exists('base_currency_symbol', $data) && $data['base_currency_symbol'] === null) {
            $object->setBaseCurrencySymbol(null);
        }
        if (\array_key_exists('default_display_currency_code', $data) && $data['default_display_currency_code'] !== null) {
            $object->setDefaultDisplayCurrencyCode($data['default_display_currency_code']);
        } elseif (\array_key_exists('default_display_currency_code', $data) && $data['default_display_currency_code'] === null) {
            $object->setDefaultDisplayCurrencyCode(null);
        }
        if (\array_key_exists('default_display_currency_symbol', $data) && $data['default_display_currency_symbol'] !== null) {
            $object->setDefaultDisplayCurrencySymbol($data['default_display_currency_symbol']);
        } elseif (\array_key_exists('default_display_currency_symbol', $data) && $data['default_display_currency_symbol'] === null) {
            $object->setDefaultDisplayCurrencySymbol(null);
        }
        if (\array_key_exists('exchange_rates', $data) && $data['exchange_rates'] !== null) {
            $values_1 = array();
            foreach ($data['exchange_rates'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_1\\Model\\DirectoryDataExchangeRateInterface', 'json', $context);
            }
            $object->setExchangeRates($values_1);
        } elseif (\array_key_exists('exchange_rates', $data) && $data['exchange_rates'] === null) {
            $object->setExchangeRates(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
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
        $values = array();
        foreach ($object->getAvailableCurrencyCodes() as $value) {
            $values[] = $value;
        }
        $data['available_currency_codes'] = $values;
        $data['base_currency_code'] = $object->getBaseCurrencyCode();
        $data['base_currency_symbol'] = $object->getBaseCurrencySymbol();
        $data['default_display_currency_code'] = $object->getDefaultDisplayCurrencyCode();
        $data['default_display_currency_symbol'] = $object->getDefaultDisplayCurrencySymbol();
        $values_1 = array();
        foreach ($object->getExchangeRates() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['exchange_rates'] = $values_1;
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
