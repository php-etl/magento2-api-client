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
class MSpTwoFactorAuthProviderInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\MSpTwoFactorAuthProviderInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\MSpTwoFactorAuthProviderInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('engine', $data)) {
            $object->setEngine($this->denormalizer->denormalize($data['engine'], 'Kiboko\\Magento\\v2_3\\Model\\MSpTwoFactorAuthEngineInterface', 'json', $context));
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($data['icon']);
        }
        if (\array_key_exists('reset_allowed', $data)) {
            $object->setResetAllowed($data['reset_allowed']);
        }
        if (\array_key_exists('trusted_devices_allowed', $data)) {
            $object->setTrustedDevicesAllowed($data['trusted_devices_allowed']);
        }
        if (\array_key_exists('configure_action', $data)) {
            $object->setConfigureAction($data['configure_action']);
        }
        if (\array_key_exists('auth_action', $data)) {
            $object->setAuthAction($data['auth_action']);
        }
        if (\array_key_exists('extra_actions', $data)) {
            $values = array();
            foreach ($data['extra_actions'] as $value) {
                $values[] = $value;
            }
            $object->setExtraActions($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['enabled'] = $object->getEnabled();
        $data['engine'] = $this->normalizer->normalize($object->getEngine(), 'json', $context);
        $data['code'] = $object->getCode();
        $data['name'] = $object->getName();
        $data['icon'] = $object->getIcon();
        $data['reset_allowed'] = $object->getResetAllowed();
        $data['trusted_devices_allowed'] = $object->getTrustedDevicesAllowed();
        $data['configure_action'] = $object->getConfigureAction();
        $data['auth_action'] = $object->getAuthAction();
        $values = array();
        foreach ($object->getExtraActions() as $value) {
            $values[] = $value;
        }
        $data['extra_actions'] = $values;
        return $data;
    }
}