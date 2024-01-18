<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InventoryDistanceBasedSourceSelectionApiDataLatLngInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface';
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
        $object = new \Kiboko\Magento\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface();
        if (\array_key_exists('lat', $data) && \is_int($data['lat'])) {
            $data['lat'] = (double) $data['lat'];
        }
        if (\array_key_exists('lng', $data) && \is_int($data['lng'])) {
            $data['lng'] = (double) $data['lng'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lat', $data) && $data['lat'] !== null) {
            $object->setLat($data['lat']);
        }
        elseif (\array_key_exists('lat', $data) && $data['lat'] === null) {
            $object->setLat(null);
        }
        if (\array_key_exists('lng', $data) && $data['lng'] !== null) {
            $object->setLng($data['lng']);
        }
        elseif (\array_key_exists('lng', $data) && $data['lng'] === null) {
            $object->setLng(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['lat'] = $object->getLat();
        $data['lng'] = $object->getLng();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface' => false);
    }
}