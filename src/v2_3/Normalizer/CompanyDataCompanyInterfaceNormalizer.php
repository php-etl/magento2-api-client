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

class CompanyDataCompanyInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataCompanyInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataCompanyInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CompanyDataCompanyInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('company_name', $data)) {
            $object->setCompanyName($data['company_name']);
        }
        if (\array_key_exists('legal_name', $data)) {
            $object->setLegalName($data['legal_name']);
        }
        if (\array_key_exists('company_email', $data)) {
            $object->setCompanyEmail($data['company_email']);
        }
        if (\array_key_exists('vat_tax_id', $data)) {
            $object->setVatTaxId($data['vat_tax_id']);
        }
        if (\array_key_exists('reseller_id', $data)) {
            $object->setResellerId($data['reseller_id']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        if (\array_key_exists('street', $data)) {
            $values = array();
            foreach ($data['street'] as $value) {
                $values[] = $value;
            }
            $object->setStreet($values);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('country_id', $data)) {
            $object->setCountryId($data['country_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('region_id', $data)) {
            $object->setRegionId($data['region_id']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('telephone', $data)) {
            $object->setTelephone($data['telephone']);
        }
        if (\array_key_exists('customer_group_id', $data)) {
            $object->setCustomerGroupId($data['customer_group_id']);
        }
        if (\array_key_exists('sales_representative_id', $data)) {
            $object->setSalesRepresentativeId($data['sales_representative_id']);
        }
        if (\array_key_exists('reject_reason', $data)) {
            $object->setRejectReason($data['reject_reason']);
        }
        if (\array_key_exists('rejected_at', $data)) {
            $object->setRejectedAt($data['rejected_at']);
        }
        if (\array_key_exists('super_user_id', $data)) {
            $object->setSuperUserId($data['super_user_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataCompanyExtensionInterface', 'json', $context));
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
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getCompanyName()) {
            $data['company_name'] = $object->getCompanyName();
        }
        if (null !== $object->getLegalName()) {
            $data['legal_name'] = $object->getLegalName();
        }
        if (null !== $object->getCompanyEmail()) {
            $data['company_email'] = $object->getCompanyEmail();
        }
        if (null !== $object->getVatTaxId()) {
            $data['vat_tax_id'] = $object->getVatTaxId();
        }
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        $values = array();
        foreach ($object->getStreet() as $value) {
            $values[] = $value;
        }
        $data['street'] = $values;
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCountryId()) {
            $data['country_id'] = $object->getCountryId();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getRegionId()) {
            $data['region_id'] = $object->getRegionId();
        }
        if (null !== $object->getPostcode()) {
            $data['postcode'] = $object->getPostcode();
        }
        if (null !== $object->getTelephone()) {
            $data['telephone'] = $object->getTelephone();
        }
        $data['customer_group_id'] = $object->getCustomerGroupId();
        $data['sales_representative_id'] = $object->getSalesRepresentativeId();
        $data['reject_reason'] = $object->getRejectReason();
        $data['rejected_at'] = $object->getRejectedAt();
        $data['super_user_id'] = $object->getSuperUserId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
