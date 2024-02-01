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
class CatalogDataProductCustomOptionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductCustomOptionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductCustomOptionInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('product_sku', $data) && $data['product_sku'] !== null) {
            $object->setProductSku($data['product_sku']);
        }
        elseif (\array_key_exists('product_sku', $data) && $data['product_sku'] === null) {
            $object->setProductSku(null);
        }
        if (\array_key_exists('option_id', $data) && $data['option_id'] !== null) {
            $object->setOptionId($data['option_id']);
        }
        elseif (\array_key_exists('option_id', $data) && $data['option_id'] === null) {
            $object->setOptionId(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        }
        elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        if (\array_key_exists('is_require', $data) && $data['is_require'] !== null) {
            $object->setIsRequire($data['is_require']);
        }
        elseif (\array_key_exists('is_require', $data) && $data['is_require'] === null) {
            $object->setIsRequire(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('price_type', $data) && $data['price_type'] !== null) {
            $object->setPriceType($data['price_type']);
        }
        elseif (\array_key_exists('price_type', $data) && $data['price_type'] === null) {
            $object->setPriceType(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('file_extension', $data) && $data['file_extension'] !== null) {
            $object->setFileExtension($data['file_extension']);
        }
        elseif (\array_key_exists('file_extension', $data) && $data['file_extension'] === null) {
            $object->setFileExtension(null);
        }
        if (\array_key_exists('max_characters', $data) && $data['max_characters'] !== null) {
            $object->setMaxCharacters($data['max_characters']);
        }
        elseif (\array_key_exists('max_characters', $data) && $data['max_characters'] === null) {
            $object->setMaxCharacters(null);
        }
        if (\array_key_exists('image_size_x', $data) && $data['image_size_x'] !== null) {
            $object->setImageSizeX($data['image_size_x']);
        }
        elseif (\array_key_exists('image_size_x', $data) && $data['image_size_x'] === null) {
            $object->setImageSizeX(null);
        }
        if (\array_key_exists('image_size_y', $data) && $data['image_size_y'] !== null) {
            $object->setImageSizeY($data['image_size_y']);
        }
        elseif (\array_key_exists('image_size_y', $data) && $data['image_size_y'] === null) {
            $object->setImageSizeY(null);
        }
        if (\array_key_exists('values', $data) && $data['values'] !== null) {
            $values = array();
            foreach ($data['values'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\CatalogDataProductCustomOptionValuesInterface', 'json', $context);
            }
            $object->setValues($values);
        }
        elseif (\array_key_exists('values', $data) && $data['values'] === null) {
            $object->setValues(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['product_sku'] = $object->getProductSku();
        if ($object->isInitialized('optionId') && null !== $object->getOptionId()) {
            $data['option_id'] = $object->getOptionId();
        }
        $data['title'] = $object->getTitle();
        $data['type'] = $object->getType();
        $data['sort_order'] = $object->getSortOrder();
        $data['is_require'] = $object->getIsRequire();
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('priceType') && null !== $object->getPriceType()) {
            $data['price_type'] = $object->getPriceType();
        }
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if ($object->isInitialized('fileExtension') && null !== $object->getFileExtension()) {
            $data['file_extension'] = $object->getFileExtension();
        }
        if ($object->isInitialized('maxCharacters') && null !== $object->getMaxCharacters()) {
            $data['max_characters'] = $object->getMaxCharacters();
        }
        if ($object->isInitialized('imageSizeX') && null !== $object->getImageSizeX()) {
            $data['image_size_x'] = $object->getImageSizeX();
        }
        if ($object->isInitialized('imageSizeY') && null !== $object->getImageSizeY()) {
            $data['image_size_y'] = $object->getImageSizeY();
        }
        if ($object->isInitialized('values') && null !== $object->getValues()) {
            $values = array();
            foreach ($object->getValues() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['values'] = $values;
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductCustomOptionInterface' => false);
    }
}