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
class QuoteDataCartItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\QuoteDataCartItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\QuoteDataCartItemInterface';
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
        $object = new \Kiboko\Magento\Model\QuoteDataCartItemInterface();
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('product_type', $data) && $data['product_type'] !== null) {
            $object->setProductType($data['product_type']);
        }
        elseif (\array_key_exists('product_type', $data) && $data['product_type'] === null) {
            $object->setProductType(null);
        }
        if (\array_key_exists('quote_id', $data) && $data['quote_id'] !== null) {
            $object->setQuoteId($data['quote_id']);
        }
        elseif (\array_key_exists('quote_id', $data) && $data['quote_id'] === null) {
            $object->setQuoteId(null);
        }
        if (\array_key_exists('product_option', $data) && $data['product_option'] !== null) {
            $object->setProductOption($this->denormalizer->denormalize($data['product_option'], 'Kiboko\\Magento\\Model\\QuoteDataProductOptionInterface', 'json', $context));
        }
        elseif (\array_key_exists('product_option', $data) && $data['product_option'] === null) {
            $object->setProductOption(null);
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
        if ($object->isInitialized('itemId') && null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        $data['qty'] = $object->getQty();
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('productType') && null !== $object->getProductType()) {
            $data['product_type'] = $object->getProductType();
        }
        $data['quote_id'] = $object->getQuoteId();
        if ($object->isInitialized('productOption') && null !== $object->getProductOption()) {
            $data['product_option'] = $this->normalizer->normalize($object->getProductOption(), 'json', $context);
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\QuoteDataCartItemInterface' => false);
    }
}