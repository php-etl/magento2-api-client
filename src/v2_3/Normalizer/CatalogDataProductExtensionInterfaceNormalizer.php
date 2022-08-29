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
class CatalogDataProductExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CatalogDataProductExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('website_ids', $data)) {
            $values = array();
            foreach ($data['website_ids'] as $value) {
                $values[] = $value;
            }
            $object->setWebsiteIds($values);
        }
        if (\array_key_exists('category_links', $data)) {
            $values_1 = array();
            foreach ($data['category_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataCategoryLinkInterface', 'json', $context);
            }
            $object->setCategoryLinks($values_1);
        }
        if (\array_key_exists('stock_item', $data)) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\v2_3\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        }
        if (\array_key_exists('bundle_product_options', $data)) {
            $values_2 = array();
            foreach ($data['bundle_product_options'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_3\\Model\\BundleDataOptionInterface', 'json', $context);
            }
            $object->setBundleProductOptions($values_2);
        }
        if (\array_key_exists('configurable_product_options', $data)) {
            $values_3 = array();
            foreach ($data['configurable_product_options'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_3\\Model\\ConfigurableProductDataOptionInterface', 'json', $context);
            }
            $object->setConfigurableProductOptions($values_3);
        }
        if (\array_key_exists('configurable_product_links', $data)) {
            $values_4 = array();
            foreach ($data['configurable_product_links'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setConfigurableProductLinks($values_4);
        }
        if (\array_key_exists('downloadable_product_links', $data)) {
            $values_5 = array();
            foreach ($data['downloadable_product_links'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataLinkInterface', 'json', $context);
            }
            $object->setDownloadableProductLinks($values_5);
        }
        if (\array_key_exists('downloadable_product_samples', $data)) {
            $values_6 = array();
            foreach ($data['downloadable_product_samples'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataSampleInterface', 'json', $context);
            }
            $object->setDownloadableProductSamples($values_6);
        }
        if (\array_key_exists('giftcard_amounts', $data)) {
            $values_7 = array();
            foreach ($data['giftcard_amounts'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Kiboko\\Magento\\v2_3\\Model\\GiftCardDataGiftcardAmountInterface', 'json', $context);
            }
            $object->setGiftcardAmounts($values_7);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getWebsiteIds()) {
            $values = array();
            foreach ($object->getWebsiteIds() as $value) {
                $values[] = $value;
            }
            $data['website_ids'] = $values;
        }
        if (null !== $object->getCategoryLinks()) {
            $values_1 = array();
            foreach ($object->getCategoryLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['category_links'] = $values_1;
        }
        if (null !== $object->getStockItem()) {
            $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        }
        if (null !== $object->getBundleProductOptions()) {
            $values_2 = array();
            foreach ($object->getBundleProductOptions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['bundle_product_options'] = $values_2;
        }
        if (null !== $object->getConfigurableProductOptions()) {
            $values_3 = array();
            foreach ($object->getConfigurableProductOptions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['configurable_product_options'] = $values_3;
        }
        if (null !== $object->getConfigurableProductLinks()) {
            $values_4 = array();
            foreach ($object->getConfigurableProductLinks() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['configurable_product_links'] = $values_4;
        }
        if (null !== $object->getDownloadableProductLinks()) {
            $values_5 = array();
            foreach ($object->getDownloadableProductLinks() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['downloadable_product_links'] = $values_5;
        }
        if (null !== $object->getDownloadableProductSamples()) {
            $values_6 = array();
            foreach ($object->getDownloadableProductSamples() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['downloadable_product_samples'] = $values_6;
        }
        if (null !== $object->getGiftcardAmounts()) {
            $values_7 = array();
            foreach ($object->getGiftcardAmounts() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['giftcard_amounts'] = $values_7;
        }
        return $data;
    }
}