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

class QuoteDataProductOptionExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataProductOptionExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataProductOptionExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\QuoteDataProductOptionExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bundle_options', $data) && $data['bundle_options'] !== null) {
            $values = array();
            foreach ($data['bundle_options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\BundleDataBundleOptionInterface', 'json', $context);
            }
            $object->setBundleOptions($values);
        } elseif (\array_key_exists('bundle_options', $data) && $data['bundle_options'] === null) {
            $object->setBundleOptions(null);
        }
        if (\array_key_exists('configurable_item_options', $data) && $data['configurable_item_options'] !== null) {
            $values_1 = array();
            foreach ($data['configurable_item_options'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\ConfigurableProductDataConfigurableItemOptionValueInterface', 'json', $context);
            }
            $object->setConfigurableItemOptions($values_1);
        } elseif (\array_key_exists('configurable_item_options', $data) && $data['configurable_item_options'] === null) {
            $object->setConfigurableItemOptions(null);
        }
        if (\array_key_exists('custom_options', $data) && $data['custom_options'] !== null) {
            $values_2 = array();
            foreach ($data['custom_options'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataCustomOptionInterface', 'json', $context);
            }
            $object->setCustomOptions($values_2);
        } elseif (\array_key_exists('custom_options', $data) && $data['custom_options'] === null) {
            $object->setCustomOptions(null);
        }
        if (\array_key_exists('downloadable_option', $data) && $data['downloadable_option'] !== null) {
            $object->setDownloadableOption($this->denormalizer->denormalize($data['downloadable_option'], 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataDownloadableOptionInterface', 'json', $context));
        } elseif (\array_key_exists('downloadable_option', $data) && $data['downloadable_option'] === null) {
            $object->setDownloadableOption(null);
        }
        if (\array_key_exists('giftcard_item_option', $data) && $data['giftcard_item_option'] !== null) {
            $object->setGiftcardItemOption($this->denormalizer->denormalize($data['giftcard_item_option'], 'Kiboko\\Magento\\V2_4\\Model\\GiftCardDataGiftCardOptionInterface', 'json', $context));
        } elseif (\array_key_exists('giftcard_item_option', $data) && $data['giftcard_item_option'] === null) {
            $object->setGiftcardItemOption(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBundleOptions()) {
            $values = array();
            foreach ($object->getBundleOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['bundle_options'] = $values;
        }
        if (null !== $object->getConfigurableItemOptions()) {
            $values_1 = array();
            foreach ($object->getConfigurableItemOptions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['configurable_item_options'] = $values_1;
        }
        if (null !== $object->getCustomOptions()) {
            $values_2 = array();
            foreach ($object->getCustomOptions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['custom_options'] = $values_2;
        }
        if (null !== $object->getDownloadableOption()) {
            $data['downloadable_option'] = $this->normalizer->normalize($object->getDownloadableOption(), 'json', $context);
        }
        if (null !== $object->getGiftcardItemOption()) {
            $data['giftcard_item_option'] = $this->normalizer->normalize($object->getGiftcardItemOption(), 'json', $context);
        }
        return $data;
    }
}
