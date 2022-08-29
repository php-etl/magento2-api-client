<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CatalogDataProductInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CatalogDataProductInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('attribute_set_id', $data)) {
            $object->setAttributeSetId($data['attribute_set_id']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
        }
        if (\array_key_exists('type_id', $data)) {
            $object->setTypeId($data['type_id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('product_links', $data)) {
            $values = array();
            foreach ($data['product_links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductLinkInterface', 'json', $context);
            }
            $object->setProductLinks($values);
        }
        if (\array_key_exists('options', $data)) {
            $values_1 = array();
            foreach ($data['options'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductCustomOptionInterface', 'json', $context);
            }
            $object->setOptions($values_1);
        }
        if (\array_key_exists('media_gallery_entries', $data)) {
            $values_2 = array();
            foreach ($data['media_gallery_entries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductAttributeMediaGalleryEntryInterface', 'json', $context);
            }
            $object->setMediaGalleryEntries($values_2);
        }
        if (\array_key_exists('tier_prices', $data)) {
            $values_3 = array();
            foreach ($data['tier_prices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductTierPriceInterface', 'json', $context);
            }
            $object->setTierPrices($values_3);
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values_4 = array();
            foreach ($data['custom_attributes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\v2_3\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_4);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['sku'] = $object->getSku();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getAttributeSetId()) {
            $data['attribute_set_id'] = $object->getAttributeSetId();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if (null !== $object->getTypeId()) {
            $data['type_id'] = $object->getTypeId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getProductLinks()) {
            $values = array();
            foreach ($object->getProductLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['product_links'] = $values;
        }
        if (null !== $object->getOptions()) {
            $values_1 = array();
            foreach ($object->getOptions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['options'] = $values_1;
        }
        if (null !== $object->getMediaGalleryEntries()) {
            $values_2 = array();
            foreach ($object->getMediaGalleryEntries() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['media_gallery_entries'] = $values_2;
        }
        if (null !== $object->getTierPrices()) {
            $values_3 = array();
            foreach ($object->getTierPrices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['tier_prices'] = $values_3;
        }
        if (null !== $object->getCustomAttributes()) {
            $values_4 = array();
            foreach ($object->getCustomAttributes() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['custom_attributes'] = $values_4;
        }
        return $data;
    }
}
