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
class SalesDataShippingExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataShippingExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataShippingExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataShippingExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] !== null) {
            $object->setExtOrderId($data['ext_order_id']);
        }
        elseif (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] === null) {
            $object->setExtOrderId(null);
        }
        if (\array_key_exists('shipping_experience', $data) && $data['shipping_experience'] !== null) {
            $object->setShippingExperience($this->denormalizer->denormalize($data['shipping_experience'], 'Kiboko\\Magento\\Model\\TemandoShippingDataOrderShippingExperienceInterface', 'json', $context));
        }
        elseif (\array_key_exists('shipping_experience', $data) && $data['shipping_experience'] === null) {
            $object->setShippingExperience(null);
        }
        if (\array_key_exists('collection_point', $data) && $data['collection_point'] !== null) {
            $object->setCollectionPoint($this->denormalizer->denormalize($data['collection_point'], 'Kiboko\\Magento\\Model\\TemandoShippingDataCollectionPointOrderCollectionPointInterface', 'json', $context));
        }
        elseif (\array_key_exists('collection_point', $data) && $data['collection_point'] === null) {
            $object->setCollectionPoint(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('extOrderId') && null !== $object->getExtOrderId()) {
            $data['ext_order_id'] = $object->getExtOrderId();
        }
        if ($object->isInitialized('shippingExperience') && null !== $object->getShippingExperience()) {
            $data['shipping_experience'] = $this->normalizer->normalize($object->getShippingExperience(), 'json', $context);
        }
        if ($object->isInitialized('collectionPoint') && null !== $object->getCollectionPoint()) {
            $data['collection_point'] = $this->normalizer->normalize($object->getCollectionPoint(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataShippingExtensionInterface' => false);
    }
}