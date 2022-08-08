<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TemandoShippingDataCollectionPointQuoteCollectionPointInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\TemandoShippingDataCollectionPointQuoteCollectionPointInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\TemandoShippingDataCollectionPointQuoteCollectionPointInterface';
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
        $object = new \Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('collection_point_id', $data)) {
            $object->setCollectionPointId($data['collection_point_id']);
        }
        if (\array_key_exists('recipient_address_id', $data)) {
            $object->setRecipientAddressId($data['recipient_address_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('street', $data)) {
            $values = array();
            foreach ($data['street'] as $value) {
                $values[] = $value;
            }
            $object->setStreet($values);
        }
        if (\array_key_exists('opening_hours', $data)) {
            $values_1 = array();
            foreach ($data['opening_hours'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOpeningHours($values_1);
        }
        if (\array_key_exists('shipping_experiences', $data)) {
            $values_2 = array();
            foreach ($data['shipping_experiences'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setShippingExperiences($values_2);
        }
        if (\array_key_exists('selected', $data)) {
            $object->setSelected($data['selected']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['entity_id'] = $object->getEntityId();
        $data['collection_point_id'] = $object->getCollectionPointId();
        $data['recipient_address_id'] = $object->getRecipientAddressId();
        $data['name'] = $object->getName();
        $data['country'] = $object->getCountry();
        $data['region'] = $object->getRegion();
        $data['postcode'] = $object->getPostcode();
        $data['city'] = $object->getCity();
        $values = array();
        foreach ($object->getStreet() as $value) {
            $values[] = $value;
        }
        $data['street'] = $values;
        $values_1 = array();
        foreach ($object->getOpeningHours() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['opening_hours'] = $values_1;
        $values_2 = array();
        foreach ($object->getShippingExperiences() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['shipping_experiences'] = $values_2;
        $data['selected'] = $object->getSelected();
        return $data;
    }
}
