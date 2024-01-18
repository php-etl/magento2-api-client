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
class VertexAddressValidationApiDataCleansedAddressInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\VertexAddressValidationApiDataCleansedAddressInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\VertexAddressValidationApiDataCleansedAddressInterface';
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
        $object = new \Kiboko\Magento\Model\VertexAddressValidationApiDataCleansedAddressInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country_code', $data) && $data['country_code'] !== null) {
            $object->setCountryCode($data['country_code']);
        }
        elseif (\array_key_exists('country_code', $data) && $data['country_code'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('country_name', $data) && $data['country_name'] !== null) {
            $object->setCountryName($data['country_name']);
        }
        elseif (\array_key_exists('country_name', $data) && $data['country_name'] === null) {
            $object->setCountryName(null);
        }
        if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
            $object->setPostalCode($data['postal_code']);
        }
        elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('region_name', $data) && $data['region_name'] !== null) {
            $object->setRegionName($data['region_name']);
        }
        elseif (\array_key_exists('region_name', $data) && $data['region_name'] === null) {
            $object->setRegionName(null);
        }
        if (\array_key_exists('street_address', $data) && $data['street_address'] !== null) {
            $values = array();
            foreach ($data['street_address'] as $value) {
                $values[] = $value;
            }
            $object->setStreetAddress($values);
        }
        elseif (\array_key_exists('street_address', $data) && $data['street_address'] === null) {
            $object->setStreetAddress(null);
        }
        if (\array_key_exists('sub_division', $data) && $data['sub_division'] !== null) {
            $object->setSubDivision($data['sub_division']);
        }
        elseif (\array_key_exists('sub_division', $data) && $data['sub_division'] === null) {
            $object->setSubDivision(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
            $data['country_code'] = $object->getCountryCode();
        }
        if ($object->isInitialized('countryName') && null !== $object->getCountryName()) {
            $data['country_name'] = $object->getCountryName();
        }
        if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
            $data['region_id'] = $object->getRegionId();
        }
        if ($object->isInitialized('regionName') && null !== $object->getRegionName()) {
            $data['region_name'] = $object->getRegionName();
        }
        $values = array();
        foreach ($object->getStreetAddress() as $value) {
            $values[] = $value;
        }
        $data['street_address'] = $values;
        if ($object->isInitialized('subDivision') && null !== $object->getSubDivision()) {
            $data['sub_division'] = $object->getSubDivision();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\VertexAddressValidationApiDataCleansedAddressInterface' => false);
    }
}