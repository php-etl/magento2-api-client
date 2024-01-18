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
class ErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\ErrorResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\ErrorResponse';
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
        $object = new \Kiboko\Magento\Model\ErrorResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('errors', $data) && $data['errors'] !== null) {
            $values = array();
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\ErrorErrorsItem', 'json', $context);
            }
            $object->setErrors($values);
        }
        elseif (\array_key_exists('errors', $data) && $data['errors'] === null) {
            $object->setErrors(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_1 = array();
            foreach ($data['parameters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\ErrorParametersItem', 'json', $context);
            }
            $object->setParameters($values_1);
        }
        elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        if (\array_key_exists('trace', $data) && $data['trace'] !== null) {
            $object->setTrace($data['trace']);
        }
        elseif (\array_key_exists('trace', $data) && $data['trace'] === null) {
            $object->setTrace(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['message'] = $object->getMessage();
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values = array();
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['errors'] = $values;
        }
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
            $values_1 = array();
            foreach ($object->getParameters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['parameters'] = $values_1;
        }
        if ($object->isInitialized('trace') && null !== $object->getTrace()) {
            $data['trace'] = $object->getTrace();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\ErrorResponse' => false);
    }
}