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

class QuoteDataAddressInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataAddressInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataAddressInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\QuoteDataAddressInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        } elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('country_id', $data) && $data['country_id'] !== null) {
            $object->setCountryId($data['country_id']);
        } elseif (\array_key_exists('country_id', $data) && $data['country_id'] === null) {
            $object->setCountryId(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values = array();
            foreach ($data['custom_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values);
        } elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('customer_address_id', $data) && $data['customer_address_id'] !== null) {
            $object->setCustomerAddressId($data['customer_address_id']);
        } elseif (\array_key_exists('customer_address_id', $data) && $data['customer_address_id'] === null) {
            $object->setCustomerAddressId(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        } elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataAddressExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
        } elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('firstname', $data) && $data['firstname'] !== null) {
            $object->setFirstname($data['firstname']);
        } elseif (\array_key_exists('firstname', $data) && $data['firstname'] === null) {
            $object->setFirstname(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('lastname', $data) && $data['lastname'] !== null) {
            $object->setLastname($data['lastname']);
        } elseif (\array_key_exists('lastname', $data) && $data['lastname'] === null) {
            $object->setLastname(null);
        }
        if (\array_key_exists('middlename', $data) && $data['middlename'] !== null) {
            $object->setMiddlename($data['middlename']);
        } elseif (\array_key_exists('middlename', $data) && $data['middlename'] === null) {
            $object->setMiddlename(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        } elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
        } elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($data['region']);
        } elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('region_code', $data) && $data['region_code'] !== null) {
            $object->setRegionCode($data['region_code']);
        } elseif (\array_key_exists('region_code', $data) && $data['region_code'] === null) {
            $object->setRegionCode(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
        } elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('same_as_billing', $data) && $data['same_as_billing'] !== null) {
            $object->setSameAsBilling($data['same_as_billing']);
        } elseif (\array_key_exists('same_as_billing', $data) && $data['same_as_billing'] === null) {
            $object->setSameAsBilling(null);
        }
        if (\array_key_exists('save_in_address_book', $data) && $data['save_in_address_book'] !== null) {
            $object->setSaveInAddressBook($data['save_in_address_book']);
        } elseif (\array_key_exists('save_in_address_book', $data) && $data['save_in_address_book'] === null) {
            $object->setSaveInAddressBook(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $values_1 = array();
            foreach ($data['street'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setStreet($values_1);
        } elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('telephone', $data) && $data['telephone'] !== null) {
            $object->setTelephone($data['telephone']);
        } elseif (\array_key_exists('telephone', $data) && $data['telephone'] === null) {
            $object->setTelephone(null);
        }
        if (\array_key_exists('vat_id', $data) && $data['vat_id'] !== null) {
            $object->setVatId($data['vat_id']);
        } elseif (\array_key_exists('vat_id', $data) && $data['vat_id'] === null) {
            $object->setVatId(null);
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
