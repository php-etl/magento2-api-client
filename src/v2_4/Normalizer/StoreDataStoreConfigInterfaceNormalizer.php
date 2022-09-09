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

class StoreDataStoreConfigInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\StoreDataStoreConfigInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\StoreDataStoreConfigInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\StoreDataStoreConfigInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        } elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('base_link_url', $data) && $data['base_link_url'] !== null) {
            $object->setBaseLinkUrl($data['base_link_url']);
        } elseif (\array_key_exists('base_link_url', $data) && $data['base_link_url'] === null) {
            $object->setBaseLinkUrl(null);
        }
        if (\array_key_exists('base_media_url', $data) && $data['base_media_url'] !== null) {
            $object->setBaseMediaUrl($data['base_media_url']);
        } elseif (\array_key_exists('base_media_url', $data) && $data['base_media_url'] === null) {
            $object->setBaseMediaUrl(null);
        }
        if (\array_key_exists('base_static_url', $data) && $data['base_static_url'] !== null) {
            $object->setBaseStaticUrl($data['base_static_url']);
        } elseif (\array_key_exists('base_static_url', $data) && $data['base_static_url'] === null) {
            $object->setBaseStaticUrl(null);
        }
        if (\array_key_exists('base_url', $data) && $data['base_url'] !== null) {
            $object->setBaseUrl($data['base_url']);
        } elseif (\array_key_exists('base_url', $data) && $data['base_url'] === null) {
            $object->setBaseUrl(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('default_display_currency_code', $data) && $data['default_display_currency_code'] !== null) {
            $object->setDefaultDisplayCurrencyCode($data['default_display_currency_code']);
        } elseif (\array_key_exists('default_display_currency_code', $data) && $data['default_display_currency_code'] === null) {
            $object->setDefaultDisplayCurrencyCode(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $object->setLocale($data['locale']);
        } elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('secure_base_link_url', $data) && $data['secure_base_link_url'] !== null) {
            $object->setSecureBaseLinkUrl($data['secure_base_link_url']);
        } elseif (\array_key_exists('secure_base_link_url', $data) && $data['secure_base_link_url'] === null) {
            $object->setSecureBaseLinkUrl(null);
        }
        if (\array_key_exists('secure_base_media_url', $data) && $data['secure_base_media_url'] !== null) {
            $object->setSecureBaseMediaUrl($data['secure_base_media_url']);
        } elseif (\array_key_exists('secure_base_media_url', $data) && $data['secure_base_media_url'] === null) {
            $object->setSecureBaseMediaUrl(null);
        }
        if (\array_key_exists('secure_base_static_url', $data) && $data['secure_base_static_url'] !== null) {
            $object->setSecureBaseStaticUrl($data['secure_base_static_url']);
        } elseif (\array_key_exists('secure_base_static_url', $data) && $data['secure_base_static_url'] === null) {
            $object->setSecureBaseStaticUrl(null);
        }
        if (\array_key_exists('secure_base_url', $data) && $data['secure_base_url'] !== null) {
            $object->setSecureBaseUrl($data['secure_base_url']);
        } elseif (\array_key_exists('secure_base_url', $data) && $data['secure_base_url'] === null) {
            $object->setSecureBaseUrl(null);
        }
        if (\array_key_exists('timezone', $data) && $data['timezone'] !== null) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && $data['timezone'] === null) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('website_id', $data) && $data['website_id'] !== null) {
            $object->setWebsiteId($data['website_id']);
        } elseif (\array_key_exists('website_id', $data) && $data['website_id'] === null) {
            $object->setWebsiteId(null);
        }
        if (\array_key_exists('weight_unit', $data) && $data['weight_unit'] !== null) {
            $object->setWeightUnit($data['weight_unit']);
        } elseif (\array_key_exists('weight_unit', $data) && $data['weight_unit'] === null) {
            $object->setWeightUnit(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['base_currency_code'] = $object->getBaseCurrencyCode();
        $data['base_link_url'] = $object->getBaseLinkUrl();
        $data['base_media_url'] = $object->getBaseMediaUrl();
        $data['base_static_url'] = $object->getBaseStaticUrl();
        $data['base_url'] = $object->getBaseUrl();
        $data['code'] = $object->getCode();
        $data['default_display_currency_code'] = $object->getDefaultDisplayCurrencyCode();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['id'] = $object->getId();
        $data['locale'] = $object->getLocale();
        $data['secure_base_link_url'] = $object->getSecureBaseLinkUrl();
        $data['secure_base_media_url'] = $object->getSecureBaseMediaUrl();
        $data['secure_base_static_url'] = $object->getSecureBaseStaticUrl();
        $data['secure_base_url'] = $object->getSecureBaseUrl();
        $data['timezone'] = $object->getTimezone();
        $data['website_id'] = $object->getWebsiteId();
        $data['weight_unit'] = $object->getWeightUnit();
        return $data;
    }
}
