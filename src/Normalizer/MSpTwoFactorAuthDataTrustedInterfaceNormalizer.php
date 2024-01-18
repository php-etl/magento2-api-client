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
class MSpTwoFactorAuthDataTrustedInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\MSpTwoFactorAuthDataTrustedInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\MSpTwoFactorAuthDataTrustedInterface';
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
        $object = new \Kiboko\Magento\Model\MSpTwoFactorAuthDataTrustedInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('date_time', $data) && $data['date_time'] !== null) {
            $object->setDateTime($data['date_time']);
        }
        elseif (\array_key_exists('date_time', $data) && $data['date_time'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('device_name', $data) && $data['device_name'] !== null) {
            $object->setDeviceName($data['device_name']);
        }
        elseif (\array_key_exists('device_name', $data) && $data['device_name'] === null) {
            $object->setDeviceName(null);
        }
        if (\array_key_exists('last_ip', $data) && $data['last_ip'] !== null) {
            $object->setLastIp($data['last_ip']);
        }
        elseif (\array_key_exists('last_ip', $data) && $data['last_ip'] === null) {
            $object->setLastIp(null);
        }
        if (\array_key_exists('user_agent', $data) && $data['user_agent'] !== null) {
            $object->setUserAgent($data['user_agent']);
        }
        elseif (\array_key_exists('user_agent', $data) && $data['user_agent'] === null) {
            $object->setUserAgent(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['date_time'] = $object->getDateTime();
        $data['user_id'] = $object->getUserId();
        $data['device_name'] = $object->getDeviceName();
        $data['last_ip'] = $object->getLastIp();
        $data['user_agent'] = $object->getUserAgent();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\MSpTwoFactorAuthDataTrustedInterface' => false);
    }
}