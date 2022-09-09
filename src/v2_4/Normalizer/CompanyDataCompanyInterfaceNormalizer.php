<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanyDataCompanyInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CompanyDataCompanyInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CompanyDataCompanyInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CompanyDataCompanyInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('company_email', $data) && $data['company_email'] !== null) {
            $object->setCompanyEmail($data['company_email']);
        } elseif (\array_key_exists('company_email', $data) && $data['company_email'] === null) {
            $object->setCompanyEmail(null);
        }
        if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
            $object->setCompanyName($data['company_name']);
        } elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
            $object->setCompanyName(null);
        }
        if (\array_key_exists('country_id', $data) && $data['country_id'] !== null) {
            $object->setCountryId($data['country_id']);
        } elseif (\array_key_exists('country_id', $data) && $data['country_id'] === null) {
            $object->setCountryId(null);
        }
        if (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] !== null) {
            $object->setCustomerGroupId($data['customer_group_id']);
        } elseif (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] === null) {
            $object->setCustomerGroupId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_4\\Model\\CompanyDataCompanyExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('legal_name', $data) && $data['legal_name'] !== null) {
            $object->setLegalName($data['legal_name']);
        } elseif (\array_key_exists('legal_name', $data) && $data['legal_name'] === null) {
            $object->setLegalName(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        } elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($data['region']);
        } elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
        } elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('reject_reason', $data) && $data['reject_reason'] !== null) {
            $object->setRejectReason($data['reject_reason']);
        } elseif (\array_key_exists('reject_reason', $data) && $data['reject_reason'] === null) {
            $object->setRejectReason(null);
        }
        if (\array_key_exists('rejected_at', $data) && $data['rejected_at'] !== null) {
            $object->setRejectedAt($data['rejected_at']);
        } elseif (\array_key_exists('rejected_at', $data) && $data['rejected_at'] === null) {
            $object->setRejectedAt(null);
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
        }
        if (\array_key_exists('sales_representative_id', $data) && $data['sales_representative_id'] !== null) {
            $object->setSalesRepresentativeId($data['sales_representative_id']);
        } elseif (\array_key_exists('sales_representative_id', $data) && $data['sales_representative_id'] === null) {
            $object->setSalesRepresentativeId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $values = array();
            foreach ($data['street'] as $value) {
                $values[] = $value;
            }
            $object->setStreet($values);
        } elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('super_user_id', $data) && $data['super_user_id'] !== null) {
            $object->setSuperUserId($data['super_user_id']);
        } elseif (\array_key_exists('super_user_id', $data) && $data['super_user_id'] === null) {
            $object->setSuperUserId(null);
        }
        if (\array_key_exists('telephone', $data) && $data['telephone'] !== null) {
            $object->setTelephone($data['telephone']);
        } elseif (\array_key_exists('telephone', $data) && $data['telephone'] === null) {
            $object->setTelephone(null);
        }
        if (\array_key_exists('vat_tax_id', $data) && $data['vat_tax_id'] !== null) {
            $object->setVatTaxId($data['vat_tax_id']);
        } elseif (\array_key_exists('vat_tax_id', $data) && $data['vat_tax_id'] === null) {
            $object->setVatTaxId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getCompanyEmail()) {
            $data['company_email'] = $object->getCompanyEmail();
        }
        if (null !== $object->getCompanyName()) {
            $data['company_name'] = $object->getCompanyName();
        }
        if (null !== $object->getCountryId()) {
            $data['country_id'] = $object->getCountryId();
        }
        $data['customer_group_id'] = $object->getCustomerGroupId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLegalName()) {
            $data['legal_name'] = $object->getLegalName();
        }
        if (null !== $object->getPostcode()) {
            $data['postcode'] = $object->getPostcode();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getRegionId()) {
            $data['region_id'] = $object->getRegionId();
        }
        $data['reject_reason'] = $object->getRejectReason();
        $data['rejected_at'] = $object->getRejectedAt();
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        $data['sales_representative_id'] = $object->getSalesRepresentativeId();
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        $values = array();
        foreach ($object->getStreet() as $value) {
            $values[] = $value;
        }
        $data['street'] = $values;
        $data['super_user_id'] = $object->getSuperUserId();
        if (null !== $object->getTelephone()) {
            $data['telephone'] = $object->getTelephone();
        }
        if (null !== $object->getVatTaxId()) {
            $data['vat_tax_id'] = $object->getVatTaxId();
        }
        return $data;
    }
}
