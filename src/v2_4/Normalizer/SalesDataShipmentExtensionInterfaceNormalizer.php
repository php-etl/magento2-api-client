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

class SalesDataShipmentExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataShipmentExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataShipmentExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataShipmentExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ext_location_id', $data) && $data['ext_location_id'] !== null) {
            $object->setExtLocationId($data['ext_location_id']);
        } elseif (\array_key_exists('ext_location_id', $data) && $data['ext_location_id'] === null) {
            $object->setExtLocationId(null);
        }
        if (\array_key_exists('ext_return_shipment_id', $data) && $data['ext_return_shipment_id'] !== null) {
            $object->setExtReturnShipmentId($data['ext_return_shipment_id']);
        } elseif (\array_key_exists('ext_return_shipment_id', $data) && $data['ext_return_shipment_id'] === null) {
            $object->setExtReturnShipmentId(null);
        }
        if (\array_key_exists('ext_shipment_id', $data) && $data['ext_shipment_id'] !== null) {
            $object->setExtShipmentId($data['ext_shipment_id']);
        } elseif (\array_key_exists('ext_shipment_id', $data) && $data['ext_shipment_id'] === null) {
            $object->setExtShipmentId(null);
        }
        if (\array_key_exists('ext_tracking_reference', $data) && $data['ext_tracking_reference'] !== null) {
            $object->setExtTrackingReference($data['ext_tracking_reference']);
        } elseif (\array_key_exists('ext_tracking_reference', $data) && $data['ext_tracking_reference'] === null) {
            $object->setExtTrackingReference(null);
        }
        if (\array_key_exists('ext_tracking_url', $data) && $data['ext_tracking_url'] !== null) {
            $object->setExtTrackingUrl($data['ext_tracking_url']);
        } elseif (\array_key_exists('ext_tracking_url', $data) && $data['ext_tracking_url'] === null) {
            $object->setExtTrackingUrl(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtLocationId()) {
            $data['ext_location_id'] = $object->getExtLocationId();
        }
        if (null !== $object->getExtReturnShipmentId()) {
            $data['ext_return_shipment_id'] = $object->getExtReturnShipmentId();
        }
        if (null !== $object->getExtShipmentId()) {
            $data['ext_shipment_id'] = $object->getExtShipmentId();
        }
        if (null !== $object->getExtTrackingReference()) {
            $data['ext_tracking_reference'] = $object->getExtTrackingReference();
        }
        if (null !== $object->getExtTrackingUrl()) {
            $data['ext_tracking_url'] = $object->getExtTrackingUrl();
        }
        return $data;
    }
}
