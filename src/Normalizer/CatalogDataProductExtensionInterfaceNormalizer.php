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
class CatalogDataProductExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('website_ids', $data) && $data['website_ids'] !== null) {
            $values = array();
            foreach ($data['website_ids'] as $value) {
                $values[] = $value;
            }
            $object->setWebsiteIds($values);
        }
        elseif (\array_key_exists('website_ids', $data) && $data['website_ids'] === null) {
            $object->setWebsiteIds(null);
        }
        if (\array_key_exists('category_links', $data) && $data['category_links'] !== null) {
            $values_1 = array();
            foreach ($data['category_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\CatalogDataCategoryLinkInterface', 'json', $context);
            }
            $object->setCategoryLinks($values_1);
        }
        elseif (\array_key_exists('category_links', $data) && $data['category_links'] === null) {
            $object->setCategoryLinks(null);
        }
        if (\array_key_exists('stock_item', $data) && $data['stock_item'] !== null) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        }
        elseif (\array_key_exists('stock_item', $data) && $data['stock_item'] === null) {
            $object->setStockItem(null);
        }
        if (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] !== null) {
            $values_2 = array();
            foreach ($data['downloadable_product_links'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\DownloadableDataLinkInterface', 'json', $context);
            }
            $object->setDownloadableProductLinks($values_2);
        }
        elseif (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] === null) {
            $object->setDownloadableProductLinks(null);
        }
        if (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] !== null) {
            $values_3 = array();
            foreach ($data['downloadable_product_samples'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\Model\\DownloadableDataSampleInterface', 'json', $context);
            }
            $object->setDownloadableProductSamples($values_3);
        }
        elseif (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] === null) {
            $object->setDownloadableProductSamples(null);
        }
        if (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] !== null) {
            $values_4 = array();
            foreach ($data['bundle_product_options'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\Model\\BundleDataOptionInterface', 'json', $context);
            }
            $object->setBundleProductOptions($values_4);
        }
        elseif (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] === null) {
            $object->setBundleProductOptions(null);
        }
        if (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] !== null) {
            $values_5 = array();
            foreach ($data['configurable_product_options'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Kiboko\\Magento\\Model\\ConfigurableProductDataOptionInterface', 'json', $context);
            }
            $object->setConfigurableProductOptions($values_5);
        }
        elseif (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] === null) {
            $object->setConfigurableProductOptions(null);
        }
        if (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] !== null) {
            $values_6 = array();
            foreach ($data['configurable_product_links'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setConfigurableProductLinks($values_6);
        }
        elseif (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] === null) {
            $object->setConfigurableProductLinks(null);
        }
        if (\array_key_exists('discounts', $data) && $data['discounts'] !== null) {
            $values_7 = array();
            foreach ($data['discounts'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Kiboko\\Magento\\Model\\SalesRuleDataRuleDiscountInterface', 'json', $context);
            }
            $object->setDiscounts($values_7);
        }
        elseif (\array_key_exists('discounts', $data) && $data['discounts'] === null) {
            $object->setDiscounts(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('websiteIds') && null !== $object->getWebsiteIds()) {
            $values = array();
            foreach ($object->getWebsiteIds() as $value) {
                $values[] = $value;
            }
            $data['website_ids'] = $values;
        }
        if ($object->isInitialized('categoryLinks') && null !== $object->getCategoryLinks()) {
            $values_1 = array();
            foreach ($object->getCategoryLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['category_links'] = $values_1;
        }
        if ($object->isInitialized('stockItem') && null !== $object->getStockItem()) {
            $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        }
        if ($object->isInitialized('downloadableProductLinks') && null !== $object->getDownloadableProductLinks()) {
            $values_2 = array();
            foreach ($object->getDownloadableProductLinks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['downloadable_product_links'] = $values_2;
        }
        if ($object->isInitialized('downloadableProductSamples') && null !== $object->getDownloadableProductSamples()) {
            $values_3 = array();
            foreach ($object->getDownloadableProductSamples() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['downloadable_product_samples'] = $values_3;
        }
        if ($object->isInitialized('bundleProductOptions') && null !== $object->getBundleProductOptions()) {
            $values_4 = array();
            foreach ($object->getBundleProductOptions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['bundle_product_options'] = $values_4;
        }
        if ($object->isInitialized('configurableProductOptions') && null !== $object->getConfigurableProductOptions()) {
            $values_5 = array();
            foreach ($object->getConfigurableProductOptions() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['configurable_product_options'] = $values_5;
        }
        if ($object->isInitialized('configurableProductLinks') && null !== $object->getConfigurableProductLinks()) {
            $values_6 = array();
            foreach ($object->getConfigurableProductLinks() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['configurable_product_links'] = $values_6;
        }
        if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
            $values_7 = array();
            foreach ($object->getDiscounts() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['discounts'] = $values_7;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductExtensionInterface' => false);
    }
}