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

class CatalogDataProductExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CatalogDataProductExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] !== null) {
            $values = array();
            foreach ($data['bundle_product_options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\BundleDataOptionInterface', 'json', $context);
            }
            $object->setBundleProductOptions($values);
        } elseif (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] === null) {
            $object->setBundleProductOptions(null);
        }
        if (\array_key_exists('category_links', $data) && $data['category_links'] !== null) {
            $values_1 = array();
            foreach ($data['category_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataCategoryLinkInterface', 'json', $context);
            }
            $object->setCategoryLinks($values_1);
        } elseif (\array_key_exists('category_links', $data) && $data['category_links'] === null) {
            $object->setCategoryLinks(null);
        }
        if (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] !== null) {
            $values_2 = array();
            foreach ($data['configurable_product_links'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setConfigurableProductLinks($values_2);
        } elseif (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] === null) {
            $object->setConfigurableProductLinks(null);
        }
        if (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] !== null) {
            $values_3 = array();
            foreach ($data['configurable_product_options'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2_4\\Model\\ConfigurableProductDataOptionInterface', 'json', $context);
            }
            $object->setConfigurableProductOptions($values_3);
        } elseif (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] === null) {
            $object->setConfigurableProductOptions(null);
        }
        if (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] !== null) {
            $values_4 = array();
            foreach ($data['downloadable_product_links'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataLinkInterface', 'json', $context);
            }
            $object->setDownloadableProductLinks($values_4);
        } elseif (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] === null) {
            $object->setDownloadableProductLinks(null);
        }
        if (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] !== null) {
            $values_5 = array();
            foreach ($data['downloadable_product_samples'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataSampleInterface', 'json', $context);
            }
            $object->setDownloadableProductSamples($values_5);
        } elseif (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] === null) {
            $object->setDownloadableProductSamples(null);
        }
        if (\array_key_exists('giftcard_amounts', $data) && $data['giftcard_amounts'] !== null) {
            $values_6 = array();
            foreach ($data['giftcard_amounts'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Kiboko\\Magento\\V2_4\\Model\\GiftCardDataGiftcardAmountInterface', 'json', $context);
            }
            $object->setGiftcardAmounts($values_6);
        } elseif (\array_key_exists('giftcard_amounts', $data) && $data['giftcard_amounts'] === null) {
            $object->setGiftcardAmounts(null);
        }
        if (\array_key_exists('stock_item', $data) && $data['stock_item'] !== null) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\V2_4\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        } elseif (\array_key_exists('stock_item', $data) && $data['stock_item'] === null) {
            $object->setStockItem(null);
        }
        if (\array_key_exists('website_ids', $data) && $data['website_ids'] !== null) {
            $values_7 = array();
            foreach ($data['website_ids'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWebsiteIds($values_7);
        } elseif (\array_key_exists('website_ids', $data) && $data['website_ids'] === null) {
            $object->setWebsiteIds(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBundleProductOptions()) {
            $values = array();
            foreach ($object->getBundleProductOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['bundle_product_options'] = $values;
        }
        if (null !== $object->getCategoryLinks()) {
            $values_1 = array();
            foreach ($object->getCategoryLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['category_links'] = $values_1;
        }
        if (null !== $object->getConfigurableProductLinks()) {
            $values_2 = array();
            foreach ($object->getConfigurableProductLinks() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['configurable_product_links'] = $values_2;
        }
        if (null !== $object->getConfigurableProductOptions()) {
            $values_3 = array();
            foreach ($object->getConfigurableProductOptions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['configurable_product_options'] = $values_3;
        }
        if (null !== $object->getDownloadableProductLinks()) {
            $values_4 = array();
            foreach ($object->getDownloadableProductLinks() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['downloadable_product_links'] = $values_4;
        }
        if (null !== $object->getDownloadableProductSamples()) {
            $values_5 = array();
            foreach ($object->getDownloadableProductSamples() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['downloadable_product_samples'] = $values_5;
        }
        if (null !== $object->getGiftcardAmounts()) {
            $values_6 = array();
            foreach ($object->getGiftcardAmounts() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['giftcard_amounts'] = $values_6;
        }
        if (null !== $object->getStockItem()) {
            $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        }
        if (null !== $object->getWebsiteIds()) {
            $values_7 = array();
            foreach ($object->getWebsiteIds() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['website_ids'] = $values_7;
        }
        return $data;
    }
}
