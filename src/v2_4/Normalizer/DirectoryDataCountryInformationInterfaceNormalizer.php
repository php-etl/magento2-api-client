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

class DirectoryDataCountryInformationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\DirectoryDataCountryInformationInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\DirectoryDataCountryInformationInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\DirectoryDataCountryInformationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('two_letter_abbreviation', $data)) {
            $object->setTwoLetterAbbreviation($data['two_letter_abbreviation']);
        }
        if (\array_key_exists('three_letter_abbreviation', $data)) {
            $object->setThreeLetterAbbreviation($data['three_letter_abbreviation']);
        }
        if (\array_key_exists('full_name_locale', $data)) {
            $object->setFullNameLocale($data['full_name_locale']);
        }
        if (\array_key_exists('full_name_english', $data)) {
            $object->setFullNameEnglish($data['full_name_english']);
        }
        if (\array_key_exists('available_regions', $data)) {
            $values = array();
            foreach ($data['available_regions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_4\\Model\\DirectoryDataRegionInformationInterface', 'json', $context);
            }
            $object->setAvailableRegions($values);
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
        $data['id'] = $object->getId();
        $data['two_letter_abbreviation'] = $object->getTwoLetterAbbreviation();
        $data['three_letter_abbreviation'] = $object->getThreeLetterAbbreviation();
        $data['full_name_locale'] = $object->getFullNameLocale();
        $data['full_name_english'] = $object->getFullNameEnglish();
        if (null !== $object->getAvailableRegions()) {
            $values = array();
            foreach ($object->getAvailableRegions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['available_regions'] = $values;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
