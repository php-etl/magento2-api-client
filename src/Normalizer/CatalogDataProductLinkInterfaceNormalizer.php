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
class CatalogDataProductLinkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductLinkInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductLinkInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductLinkInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('link_type', $data) && $data['link_type'] !== null) {
            $object->setLinkType($data['link_type']);
        }
        elseif (\array_key_exists('link_type', $data) && $data['link_type'] === null) {
            $object->setLinkType(null);
        }
        if (\array_key_exists('linked_product_sku', $data) && $data['linked_product_sku'] !== null) {
            $object->setLinkedProductSku($data['linked_product_sku']);
        }
        elseif (\array_key_exists('linked_product_sku', $data) && $data['linked_product_sku'] === null) {
            $object->setLinkedProductSku(null);
        }
        if (\array_key_exists('linked_product_type', $data) && $data['linked_product_type'] !== null) {
            $object->setLinkedProductType($data['linked_product_type']);
        }
        elseif (\array_key_exists('linked_product_type', $data) && $data['linked_product_type'] === null) {
            $object->setLinkedProductType(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        }
        elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\CatalogDataProductLinkExtensionInterface', 'json', $context));
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
        $data['sku'] = $object->getSku();
        $data['link_type'] = $object->getLinkType();
        $data['linked_product_sku'] = $object->getLinkedProductSku();
        $data['linked_product_type'] = $object->getLinkedProductType();
        $data['position'] = $object->getPosition();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductLinkInterface' => false);
    }
}