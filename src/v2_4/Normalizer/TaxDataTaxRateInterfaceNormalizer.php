<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\TaxDataTaxRateInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\TaxDataTaxRateInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\TaxDataTaxRateInterface();
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('tax_country_id', $data)) {
            $object->setTaxCountryId($data['tax_country_id']);
        }
        if (\array_key_exists('tax_region_id', $data)) {
            $object->setTaxRegionId($data['tax_region_id']);
        }
        if (\array_key_exists('region_name', $data)) {
            $object->setRegionName($data['region_name']);
        }
        if (\array_key_exists('tax_postcode', $data)) {
            $object->setTaxPostcode($data['tax_postcode']);
        }
        if (\array_key_exists('zip_is_range', $data)) {
            $object->setZipIsRange($data['zip_is_range']);
        }
        if (\array_key_exists('zip_from', $data)) {
            $object->setZipFrom($data['zip_from']);
        }
        if (\array_key_exists('zip_to', $data)) {
            $object->setZipTo($data['zip_to']);
        }
        if (\array_key_exists('rate', $data)) {
            $object->setRate($data['rate']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('titles', $data)) {
            $values = array();
            foreach ($data['titles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_4\\Model\\TaxDataTaxRateTitleInterface', 'json', $context);
            }
            $object->setTitles($values);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
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
        $data['tax_country_id'] = $object->getTaxCountryId();
        if (null !== $object->getTaxRegionId()) {
            $data['tax_region_id'] = $object->getTaxRegionId();
        }
        if (null !== $object->getRegionName()) {
            $data['region_name'] = $object->getRegionName();
        }
        if (null !== $object->getTaxPostcode()) {
            $data['tax_postcode'] = $object->getTaxPostcode();
        }
        if (null !== $object->getZipIsRange()) {
            $data['zip_is_range'] = $object->getZipIsRange();
        }
        if (null !== $object->getZipFrom()) {
            $data['zip_from'] = $object->getZipFrom();
        }
        if (null !== $object->getZipTo()) {
            $data['zip_to'] = $object->getZipTo();
        }
        $data['rate'] = $object->getRate();
        $data['code'] = $object->getCode();
        if (null !== $object->getTitles()) {
            $values = array();
            foreach ($object->getTitles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['titles'] = $values;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
