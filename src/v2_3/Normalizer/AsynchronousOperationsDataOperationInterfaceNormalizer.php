<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AsynchronousOperationsDataOperationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\AsynchronousOperationsDataOperationInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\AsynchronousOperationsDataOperationInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\AsynchronousOperationsDataOperationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\AsynchronousOperationsDataOperationExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('bulk_uuid', $data)) {
            $object->setBulkUuid($data['bulk_uuid']);
        }
        if (\array_key_exists('topic_name', $data)) {
            $object->setTopicName($data['topic_name']);
        }
        if (\array_key_exists('serialized_data', $data)) {
            $object->setSerializedData($data['serialized_data']);
        }
        if (\array_key_exists('result_serialized_data', $data)) {
            $object->setResultSerializedData($data['result_serialized_data']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('result_message', $data)) {
            $object->setResultMessage($data['result_message']);
        }
        if (\array_key_exists('error_code', $data)) {
            $object->setErrorCode($data['error_code']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        $data['id'] = $object->getId();
        $data['bulk_uuid'] = $object->getBulkUuid();
        $data['topic_name'] = $object->getTopicName();
        $data['serialized_data'] = $object->getSerializedData();
        $data['result_serialized_data'] = $object->getResultSerializedData();
        $data['status'] = $object->getStatus();
        $data['result_message'] = $object->getResultMessage();
        $data['error_code'] = $object->getErrorCode();
        return $data;
    }
}