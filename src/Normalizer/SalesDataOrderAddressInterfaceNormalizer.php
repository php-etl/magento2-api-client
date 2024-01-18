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
class SalesDataOrderAddressInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataOrderAddressInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataOrderAddressInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataOrderAddressInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address_type', $data) && $data['address_type'] !== null) {
            $object->setAddressType($data['address_type']);
        }
        elseif (\array_key_exists('address_type', $data) && $data['address_type'] === null) {
            $object->setAddressType(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('country_id', $data) && $data['country_id'] !== null) {
            $object->setCountryId($data['country_id']);
        }
        elseif (\array_key_exists('country_id', $data) && $data['country_id'] === null) {
            $object->setCountryId(null);
        }
        if (\array_key_exists('customer_address_id', $data) && $data['customer_address_id'] !== null) {
            $object->setCustomerAddressId($data['customer_address_id']);
        }
        elseif (\array_key_exists('customer_address_id', $data) && $data['customer_address_id'] === null) {
            $object->setCustomerAddressId(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        }
        elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
        }
        elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('firstname', $data) && $data['firstname'] !== null) {
            $object->setFirstname($data['firstname']);
        }
        elseif (\array_key_exists('firstname', $data) && $data['firstname'] === null) {
            $object->setFirstname(null);
        }
        if (\array_key_exists('lastname', $data) && $data['lastname'] !== null) {
            $object->setLastname($data['lastname']);
        }
        elseif (\array_key_exists('lastname', $data) && $data['lastname'] === null) {
            $object->setLastname(null);
        }
        if (\array_key_exists('middlename', $data) && $data['middlename'] !== null) {
            $object->setMiddlename($data['middlename']);
        }
        elseif (\array_key_exists('middlename', $data) && $data['middlename'] === null) {
            $object->setMiddlename(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        }
        elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
        }
        elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($data['region']);
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('region_code', $data) && $data['region_code'] !== null) {
            $object->setRegionCode($data['region_code']);
        }
        elseif (\array_key_exists('region_code', $data) && $data['region_code'] === null) {
            $object->setRegionCode(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $values = array();
            foreach ($data['street'] as $value) {
                $values[] = $value;
            }
            $object->setStreet($values);
        }
        elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
        }
        elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('telephone', $data) && $data['telephone'] !== null) {
            $object->setTelephone($data['telephone']);
        }
        elseif (\array_key_exists('telephone', $data) && $data['telephone'] === null) {
            $object->setTelephone(null);
        }
        if (\array_key_exists('vat_id', $data) && $data['vat_id'] !== null) {
            $object->setVatId($data['vat_id']);
        }
        elseif (\array_key_exists('vat_id', $data) && $data['vat_id'] === null) {
            $object->setVatId(null);
        }
        if (\array_key_exists('vat_is_valid', $data) && $data['vat_is_valid'] !== null) {
            $object->setVatIsValid($data['vat_is_valid']);
        }
        elseif (\array_key_exists('vat_is_valid', $data) && $data['vat_is_valid'] === null) {
            $object->setVatIsValid(null);
        }
        if (\array_key_exists('vat_request_date', $data) && $data['vat_request_date'] !== null) {
            $object->setVatRequestDate($data['vat_request_date']);
        }
        elseif (\array_key_exists('vat_request_date', $data) && $data['vat_request_date'] === null) {
            $object->setVatRequestDate(null);
        }
        if (\array_key_exists('vat_request_id', $data) && $data['vat_request_id'] !== null) {
            $object->setVatRequestId($data['vat_request_id']);
        }
        elseif (\array_key_exists('vat_request_id', $data) && $data['vat_request_id'] === null) {
            $object->setVatRequestId(null);
        }
        if (\array_key_exists('vat_request_success', $data) && $data['vat_request_success'] !== null) {
            $object->setVatRequestSuccess($data['vat_request_success']);
        }
        elseif (\array_key_exists('vat_request_success', $data) && $data['vat_request_success'] === null) {
            $object->setVatRequestSuccess(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\SalesDataOrderAddressExtensionInterface', 'json', $context));
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
        $data['address_type'] = $object->getAddressType();
        $data['city'] = $object->getCity();
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        $data['country_id'] = $object->getCountryId();
        if ($object->isInitialized('customerAddressId') && null !== $object->getCustomerAddressId()) {
            $data['customer_address_id'] = $object->getCustomerAddressId();
        }
        if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('entityId') && null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if ($object->isInitialized('fax') && null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        $data['firstname'] = $object->getFirstname();
        $data['lastname'] = $object->getLastname();
        if ($object->isInitialized('middlename') && null !== $object->getMiddlename()) {
            $data['middlename'] = $object->getMiddlename();
        }
        if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        $data['postcode'] = $object->getPostcode();
        if ($object->isInitialized('prefix') && null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        if ($object->isInitialized('region') && null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if ($object->isInitialized('regionCode') && null !== $object->getRegionCode()) {
            $data['region_code'] = $object->getRegionCode();
        }
        if ($object->isInitialized('regionId') && null !== $object->getRegionId()) {
            $data['region_id'] = $object->getRegionId();
        }
        if ($object->isInitialized('street') && null !== $object->getStreet()) {
            $values = array();
            foreach ($object->getStreet() as $value) {
                $values[] = $value;
            }
            $data['street'] = $values;
        }
        if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        $data['telephone'] = $object->getTelephone();
        if ($object->isInitialized('vatId') && null !== $object->getVatId()) {
            $data['vat_id'] = $object->getVatId();
        }
        if ($object->isInitialized('vatIsValid') && null !== $object->getVatIsValid()) {
            $data['vat_is_valid'] = $object->getVatIsValid();
        }
        if ($object->isInitialized('vatRequestDate') && null !== $object->getVatRequestDate()) {
            $data['vat_request_date'] = $object->getVatRequestDate();
        }
        if ($object->isInitialized('vatRequestId') && null !== $object->getVatRequestId()) {
            $data['vat_request_id'] = $object->getVatRequestId();
        }
        if ($object->isInitialized('vatRequestSuccess') && null !== $object->getVatRequestSuccess()) {
            $data['vat_request_success'] = $object->getVatRequestSuccess();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataOrderAddressInterface' => false);
    }
}