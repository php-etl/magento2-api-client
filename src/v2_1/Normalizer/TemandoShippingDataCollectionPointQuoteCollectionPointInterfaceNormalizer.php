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

class TemandoShippingDataCollectionPointQuoteCollectionPointInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\TemandoShippingDataCollectionPointQuoteCollectionPointInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\TemandoShippingDataCollectionPointQuoteCollectionPointInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('collection_point_id', $data) && $data['collection_point_id'] !== null) {
            $object->setCollectionPointId($data['collection_point_id']);
        } elseif (\array_key_exists('collection_point_id', $data) && $data['collection_point_id'] === null) {
            $object->setCollectionPointId(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('opening_hours', $data) && $data['opening_hours'] !== null) {
            $values = array();
            foreach ($data['opening_hours'] as $value) {
                $values[] = $value;
            }
            $object->setOpeningHours($values);
        } elseif (\array_key_exists('opening_hours', $data) && $data['opening_hours'] === null) {
            $object->setOpeningHours(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        } elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('recipient_address_id', $data) && $data['recipient_address_id'] !== null) {
            $object->setRecipientAddressId($data['recipient_address_id']);
        } elseif (\array_key_exists('recipient_address_id', $data) && $data['recipient_address_id'] === null) {
            $object->setRecipientAddressId(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($data['region']);
        } elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('selected', $data) && $data['selected'] !== null) {
            $object->setSelected($data['selected']);
        } elseif (\array_key_exists('selected', $data) && $data['selected'] === null) {
            $object->setSelected(null);
        }
        if (\array_key_exists('shipping_experiences', $data) && $data['shipping_experiences'] !== null) {
            $values_1 = array();
            foreach ($data['shipping_experiences'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setShippingExperiences($values_1);
        } elseif (\array_key_exists('shipping_experiences', $data) && $data['shipping_experiences'] === null) {
            $object->setShippingExperiences(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $values_2 = array();
            foreach ($data['street'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setStreet($values_2);
        } elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
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
        $data['collection_point_id'] = $object->getCollectionPointId();
        $data['country'] = $object->getCountry();
        $data['entity_id'] = $object->getEntityId();
        $data['name'] = $object->getName();
        $values = array();
        foreach ($object->getOpeningHours() as $value) {
            $values[] = $value;
        }
        $data['opening_hours'] = $values;
        $data['postcode'] = $object->getPostcode();
        $data['recipient_address_id'] = $object->getRecipientAddressId();
        $data['region'] = $object->getRegion();
        $data['selected'] = $object->getSelected();
        $values_1 = array();
        foreach ($object->getShippingExperiences() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['shipping_experiences'] = $values_1;
        $values_2 = array();
        foreach ($object->getStreet() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['street'] = $values_2;
        return $data;
    }
}
