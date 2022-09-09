<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataShippingExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataShippingExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\SalesDataShippingExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('collection_point', $data) && $data['collection_point'] !== null) {
            $object->setCollectionPoint($this->denormalizer->denormalize($data['collection_point'], 'Kiboko\\Magento\\V2_1\\Model\\TemandoShippingDataCollectionPointOrderCollectionPointInterface', 'json', $context));
        } elseif (\array_key_exists('collection_point', $data) && $data['collection_point'] === null) {
            $object->setCollectionPoint(null);
        }
        if (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] !== null) {
            $object->setExtOrderId($data['ext_order_id']);
        } elseif (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] === null) {
            $object->setExtOrderId(null);
        }
        if (\array_key_exists('shipping_experience', $data) && $data['shipping_experience'] !== null) {
            $object->setShippingExperience($this->denormalizer->denormalize($data['shipping_experience'], 'Kiboko\\Magento\\V2_1\\Model\\TemandoShippingDataOrderShippingExperienceInterface', 'json', $context));
        } elseif (\array_key_exists('shipping_experience', $data) && $data['shipping_experience'] === null) {
            $object->setShippingExperience(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCollectionPoint()) {
            $data['collection_point'] = $this->normalizer->normalize($object->getCollectionPoint(), 'json', $context);
        }
        if (null !== $object->getExtOrderId()) {
            $data['ext_order_id'] = $object->getExtOrderId();
        }
        if (null !== $object->getShippingExperience()) {
            $data['shipping_experience'] = $this->normalizer->normalize($object->getShippingExperience(), 'json', $context);
        }
        return $data;
    }
}
