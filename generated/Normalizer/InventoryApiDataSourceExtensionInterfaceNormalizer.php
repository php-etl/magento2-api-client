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
class InventoryApiDataSourceExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventoryApiDataSourceExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventoryApiDataSourceExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\InventoryApiDataSourceExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_pickup_location_active', $data) && $data['is_pickup_location_active'] !== null) {
            $object->setIsPickupLocationActive($data['is_pickup_location_active']);
        }
        elseif (\array_key_exists('is_pickup_location_active', $data) && $data['is_pickup_location_active'] === null) {
            $object->setIsPickupLocationActive(null);
        }
        if (\array_key_exists('frontend_name', $data) && $data['frontend_name'] !== null) {
            $object->setFrontendName($data['frontend_name']);
        }
        elseif (\array_key_exists('frontend_name', $data) && $data['frontend_name'] === null) {
            $object->setFrontendName(null);
        }
        if (\array_key_exists('frontend_description', $data) && $data['frontend_description'] !== null) {
            $object->setFrontendDescription($data['frontend_description']);
        }
        elseif (\array_key_exists('frontend_description', $data) && $data['frontend_description'] === null) {
            $object->setFrontendDescription(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('isPickupLocationActive') && null !== $object->getIsPickupLocationActive()) {
            $data['is_pickup_location_active'] = $object->getIsPickupLocationActive();
        }
        if ($object->isInitialized('frontendName') && null !== $object->getFrontendName()) {
            $data['frontend_name'] = $object->getFrontendName();
        }
        if ($object->isInitialized('frontendDescription') && null !== $object->getFrontendDescription()) {
            $data['frontend_description'] = $object->getFrontendDescription();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventoryApiDataSourceExtensionInterface' => false);
    }
}