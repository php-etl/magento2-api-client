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
class V1InventoryBulkProductSourceTransferPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceTransferPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceTransferPostBody';
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
        $object = new \Kiboko\Magento\Model\V1InventoryBulkProductSourceTransferPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('skus', $data) && $data['skus'] !== null) {
            $values = array();
            foreach ($data['skus'] as $value) {
                $values[] = $value;
            }
            $object->setSkus($values);
        }
        elseif (\array_key_exists('skus', $data) && $data['skus'] === null) {
            $object->setSkus(null);
        }
        if (\array_key_exists('originSource', $data) && $data['originSource'] !== null) {
            $object->setOriginSource($data['originSource']);
        }
        elseif (\array_key_exists('originSource', $data) && $data['originSource'] === null) {
            $object->setOriginSource(null);
        }
        if (\array_key_exists('destinationSource', $data) && $data['destinationSource'] !== null) {
            $object->setDestinationSource($data['destinationSource']);
        }
        elseif (\array_key_exists('destinationSource', $data) && $data['destinationSource'] === null) {
            $object->setDestinationSource(null);
        }
        if (\array_key_exists('unassignFromOrigin', $data) && $data['unassignFromOrigin'] !== null) {
            $object->setUnassignFromOrigin($data['unassignFromOrigin']);
        }
        elseif (\array_key_exists('unassignFromOrigin', $data) && $data['unassignFromOrigin'] === null) {
            $object->setUnassignFromOrigin(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getSkus() as $value) {
            $values[] = $value;
        }
        $data['skus'] = $values;
        $data['originSource'] = $object->getOriginSource();
        $data['destinationSource'] = $object->getDestinationSource();
        $data['unassignFromOrigin'] = $object->getUnassignFromOrigin();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceTransferPostBody' => false);
    }
}