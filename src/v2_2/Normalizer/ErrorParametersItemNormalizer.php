<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ErrorParametersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\ErrorParametersItem';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\ErrorParametersItem';
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
        $object = new \Kiboko\Magento\V2_2\Model\ErrorParametersItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fieldName', $data) && $data['fieldName'] !== null) {
            $object->setFieldName($data['fieldName']);
        } elseif (\array_key_exists('fieldName', $data) && $data['fieldName'] === null) {
            $object->setFieldName(null);
        }
        if (\array_key_exists('fieldValue', $data) && $data['fieldValue'] !== null) {
            $object->setFieldValue($data['fieldValue']);
        } elseif (\array_key_exists('fieldValue', $data) && $data['fieldValue'] === null) {
            $object->setFieldValue(null);
        }
        if (\array_key_exists('resources', $data) && $data['resources'] !== null) {
            $object->setResources($data['resources']);
        } elseif (\array_key_exists('resources', $data) && $data['resources'] === null) {
            $object->setResources(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFieldName()) {
            $data['fieldName'] = $object->getFieldName();
        }
        if (null !== $object->getFieldValue()) {
            $data['fieldValue'] = $object->getFieldValue();
        }
        if (null !== $object->getResources()) {
            $data['resources'] = $object->getResources();
        }
        return $data;
    }
}
