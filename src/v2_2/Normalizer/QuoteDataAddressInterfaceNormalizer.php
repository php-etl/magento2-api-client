<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QuoteDataAddressInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataAddressInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataAddressInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\QuoteDataAddressInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('custom_attributes', $data)) {
            $values = array();
            foreach ($data['custom_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values);
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
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataAddressExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('fax', $data)) {
            $object->setFax($data['fax']);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->setFirstname($data['firstname']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->setLastname($data['lastname']);
        }
        if (\array_key_exists('middlename', $data)) {
            $object->setMiddlename($data['middlename']);
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
        if (\array_key_exists('same_as_billing', $data)) {
            $object->setSameAsBilling($data['same_as_billing']);
        }
        if (\array_key_exists('save_in_address_book', $data)) {
            $object->setSaveInAddressBook($data['save_in_address_book']);
        }
        if (\array_key_exists('street', $data)) {
            $values_1 = array();
            foreach ($data['street'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setStreet($values_1);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['city'] = $object->getCity();
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        $data['country_id'] = $object->getCountryId();
        if (null !== $object->getCustomAttributes()) {
            $values = array();
            foreach ($object->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom_attributes'] = $values;
        }
        if (null !== $object->getCustomerAddressId()) {
            $data['customer_address_id'] = $object->getCustomerAddressId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        $data['email'] = $object->getEmail();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        $data['firstname'] = $object->getFirstname();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['lastname'] = $object->getLastname();
        if (null !== $object->getMiddlename()) {
            $data['middlename'] = $object->getMiddlename();
        }
        $data['postcode'] = $object->getPostcode();
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        $data['region'] = $object->getRegion();
        $data['region_code'] = $object->getRegionCode();
        $data['region_id'] = $object->getRegionId();
        if (null !== $object->getSameAsBilling()) {
            $data['same_as_billing'] = $object->getSameAsBilling();
        }
        if (null !== $object->getSaveInAddressBook()) {
            $data['save_in_address_book'] = $object->getSaveInAddressBook();
        }
        $values_1 = array();
        foreach ($object->getStreet() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['street'] = $values_1;
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        $data['telephone'] = $object->getTelephone();
        if (null !== $object->getVatId()) {
            $data['vat_id'] = $object->getVatId();
        }
        return $data;
    }
}
