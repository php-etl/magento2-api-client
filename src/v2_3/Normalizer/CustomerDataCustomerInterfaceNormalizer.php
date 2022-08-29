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

class CustomerDataCustomerInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('group_id', $data)) {
            $object->setGroupId($data['group_id']);
        }
        if (\array_key_exists('default_billing', $data)) {
            $object->setDefaultBilling($data['default_billing']);
        }
        if (\array_key_exists('default_shipping', $data)) {
            $object->setDefaultShipping($data['default_shipping']);
        }
        if (\array_key_exists('confirmation', $data)) {
            $object->setConfirmation($data['confirmation']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('created_in', $data)) {
            $object->setCreatedIn($data['created_in']);
        }
        if (\array_key_exists('dob', $data)) {
            $object->setDob($data['dob']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
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
        if (\array_key_exists('prefix', $data)) {
            $object->setPrefix($data['prefix']);
        }
        if (\array_key_exists('suffix', $data)) {
            $object->setSuffix($data['suffix']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('taxvat', $data)) {
            $object->setTaxvat($data['taxvat']);
        }
        if (\array_key_exists('website_id', $data)) {
            $object->setWebsiteId($data['website_id']);
        }
        if (\array_key_exists('addresses', $data)) {
            $values = array();
            foreach ($data['addresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataAddressInterface', 'json', $context);
            }
            $object->setAddresses($values);
        }
        if (\array_key_exists('disable_auto_group_change', $data)) {
            $object->setDisableAutoGroupChange($data['disable_auto_group_change']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values_1 = array();
            foreach ($data['custom_attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getGroupId()) {
            $data['group_id'] = $object->getGroupId();
        }
        if (null !== $object->getDefaultBilling()) {
            $data['default_billing'] = $object->getDefaultBilling();
        }
        if (null !== $object->getDefaultShipping()) {
            $data['default_shipping'] = $object->getDefaultShipping();
        }
        if (null !== $object->getConfirmation()) {
            $data['confirmation'] = $object->getConfirmation();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getCreatedIn()) {
            $data['created_in'] = $object->getCreatedIn();
        }
        if (null !== $object->getDob()) {
            $data['dob'] = $object->getDob();
        }
        $data['email'] = $object->getEmail();
        $data['firstname'] = $object->getFirstname();
        $data['lastname'] = $object->getLastname();
        if (null !== $object->getMiddlename()) {
            $data['middlename'] = $object->getMiddlename();
        }
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        if (null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getTaxvat()) {
            $data['taxvat'] = $object->getTaxvat();
        }
        if (null !== $object->getWebsiteId()) {
            $data['website_id'] = $object->getWebsiteId();
        }
        if (null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['addresses'] = $values;
        }
        if (null !== $object->getDisableAutoGroupChange()) {
            $data['disable_auto_group_change'] = $object->getDisableAutoGroupChange();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getCustomAttributes()) {
            $values_1 = array();
            foreach ($object->getCustomAttributes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom_attributes'] = $values_1;
        }
        return $data;
    }
}
