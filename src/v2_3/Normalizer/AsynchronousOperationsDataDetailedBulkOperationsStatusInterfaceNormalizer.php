<?php

namespace Kiboko\Magento\V2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_3\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bulk_id', $data) && $data['bulk_id'] !== null) {
            $object->setBulkId($data['bulk_id']);
        } elseif (\array_key_exists('bulk_id', $data) && $data['bulk_id'] === null) {
            $object->setBulkId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('operation_count', $data) && $data['operation_count'] !== null) {
            $object->setOperationCount($data['operation_count']);
        } elseif (\array_key_exists('operation_count', $data) && $data['operation_count'] === null) {
            $object->setOperationCount(null);
        }
        if (\array_key_exists('operations_list', $data) && $data['operations_list'] !== null) {
            $values = array();
            foreach ($data['operations_list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\AsynchronousOperationsDataDetailedOperationStatusInterface', 'json', $context);
            }
            $object->setOperationsList($values);
        } elseif (\array_key_exists('operations_list', $data) && $data['operations_list'] === null) {
            $object->setOperationsList(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime($data['start_time']);
        } elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['bulk_id'] = $object->getBulkId();
        $data['description'] = $object->getDescription();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['operation_count'] = $object->getOperationCount();
        $values = array();
        foreach ($object->getOperationsList() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['operations_list'] = $values;
        $data['start_time'] = $object->getStartTime();
        $data['user_id'] = $object->getUserId();
        return $data;
    }
}
