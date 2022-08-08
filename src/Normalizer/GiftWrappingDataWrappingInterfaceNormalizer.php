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

class GiftWrappingDataWrappingInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\GiftWrappingDataWrappingInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\GiftWrappingDataWrappingInterface';
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
        $object = new \Kiboko\Magento\V2\Model\GiftWrappingDataWrappingInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('wrapping_id', $data)) {
            $object->setWrappingId($data['wrapping_id']);
        }
        if (\array_key_exists('design', $data)) {
            $object->setDesign($data['design']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('base_price', $data)) {
            $object->setBasePrice($data['base_price']);
        }
        if (\array_key_exists('image_name', $data)) {
            $object->setImageName($data['image_name']);
        }
        if (\array_key_exists('image_base64_content', $data)) {
            $object->setImageBase64Content($data['image_base64_content']);
        }
        if (\array_key_exists('base_currency_code', $data)) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        if (\array_key_exists('website_ids', $data)) {
            $values = array();
            foreach ($data['website_ids'] as $value) {
                $values[] = $value;
            }
            $object->setWebsiteIds($values);
        }
        if (\array_key_exists('image_url', $data)) {
            $object->setImageUrl($data['image_url']);
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
        if (null !== $object->getWrappingId()) {
            $data['wrapping_id'] = $object->getWrappingId();
        }
        $data['design'] = $object->getDesign();
        $data['status'] = $object->getStatus();
        $data['base_price'] = $object->getBasePrice();
        if (null !== $object->getImageName()) {
            $data['image_name'] = $object->getImageName();
        }
        if (null !== $object->getImageBase64Content()) {
            $data['image_base64_content'] = $object->getImageBase64Content();
        }
        if (null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if (null !== $object->getWebsiteIds()) {
            $values = array();
            foreach ($object->getWebsiteIds() as $value) {
                $values[] = $value;
            }
            $data['website_ids'] = $values;
        }
        if (null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
