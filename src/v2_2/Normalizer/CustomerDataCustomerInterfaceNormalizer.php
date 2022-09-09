<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataCustomerInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataCustomerInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\CustomerDataCustomerInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addresses', $data) && $data['addresses'] !== null) {
            $values = array();
            foreach ($data['addresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataAddressInterface', 'json', $context);
            }
            $object->setAddresses($values);
        } elseif (\array_key_exists('addresses', $data) && $data['addresses'] === null) {
            $object->setAddresses(null);
        }
        if (\array_key_exists('confirmation', $data) && $data['confirmation'] !== null) {
            $object->setConfirmation($data['confirmation']);
        } elseif (\array_key_exists('confirmation', $data) && $data['confirmation'] === null) {
            $object->setConfirmation(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('created_in', $data) && $data['created_in'] !== null) {
            $object->setCreatedIn($data['created_in']);
        } elseif (\array_key_exists('created_in', $data) && $data['created_in'] === null) {
            $object->setCreatedIn(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values_1 = array();
            foreach ($data['custom_attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_1);
        } elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('default_billing', $data) && $data['default_billing'] !== null) {
            $object->setDefaultBilling($data['default_billing']);
        } elseif (\array_key_exists('default_billing', $data) && $data['default_billing'] === null) {
            $object->setDefaultBilling(null);
        }
        if (\array_key_exists('default_shipping', $data) && $data['default_shipping'] !== null) {
            $object->setDefaultShipping($data['default_shipping']);
        } elseif (\array_key_exists('default_shipping', $data) && $data['default_shipping'] === null) {
            $object->setDefaultShipping(null);
        }
        if (\array_key_exists('disable_auto_group_change', $data) && $data['disable_auto_group_change'] !== null) {
            $object->setDisableAutoGroupChange($data['disable_auto_group_change']);
        } elseif (\array_key_exists('disable_auto_group_change', $data) && $data['disable_auto_group_change'] === null) {
            $object->setDisableAutoGroupChange(null);
        }
        if (\array_key_exists('dob', $data) && $data['dob'] !== null) {
            $object->setDob($data['dob']);
        } elseif (\array_key_exists('dob', $data) && $data['dob'] === null) {
            $object->setDob(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_2\\Model\\CustomerDataCustomerExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('firstname', $data) && $data['firstname'] !== null) {
            $object->setFirstname($data['firstname']);
        } elseif (\array_key_exists('firstname', $data) && $data['firstname'] === null) {
            $object->setFirstname(null);
        }
        if (\array_key_exists('gender', $data) && $data['gender'] !== null) {
            $object->setGender($data['gender']);
        } elseif (\array_key_exists('gender', $data) && $data['gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('group_id', $data) && $data['group_id'] !== null) {
            $object->setGroupId($data['group_id']);
        } elseif (\array_key_exists('group_id', $data) && $data['group_id'] === null) {
            $object->setGroupId(null);
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
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
        } elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        } elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('taxvat', $data) && $data['taxvat'] !== null) {
            $object->setTaxvat($data['taxvat']);
        } elseif (\array_key_exists('taxvat', $data) && $data['taxvat'] === null) {
            $object->setTaxvat(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('website_id', $data) && $data['website_id'] !== null) {
            $object->setWebsiteId($data['website_id']);
        } elseif (\array_key_exists('website_id', $data) && $data['website_id'] === null) {
            $object->setWebsiteId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['addresses'] = $values;
        }
        if (null !== $object->getConfirmation()) {
            $data['confirmation'] = $object->getConfirmation();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCreatedIn()) {
            $data['created_in'] = $object->getCreatedIn();
        }
        if (null !== $object->getCustomAttributes()) {
            $values_1 = array();
            foreach ($object->getCustomAttributes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom_attributes'] = $values_1;
        }
        if (null !== $object->getDefaultBilling()) {
            $data['default_billing'] = $object->getDefaultBilling();
        }
        if (null !== $object->getDefaultShipping()) {
            $data['default_shipping'] = $object->getDefaultShipping();
        }
        if (null !== $object->getDisableAutoGroupChange()) {
            $data['disable_auto_group_change'] = $object->getDisableAutoGroupChange();
        }
        if (null !== $object->getDob()) {
            $data['dob'] = $object->getDob();
        }
        $data['email'] = $object->getEmail();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        $data['firstname'] = $object->getFirstname();
        if (null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if (null !== $object->getGroupId()) {
            $data['group_id'] = $object->getGroupId();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['lastname'] = $object->getLastname();
        if (null !== $object->getMiddlename()) {
            $data['middlename'] = $object->getMiddlename();
        }
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        if (null !== $object->getTaxvat()) {
            $data['taxvat'] = $object->getTaxvat();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getWebsiteId()) {
            $data['website_id'] = $object->getWebsiteId();
        }
        return $data;
    }
}
