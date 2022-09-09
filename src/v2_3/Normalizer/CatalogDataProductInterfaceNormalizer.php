<?php

namespace Kiboko\Magento\V2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_3\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CatalogDataProductInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] !== null) {
            $object->setAttributeSetId($data['attribute_set_id']);
        } elseif (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] === null) {
            $object->setAttributeSetId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values = array();
            foreach ($data['custom_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values);
        } elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('media_gallery_entries', $data) && $data['media_gallery_entries'] !== null) {
            $values_1 = array();
            foreach ($data['media_gallery_entries'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductAttributeMediaGalleryEntryInterface', 'json', $context);
            }
            $object->setMediaGalleryEntries($values_1);
        } elseif (\array_key_exists('media_gallery_entries', $data) && $data['media_gallery_entries'] === null) {
            $object->setMediaGalleryEntries(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_2 = array();
            foreach ($data['options'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductCustomOptionInterface', 'json', $context);
            }
            $object->setOptions($values_2);
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('product_links', $data) && $data['product_links'] !== null) {
            $values_3 = array();
            foreach ($data['product_links'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductLinkInterface', 'json', $context);
            }
            $object->setProductLinks($values_3);
        } elseif (\array_key_exists('product_links', $data) && $data['product_links'] === null) {
            $object->setProductLinks(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        } elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('tier_prices', $data) && $data['tier_prices'] !== null) {
            $values_4 = array();
            foreach ($data['tier_prices'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductTierPriceInterface', 'json', $context);
            }
            $object->setTierPrices($values_4);
        } elseif (\array_key_exists('tier_prices', $data) && $data['tier_prices'] === null) {
            $object->setTierPrices(null);
        }
        if (\array_key_exists('type_id', $data) && $data['type_id'] !== null) {
            $object->setTypeId($data['type_id']);
        } elseif (\array_key_exists('type_id', $data) && $data['type_id'] === null) {
            $object->setTypeId(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('visibility', $data) && $data['visibility'] !== null) {
            $object->setVisibility($data['visibility']);
        } elseif (\array_key_exists('visibility', $data) && $data['visibility'] === null) {
            $object->setVisibility(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttributeSetId()) {
            $data['attribute_set_id'] = $object->getAttributeSetId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomAttributes()) {
            $values = array();
            foreach ($object->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom_attributes'] = $values;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getMediaGalleryEntries()) {
            $values_1 = array();
            foreach ($object->getMediaGalleryEntries() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['media_gallery_entries'] = $values_1;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOptions()) {
            $values_2 = array();
            foreach ($object->getOptions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['options'] = $values_2;
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getProductLinks()) {
            $values_3 = array();
            foreach ($object->getProductLinks() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['product_links'] = $values_3;
        }
        $data['sku'] = $object->getSku();
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTierPrices()) {
            $values_4 = array();
            foreach ($object->getTierPrices() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['tier_prices'] = $values_4;
        }
        if (null !== $object->getTypeId()) {
            $data['type_id'] = $object->getTypeId();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        return $data;
    }
}
