<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CatalogDataProductCustomOptionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductCustomOptionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductCustomOptionInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\CatalogDataProductCustomOptionInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductCustomOptionExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('file_extension', $data)) {
            $object->setFileExtension($data['file_extension']);
        }
        if (\array_key_exists('image_size_x', $data)) {
            $object->setImageSizeX($data['image_size_x']);
        }
        if (\array_key_exists('image_size_y', $data)) {
            $object->setImageSizeY($data['image_size_y']);
        }
        if (\array_key_exists('is_require', $data)) {
            $object->setIsRequire($data['is_require']);
        }
        if (\array_key_exists('max_characters', $data)) {
            $object->setMaxCharacters($data['max_characters']);
        }
        if (\array_key_exists('option_id', $data)) {
            $object->setOptionId($data['option_id']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('price_type', $data)) {
            $object->setPriceType($data['price_type']);
        }
        if (\array_key_exists('product_sku', $data)) {
            $object->setProductSku($data['product_sku']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('values', $data)) {
            $values = array();
            foreach ($data['values'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductCustomOptionValuesInterface', 'json', $context);
            }
            $object->setValues($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFileExtension()) {
            $data['file_extension'] = $object->getFileExtension();
        }
        if (null !== $object->getImageSizeX()) {
            $data['image_size_x'] = $object->getImageSizeX();
        }
        if (null !== $object->getImageSizeY()) {
            $data['image_size_y'] = $object->getImageSizeY();
        }
        $data['is_require'] = $object->getIsRequire();
        if (null !== $object->getMaxCharacters()) {
            $data['max_characters'] = $object->getMaxCharacters();
        }
        if (null !== $object->getOptionId()) {
            $data['option_id'] = $object->getOptionId();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getPriceType()) {
            $data['price_type'] = $object->getPriceType();
        }
        $data['product_sku'] = $object->getProductSku();
        if (null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        $data['sort_order'] = $object->getSortOrder();
        $data['title'] = $object->getTitle();
        $data['type'] = $object->getType();
        if (null !== $object->getValues()) {
            $values = array();
            foreach ($object->getValues() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['values'] = $values;
        }
        return $data;
    }
}
