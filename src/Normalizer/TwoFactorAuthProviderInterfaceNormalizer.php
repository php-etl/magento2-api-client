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
class TwoFactorAuthProviderInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\TwoFactorAuthProviderInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\TwoFactorAuthProviderInterface';
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
        $object = new \Kiboko\Magento\Model\TwoFactorAuthProviderInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data) && $data['enabled'] !== null) {
            $object->setEnabled($data['enabled']);
        }
        elseif (\array_key_exists('enabled', $data) && $data['enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('engine', $data) && $data['engine'] !== null) {
            $object->setEngine($this->denormalizer->denormalize($data['engine'], 'Kiboko\\Magento\\Model\\TwoFactorAuthEngineInterface', 'json', $context));
        }
        elseif (\array_key_exists('engine', $data) && $data['engine'] === null) {
            $object->setEngine(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($data['icon']);
        }
        elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('reset_allowed', $data) && $data['reset_allowed'] !== null) {
            $object->setResetAllowed($data['reset_allowed']);
        }
        elseif (\array_key_exists('reset_allowed', $data) && $data['reset_allowed'] === null) {
            $object->setResetAllowed(null);
        }
        if (\array_key_exists('configure_action', $data) && $data['configure_action'] !== null) {
            $object->setConfigureAction($data['configure_action']);
        }
        elseif (\array_key_exists('configure_action', $data) && $data['configure_action'] === null) {
            $object->setConfigureAction(null);
        }
        if (\array_key_exists('auth_action', $data) && $data['auth_action'] !== null) {
            $object->setAuthAction($data['auth_action']);
        }
        elseif (\array_key_exists('auth_action', $data) && $data['auth_action'] === null) {
            $object->setAuthAction(null);
        }
        if (\array_key_exists('extra_actions', $data) && $data['extra_actions'] !== null) {
            $values = array();
            foreach ($data['extra_actions'] as $value) {
                $values[] = $value;
            }
            $object->setExtraActions($values);
        }
        elseif (\array_key_exists('extra_actions', $data) && $data['extra_actions'] === null) {
            $object->setExtraActions(null);
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
        $data['configure_action'] = $object->getConfigureAction();
        $data['auth_action'] = $object->getAuthAction();
        $values = array();
        foreach ($object->getExtraActions() as $value) {
            $values[] = $value;
        }
        $data['extra_actions'] = $values;
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\TwoFactorAuthProviderInterface' => false);
    }
}