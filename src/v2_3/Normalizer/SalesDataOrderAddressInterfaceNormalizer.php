<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderAddressInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderAddressInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderAddressInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\SalesDataOrderAddressInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address_type', $data)) {
            $object->setAddressType($data['address_type']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
        }
        if (\array_key_exists('country_id', $data)) {
            $object->setCountryId($data['country_id']);
        }
        if (\array_key_exists('customer_address_id', $data)) {
            $object->setCustomerAddressId($data['customer_address_id']);
        }
        if (\array_key_exists('customer_id', $data)) {
            $object->setCustomerId($data['customer_id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderAddressExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('fax', $data)) {
            $object->setFax($data['fax']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->setFirstname($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->setLastname($data['lastname']);
        }
        if (\array_key_exists('middlename', $data)) {
            $object->setMiddlename($data['middlename']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('prefix', $data)) {
            $object->setPrefix($data['prefix']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('region_code', $data)) {
            $object->setRegionCode($data['region_code']);
        }
        if (\array_key_exists('region_id', $data)) {
            $object->setRegionId($data['region_id']);
        }
        if (\array_key_exists('street', $data)) {
            $values = array();
            foreach ($data['street'] as $value) {
                $values[] = $value;
            }
            $object->setStreet($values);
        }
        if (\array_key_exists('suffix', $data)) {
            $object->setSuffix($data['suffix']);
        }
        if (\array_key_exists('telephone', $data)) {
            $object->setTelephone($data['telephone']);
        }
        if (\array_key_exists('vat_id', $data)) {
            $object->setVatId($data['vat_id']);
        }
        if (\array_key_exists('vat_is_valid', $data)) {
            $object->setVatIsValid($data['vat_is_valid']);
        }
        if (\array_key_exists('vat_request_date', $data)) {
            $object->setVatRequestDate($data['vat_request_date']);
        }
        if (\array_key_exists('vat_request_id', $data)) {
            $object->setVatRequestId($data['vat_request_id']);
        }
        if (\array_key_exists('vat_request_success', $data)) {
            $object->setVatRequestSuccess($data['vat_request_success']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['address_type'] = $object->getAddressType();
        $data['city'] = $object->getCity();
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        $data['country_id'] = $object->getCountryId();
        if (null !== $object->getCustomerAddressId()) {
            $data['customer_address_id'] = $object->getCustomerAddressId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        $data['firstname'] = $object->getFirstname();
        $data['lastname'] = $object->getLastname();
        if (null !== $object->getMiddlename()) {
            $data['middlename'] = $object->getMiddlename();
        }
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        $data['postcode'] = $object->getPostcode();
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getRegionCode()) {
            $data['region_code'] = $object->getRegionCode();
        }
        if (null !== $object->getRegionId()) {
            $data['region_id'] = $object->getRegionId();
        }
        if (null !== $object->getStreet()) {
            $values = array();
            foreach ($object->getStreet() as $value) {
                $values[] = $value;
            }
            $data['street'] = $values;
        }
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        $data['telephone'] = $object->getTelephone();
        if (null !== $object->getVatId()) {
            $data['vat_id'] = $object->getVatId();
        }
        if (null !== $object->getVatIsValid()) {
            $data['vat_is_valid'] = $object->getVatIsValid();
        }
        if (null !== $object->getVatRequestDate()) {
            $data['vat_request_date'] = $object->getVatRequestDate();
        }
        if (null !== $object->getVatRequestId()) {
            $data['vat_request_id'] = $object->getVatRequestId();
        }
        if (null !== $object->getVatRequestSuccess()) {
            $data['vat_request_success'] = $object->getVatRequestSuccess();
        }
        return $data;
    }
}
