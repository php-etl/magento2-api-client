<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\CatalogDataProductExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\CatalogDataProductExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\CatalogDataProductExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stock_item', $data)) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\v2_1\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        }
        if (\array_key_exists('bundle_product_options', $data)) {
            $values = array();
            foreach ($data['bundle_product_options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_1\\Model\\BundleDataOptionInterface', 'json', $context);
            }
            $object->setBundleProductOptions($values);
        }
        if (\array_key_exists('downloadable_product_links', $data)) {
            $values_1 = array();
            foreach ($data['downloadable_product_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_1\\Model\\DownloadableDataLinkInterface', 'json', $context);
            }
            $object->setDownloadableProductLinks($values_1);
        }
        if (\array_key_exists('downloadable_product_samples', $data)) {
            $values_2 = array();
            foreach ($data['downloadable_product_samples'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_1\\Model\\DownloadableDataSampleInterface', 'json', $context);
            }
            $object->setDownloadableProductSamples($values_2);
        }
        if (\array_key_exists('giftcard_amounts', $data)) {
            $values_3 = array();
            foreach ($data['giftcard_amounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_1\\Model\\GiftCardDataGiftcardAmountInterface', 'json', $context);
            }
            $object->setGiftcardAmounts($values_3);
        }
        if (\array_key_exists('configurable_product_options', $data)) {
            $values_4 = array();
            foreach ($data['configurable_product_options'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\v2_1\\Model\\ConfigurableProductDataOptionInterface', 'json', $context);
            }
            $object->setConfigurableProductOptions($values_4);
        }
        if (\array_key_exists('configurable_product_links', $data)) {
            $values_5 = array();
            foreach ($data['configurable_product_links'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setConfigurableProductLinks($values_5);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStockItem()) {
            $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        }
        if (null !== $object->getBundleProductOptions()) {
            $values = array();
            foreach ($object->getBundleProductOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['bundle_product_options'] = $values;
        }
        if (null !== $object->getDownloadableProductLinks()) {
            $values_1 = array();
            foreach ($object->getDownloadableProductLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['downloadable_product_links'] = $values_1;
        }
        if (null !== $object->getDownloadableProductSamples()) {
            $values_2 = array();
            foreach ($object->getDownloadableProductSamples() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['downloadable_product_samples'] = $values_2;
        }
        if (null !== $object->getGiftcardAmounts()) {
            $values_3 = array();
            foreach ($object->getGiftcardAmounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['giftcard_amounts'] = $values_3;
        }
        if (null !== $object->getConfigurableProductOptions()) {
            $values_4 = array();
            foreach ($object->getConfigurableProductOptions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['configurable_product_options'] = $values_4;
        }
        if (null !== $object->getConfigurableProductLinks()) {
            $values_5 = array();
            foreach ($object->getConfigurableProductLinks() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['configurable_product_links'] = $values_5;
        }
        return $data;
    }
}
