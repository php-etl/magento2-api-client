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

class TaxDataTaxRateInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\TaxDataTaxRateInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\TaxDataTaxRateInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\TaxDataTaxRateInterface();
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('region_name', $data) && $data['region_name'] !== null) {
            $object->setRegionName($data['region_name']);
        } elseif (\array_key_exists('region_name', $data) && $data['region_name'] === null) {
            $object->setRegionName(null);
        }
        if (\array_key_exists('tax_country_id', $data) && $data['tax_country_id'] !== null) {
            $object->setTaxCountryId($data['tax_country_id']);
        } elseif (\array_key_exists('tax_country_id', $data) && $data['tax_country_id'] === null) {
            $object->setTaxCountryId(null);
        }
        if (\array_key_exists('tax_postcode', $data) && $data['tax_postcode'] !== null) {
            $object->setTaxPostcode($data['tax_postcode']);
        } elseif (\array_key_exists('tax_postcode', $data) && $data['tax_postcode'] === null) {
            $object->setTaxPostcode(null);
        }
        if (\array_key_exists('tax_region_id', $data) && $data['tax_region_id'] !== null) {
            $object->setTaxRegionId($data['tax_region_id']);
        } elseif (\array_key_exists('tax_region_id', $data) && $data['tax_region_id'] === null) {
            $object->setTaxRegionId(null);
        }
        if (\array_key_exists('titles', $data) && $data['titles'] !== null) {
            $values = array();
            foreach ($data['titles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\TaxDataTaxRateTitleInterface', 'json', $context);
            }
            $object->setTitles($values);
        } elseif (\array_key_exists('titles', $data) && $data['titles'] === null) {
            $object->setTitles(null);
        }
        if (\array_key_exists('zip_from', $data) && $data['zip_from'] !== null) {
            $object->setZipFrom($data['zip_from']);
        } elseif (\array_key_exists('zip_from', $data) && $data['zip_from'] === null) {
            $object->setZipFrom(null);
        }
        if (\array_key_exists('zip_is_range', $data) && $data['zip_is_range'] !== null) {
            $object->setZipIsRange($data['zip_is_range']);
        } elseif (\array_key_exists('zip_is_range', $data) && $data['zip_is_range'] === null) {
            $object->setZipIsRange(null);
        }
        if (\array_key_exists('zip_to', $data) && $data['zip_to'] !== null) {
            $object->setZipTo($data['zip_to']);
        } elseif (\array_key_exists('zip_to', $data) && $data['zip_to'] === null) {
            $object->setZipTo(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['code'] = $object->getCode();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['rate'] = $object->getRate();
        if (null !== $object->getRegionName()) {
            $data['region_name'] = $object->getRegionName();
        }
        $data['tax_country_id'] = $object->getTaxCountryId();
        if (null !== $object->getTaxPostcode()) {
            $data['tax_postcode'] = $object->getTaxPostcode();
        }
        if (null !== $object->getTaxRegionId()) {
            $data['tax_region_id'] = $object->getTaxRegionId();
        }
        if (null !== $object->getTitles()) {
            $values = array();
            foreach ($object->getTitles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['titles'] = $values;
        }
        if (null !== $object->getZipFrom()) {
            $data['zip_from'] = $object->getZipFrom();
        }
        if (null !== $object->getZipIsRange()) {
            $data['zip_is_range'] = $object->getZipIsRange();
        }
        if (null !== $object->getZipTo()) {
            $data['zip_to'] = $object->getZipTo();
        }
        return $data;
    }
}
