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

class SalesDataShipmentCreationArgumentsExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataShipmentCreationArgumentsExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataShipmentCreationArgumentsExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\SalesDataShipmentCreationArgumentsExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ext_location_id', $data)) {
            $object->setExtLocationId($data['ext_location_id']);
        }
        if (\array_key_exists('ext_return_shipment_id', $data)) {
            $object->setExtReturnShipmentId($data['ext_return_shipment_id']);
        }
        if (\array_key_exists('ext_shipment_id', $data)) {
            $object->setExtShipmentId($data['ext_shipment_id']);
        }
        if (\array_key_exists('ext_tracking_reference', $data)) {
            $object->setExtTrackingReference($data['ext_tracking_reference']);
        }
        if (\array_key_exists('ext_tracking_url', $data)) {
            $object->setExtTrackingUrl($data['ext_tracking_url']);
        }
        if (\array_key_exists('shipping_label', $data)) {
            $object->setShippingLabel($data['shipping_label']);
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
        if (null !== $object->getShippingLabel()) {
            $data['shipping_label'] = $object->getShippingLabel();
        }
        return $data;
    }
}
