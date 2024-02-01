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
class V1TfaProviderAuthyConfigurePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1TfaProviderAuthyConfigurePostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1TfaProviderAuthyConfigurePostBody';
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
        $object = new \Kiboko\Magento\Model\V1TfaProviderAuthyConfigurePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tfaToken', $data) && $data['tfaToken'] !== null) {
            $object->setTfaToken($data['tfaToken']);
        }
        elseif (\array_key_exists('tfaToken', $data) && $data['tfaToken'] === null) {
            $object->setTfaToken(null);
        }
        if (\array_key_exists('deviceData', $data) && $data['deviceData'] !== null) {
            $object->setDeviceData($this->denormalizer->denormalize($data['deviceData'], 'Kiboko\\Magento\\Model\\TwoFactorAuthDataAuthyDeviceInterface', 'json', $context));
        }
        elseif (\array_key_exists('deviceData', $data) && $data['deviceData'] === null) {
            $object->setDeviceData(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['tfaToken'] = $object->getTfaToken();
        $data['deviceData'] = $this->normalizer->normalize($object->getDeviceData(), 'json', $context);
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1TfaProviderAuthyConfigurePostBody' => false);
    }
}