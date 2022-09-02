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

class CatalogDataProductRenderInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CatalogDataProductRenderInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('add_to_cart_button', $data)) {
            $object->setAddToCartButton($this->denormalizer->denormalize($data['add_to_cart_button'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderButtonInterface', 'json', $context));
        }
        if (\array_key_exists('add_to_compare_button', $data)) {
            $object->setAddToCompareButton($this->denormalizer->denormalize($data['add_to_compare_button'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderButtonInterface', 'json', $context));
        }
        if (\array_key_exists('currency_code', $data)) {
            $object->setCurrencyCode($data['currency_code']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('images', $data)) {
            $values = array();
            foreach ($data['images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderImageInterface', 'json', $context);
            }
            $object->setImages($values);
        }
        if (\array_key_exists('is_salable', $data)) {
            $object->setIsSalable($data['is_salable']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('price_info', $data)) {
            $object->setPriceInfo($this->denormalizer->denormalize($data['price_info'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderPriceInfoInterface', 'json', $context));
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['add_to_cart_button'] = $this->normalizer->normalize($object->getAddToCartButton(), 'json', $context);
        $data['add_to_compare_button'] = $this->normalizer->normalize($object->getAddToCompareButton(), 'json', $context);
        $data['currency_code'] = $object->getCurrencyCode();
        $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        $data['id'] = $object->getId();
        $values = array();
        foreach ($object->getImages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['images'] = $values;
        $data['is_salable'] = $object->getIsSalable();
        $data['name'] = $object->getName();
        $data['price_info'] = $this->normalizer->normalize($object->getPriceInfo(), 'json', $context);
        $data['store_id'] = $object->getStoreId();
        $data['type'] = $object->getType();
        $data['url'] = $object->getUrl();
        return $data;
    }
}
