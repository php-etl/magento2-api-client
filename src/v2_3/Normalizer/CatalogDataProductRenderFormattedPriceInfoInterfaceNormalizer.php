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

class CatalogDataProductRenderFormattedPriceInfoInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderFormattedPriceInfoInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductRenderFormattedPriceInfoInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CatalogDataProductRenderFormattedPriceInfoInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('final_price', $data)) {
            $object->setFinalPrice($data['final_price']);
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
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['final_price'] = $object->getFinalPrice();
        $data['max_price'] = $object->getMaxPrice();
        $data['max_regular_price'] = $object->getMaxRegularPrice();
        $data['minimal_price'] = $object->getMinimalPrice();
        $data['minimal_regular_price'] = $object->getMinimalRegularPrice();
        $data['regular_price'] = $object->getRegularPrice();
        $data['special_price'] = $object->getSpecialPrice();
        return $data;
    }
}
