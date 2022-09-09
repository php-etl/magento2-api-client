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

class GiftWrappingDataWrappingInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\GiftWrappingDataWrappingInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\GiftWrappingDataWrappingInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\GiftWrappingDataWrappingInterface();
        if (\array_key_exists('base_price', $data) && \is_int($data['base_price'])) {
            $data['base_price'] = (float) $data['base_price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        } elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('base_price', $data) && $data['base_price'] !== null) {
            $object->setBasePrice($data['base_price']);
        } elseif (\array_key_exists('base_price', $data) && $data['base_price'] === null) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('design', $data) && $data['design'] !== null) {
            $object->setDesign($data['design']);
        } elseif (\array_key_exists('design', $data) && $data['design'] === null) {
            $object->setDesign(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('image_base64_content', $data) && $data['image_base64_content'] !== null) {
            $object->setImageBase64Content($data['image_base64_content']);
        } elseif (\array_key_exists('image_base64_content', $data) && $data['image_base64_content'] === null) {
            $object->setImageBase64Content(null);
        }
        if (\array_key_exists('image_name', $data) && $data['image_name'] !== null) {
            $object->setImageName($data['image_name']);
        } elseif (\array_key_exists('image_name', $data) && $data['image_name'] === null) {
            $object->setImageName(null);
        }
        if (\array_key_exists('image_url', $data) && $data['image_url'] !== null) {
            $object->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && $data['image_url'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('website_ids', $data) && $data['website_ids'] !== null) {
            $values = array();
            foreach ($data['website_ids'] as $value) {
                $values[] = $value;
            }
            $object->setWebsiteIds($values);
        } elseif (\array_key_exists('website_ids', $data) && $data['website_ids'] === null) {
            $object->setWebsiteIds(null);
        }
        if (\array_key_exists('wrapping_id', $data) && $data['wrapping_id'] !== null) {
            $object->setWrappingId($data['wrapping_id']);
        } elseif (\array_key_exists('wrapping_id', $data) && $data['wrapping_id'] === null) {
            $object->setWrappingId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        $data['base_price'] = $object->getBasePrice();
        $data['design'] = $object->getDesign();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getImageBase64Content()) {
            $data['image_base64_content'] = $object->getImageBase64Content();
        }
        if (null !== $object->getImageName()) {
            $data['image_name'] = $object->getImageName();
        }
        if (null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        $data['status'] = $object->getStatus();
        if (null !== $object->getWebsiteIds()) {
            $values = array();
            foreach ($object->getWebsiteIds() as $value) {
                $values[] = $value;
            }
            $data['website_ids'] = $values;
        }
        if (null !== $object->getWrappingId()) {
            $data['wrapping_id'] = $object->getWrappingId();
        }
        return $data;
    }
}
