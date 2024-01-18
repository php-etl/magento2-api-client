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
        if (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] !== null) {
            $values = array();
            foreach ($data['bundle_product_options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\BundleDataOptionInterface', 'json', $context);
            }
            $object->setBundleProductOptions($values);
        }
        elseif (\array_key_exists('bundle_product_options', $data) && $data['bundle_product_options'] === null) {
            $object->setBundleProductOptions(null);
        }
        if (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] !== null) {
            $values_1 = array();
            foreach ($data['downloadable_product_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\DownloadableDataLinkInterface', 'json', $context);
            }
            $object->setDownloadableProductLinks($values_1);
        }
        elseif (\array_key_exists('downloadable_product_links', $data) && $data['downloadable_product_links'] === null) {
            $object->setDownloadableProductLinks(null);
        }
        if (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] !== null) {
            $values_2 = array();
            foreach ($data['downloadable_product_samples'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\DownloadableDataSampleInterface', 'json', $context);
            }
            $object->setDownloadableProductSamples($values_2);
        }
        elseif (\array_key_exists('downloadable_product_samples', $data) && $data['downloadable_product_samples'] === null) {
            $object->setDownloadableProductSamples(null);
        }
        if (\array_key_exists('stock_item', $data) && $data['stock_item'] !== null) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        }
        elseif (\array_key_exists('stock_item', $data) && $data['stock_item'] === null) {
            $object->setStockItem(null);
        }
        if (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] !== null) {
            $values_3 = array();
            foreach ($data['configurable_product_options'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\Model\\ConfigurableProductDataOptionInterface', 'json', $context);
            }
            $object->setConfigurableProductOptions($values_3);
        }
        elseif (\array_key_exists('configurable_product_options', $data) && $data['configurable_product_options'] === null) {
            $object->setConfigurableProductOptions(null);
        }
        if (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] !== null) {
            $values_4 = array();
            foreach ($data['configurable_product_links'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setConfigurableProductLinks($values_4);
        }
        elseif (\array_key_exists('configurable_product_links', $data) && $data['configurable_product_links'] === null) {
            $object->setConfigurableProductLinks(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('bundleProductOptions') && null !== $object->getBundleProductOptions()) {
            $values = array();
            foreach ($object->getBundleProductOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['bundle_product_options'] = $values;
        }
        if ($object->isInitialized('downloadableProductLinks') && null !== $object->getDownloadableProductLinks()) {
            $values_1 = array();
            foreach ($object->getDownloadableProductLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['downloadable_product_links'] = $values_1;
        }
        if ($object->isInitialized('downloadableProductSamples') && null !== $object->getDownloadableProductSamples()) {
            $values_2 = array();
            foreach ($object->getDownloadableProductSamples() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['downloadable_product_samples'] = $values_2;
        }
        if ($object->isInitialized('stockItem') && null !== $object->getStockItem()) {
            $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        }
        if ($object->isInitialized('configurableProductOptions') && null !== $object->getConfigurableProductOptions()) {
            $values_3 = array();
            foreach ($object->getConfigurableProductOptions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['configurable_product_options'] = $values_3;
        }
        if ($object->isInitialized('configurableProductLinks') && null !== $object->getConfigurableProductLinks()) {
            $values_4 = array();
            foreach ($object->getConfigurableProductLinks() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['configurable_product_links'] = $values_4;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductExtensionInterface' => false);
    }
}