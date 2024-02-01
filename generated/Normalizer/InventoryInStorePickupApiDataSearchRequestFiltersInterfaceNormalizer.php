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
class InventoryInStorePickupApiDataSearchRequestFiltersInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFiltersInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFiltersInterface';
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
        $object = new \Kiboko\Magento\Model\InventoryInStorePickupApiDataSearchRequestFiltersInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($this->denormalizer->denormalize($data['country'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($this->denormalizer->denormalize($data['postcode'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($this->denormalizer->denormalize($data['region_id'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($this->denormalizer->denormalize($data['city'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $object->setStreet($this->denormalizer->denormalize($data['street'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('pickup_location_code', $data) && $data['pickup_location_code'] !== null) {
            $object->setPickupLocationCode($this->denormalizer->denormalize($data['pickup_location_code'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFilterInterface', 'json', $context));
        }
        elseif (\array_key_exists('pickup_location_code', $data) && $data['pickup_location_code'] === null) {
            $object->setPickupLocationCode(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $this->normalizer->normalize($object->getCountry(), 'json', $context);
        }
        if ($object->isInitialized('postcode') && null !== $object->getPostcode()) {
            $data['postcode'] = $this->normalizer->normalize($object->getPostcode(), 'json', $context);
        }
        if ($object->isInitialized('region') && null !== $object->getRegion()) {
            $data['region'] = $this->normalizer->normalize($object->getRegion(), 'json', $context);
        }
        if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
            $data['region_id'] = $this->normalizer->normalize($object->getRegionId(), 'json', $context);
        }
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['city'] = $this->normalizer->normalize($object->getCity(), 'json', $context);
        }
        if ($object->isInitialized('street') && null !== $object->getStreet()) {
            $data['street'] = $this->normalizer->normalize($object->getStreet(), 'json', $context);
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if ($object->isInitialized('pickupLocationCode') && null !== $object->getPickupLocationCode()) {
            $data['pickup_location_code'] = $this->normalizer->normalize($object->getPickupLocationCode(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFiltersInterface' => false);
    }
}