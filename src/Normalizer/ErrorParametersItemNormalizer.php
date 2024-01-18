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
class ErrorParametersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\ErrorParametersItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\ErrorParametersItem';
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
        $object = new \Kiboko\Magento\Model\ErrorParametersItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resources', $data) && $data['resources'] !== null) {
            $object->setResources($data['resources']);
        }
        elseif (\array_key_exists('resources', $data) && $data['resources'] === null) {
            $object->setResources(null);
        }
        if (\array_key_exists('fieldName', $data) && $data['fieldName'] !== null) {
            $object->setFieldName($data['fieldName']);
        }
        elseif (\array_key_exists('fieldName', $data) && $data['fieldName'] === null) {
            $object->setFieldName(null);
        }
        if (\array_key_exists('fieldValue', $data) && $data['fieldValue'] !== null) {
            $object->setFieldValue($data['fieldValue']);
        }
        elseif (\array_key_exists('fieldValue', $data) && $data['fieldValue'] === null) {
            $object->setFieldValue(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('resources') && null !== $object->getResources()) {
            $data['resources'] = $object->getResources();
        }
        if ($object->isInitialized('fieldName') && null !== $object->getFieldName()) {
            $data['fieldName'] = $object->getFieldName();
        }
        if ($object->isInitialized('fieldValue') && null !== $object->getFieldValue()) {
            $data['fieldValue'] = $object->getFieldValue();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\ErrorParametersItem' => false);
    }
}