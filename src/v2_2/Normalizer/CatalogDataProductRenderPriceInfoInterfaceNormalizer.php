<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CatalogDataProductRenderPriceInfoInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\CatalogDataProductRenderPriceInfoInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\CatalogDataProductRenderPriceInfoInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\CatalogDataProductRenderPriceInfoInterface();
        if (\array_key_exists('final_price', $data) && \is_int($data['final_price'])) {
            $data['final_price'] = (float) $data['final_price'];
        }
        if (\array_key_exists('max_price', $data) && \is_int($data['max_price'])) {
            $data['max_price'] = (float) $data['max_price'];
        }
        if (\array_key_exists('max_regular_price', $data) && \is_int($data['max_regular_price'])) {
            $data['max_regular_price'] = (float) $data['max_regular_price'];
        }
        if (\array_key_exists('minimal_price', $data) && \is_int($data['minimal_price'])) {
            $data['minimal_price'] = (float) $data['minimal_price'];
        }
        if (\array_key_exists('minimal_regular_price', $data) && \is_int($data['minimal_regular_price'])) {
            $data['minimal_regular_price'] = (float) $data['minimal_regular_price'];
        }
        if (\array_key_exists('regular_price', $data) && \is_int($data['regular_price'])) {
            $data['regular_price'] = (float) $data['regular_price'];
        }
        if (\array_key_exists('special_price', $data) && \is_int($data['special_price'])) {
            $data['special_price'] = (float) $data['special_price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_2\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('final_price', $data)) {
            $object->setFinalPrice($data['final_price']);
        }
        if (\array_key_exists('formatted_prices', $data)) {
            $object->setFormattedPrices($this->denormalizer->denormalize($data['formatted_prices'], 'Kiboko\\Magento\\V2_2\\Model\\CatalogDataProductRenderFormattedPriceInfoInterface', 'json', $context));
        }
        if (\array_key_exists('max_price', $data)) {
            $object->setMaxPrice($data['max_price']);
        }
        if (\array_key_exists('max_regular_price', $data)) {
            $object->setMaxRegularPrice($data['max_regular_price']);
        }
        if (\array_key_exists('minimal_price', $data)) {
            $object->setMinimalPrice($data['minimal_price']);
        }
        if (\array_key_exists('minimal_regular_price', $data)) {
            $object->setMinimalRegularPrice($data['minimal_regular_price']);
        }
        if (\array_key_exists('regular_price', $data)) {
            $object->setRegularPrice($data['regular_price']);
        }
        if (\array_key_exists('special_price', $data)) {
            $object->setSpecialPrice($data['special_price']);
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
        $data['final_price'] = $object->getFinalPrice();
        $data['formatted_prices'] = $this->normalizer->normalize($object->getFormattedPrices(), 'json', $context);
        $data['max_price'] = $object->getMaxPrice();
        $data['max_regular_price'] = $object->getMaxRegularPrice();
        $data['minimal_price'] = $object->getMinimalPrice();
        $data['minimal_regular_price'] = $object->getMinimalRegularPrice();
        $data['regular_price'] = $object->getRegularPrice();
        $data['special_price'] = $object->getSpecialPrice();
        return $data;
    }
}
