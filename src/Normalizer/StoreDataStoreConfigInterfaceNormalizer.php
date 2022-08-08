<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StoreDataStoreConfigInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\StoreDataStoreConfigInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\StoreDataStoreConfigInterface';
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
        $object = new \Kiboko\Magento\V2\Model\StoreDataStoreConfigInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('website_id', $data)) {
            $object->setWebsiteId($data['website_id']);
        }
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($data['locale']);
        }
        if (\array_key_exists('base_currency_code', $data)) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        if (\array_key_exists('default_display_currency_code', $data)) {
            $object->setDefaultDisplayCurrencyCode($data['default_display_currency_code']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
        }
        if (\array_key_exists('weight_unit', $data)) {
            $object->setWeightUnit($data['weight_unit']);
        }
        if (\array_key_exists('base_url', $data)) {
            $object->setBaseUrl($data['base_url']);
        }
        if (\array_key_exists('base_link_url', $data)) {
            $object->setBaseLinkUrl($data['base_link_url']);
        }
        if (\array_key_exists('base_static_url', $data)) {
            $object->setBaseStaticUrl($data['base_static_url']);
        }
        if (\array_key_exists('base_media_url', $data)) {
            $object->setBaseMediaUrl($data['base_media_url']);
        }
        if (\array_key_exists('secure_base_url', $data)) {
            $object->setSecureBaseUrl($data['secure_base_url']);
        }
        if (\array_key_exists('secure_base_link_url', $data)) {
            $object->setSecureBaseLinkUrl($data['secure_base_link_url']);
        }
        if (\array_key_exists('secure_base_static_url', $data)) {
            $object->setSecureBaseStaticUrl($data['secure_base_static_url']);
        }
        if (\array_key_exists('secure_base_media_url', $data)) {
            $object->setSecureBaseMediaUrl($data['secure_base_media_url']);
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
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['website_id'] = $object->getWebsiteId();
        $data['locale'] = $object->getLocale();
        $data['base_currency_code'] = $object->getBaseCurrencyCode();
        $data['default_display_currency_code'] = $object->getDefaultDisplayCurrencyCode();
        $data['timezone'] = $object->getTimezone();
        $data['weight_unit'] = $object->getWeightUnit();
        $data['base_url'] = $object->getBaseUrl();
        $data['base_link_url'] = $object->getBaseLinkUrl();
        $data['base_static_url'] = $object->getBaseStaticUrl();
        $data['base_media_url'] = $object->getBaseMediaUrl();
        $data['secure_base_url'] = $object->getSecureBaseUrl();
        $data['secure_base_link_url'] = $object->getSecureBaseLinkUrl();
        $data['secure_base_static_url'] = $object->getSecureBaseStaticUrl();
        $data['secure_base_media_url'] = $object->getSecureBaseMediaUrl();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
