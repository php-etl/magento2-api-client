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
class AsynchronousOperationsDataDetailedBulkOperationsStatusInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface';
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
        $object = new \Kiboko\Magento\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operations_list', $data) && $data['operations_list'] !== null) {
            $values = array();
            foreach ($data['operations_list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\AsynchronousOperationsDataOperationInterface', 'json', $context);
            }
            $object->setOperationsList($values);
        }
        elseif (\array_key_exists('operations_list', $data) && $data['operations_list'] === null) {
            $object->setOperationsList(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('user_type', $data) && $data['user_type'] !== null) {
            $object->setUserType($data['user_type']);
        }
        elseif (\array_key_exists('user_type', $data) && $data['user_type'] === null) {
            $object->setUserType(null);
        }
        if (\array_key_exists('bulk_id', $data) && $data['bulk_id'] !== null) {
            $object->setBulkId($data['bulk_id']);
        }
        elseif (\array_key_exists('bulk_id', $data) && $data['bulk_id'] === null) {
            $object->setBulkId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime($data['start_time']);
        }
        elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('operation_count', $data) && $data['operation_count'] !== null) {
            $object->setOperationCount($data['operation_count']);
        }
        elseif (\array_key_exists('operation_count', $data) && $data['operation_count'] === null) {
            $object->setOperationCount(null);
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
        foreach ($object->getOperationsList() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['operations_list'] = $values;
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['user_type'] = $object->getUserType();
        $data['bulk_id'] = $object->getBulkId();
        $data['description'] = $object->getDescription();
        $data['start_time'] = $object->getStartTime();
        $data['user_id'] = $object->getUserId();
        $data['operation_count'] = $object->getOperationCount();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface' => false);
    }
}