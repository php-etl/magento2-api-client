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
class PayPalBraintreeDataAuthDataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\PayPalBraintreeDataAuthDataInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\PayPalBraintreeDataAuthDataInterface';
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
        $object = new \Kiboko\Magento\Model\PayPalBraintreeDataAuthDataInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_token', $data) && $data['client_token'] !== null) {
            $object->setClientToken($data['client_token']);
        }
        elseif (\array_key_exists('client_token', $data) && $data['client_token'] === null) {
            $object->setClientToken(null);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('action_success', $data) && $data['action_success'] !== null) {
            $object->setActionSuccess($data['action_success']);
        }
        elseif (\array_key_exists('action_success', $data) && $data['action_success'] === null) {
            $object->setActionSuccess(null);
        }
        if (\array_key_exists('logged_in', $data) && $data['logged_in'] !== null) {
            $object->setLoggedIn($data['logged_in']);
        }
        elseif (\array_key_exists('logged_in', $data) && $data['logged_in'] === null) {
            $object->setLoggedIn(null);
        }
        if (\array_key_exists('store_code', $data) && $data['store_code'] !== null) {
            $object->setStoreCode($data['store_code']);
        }
        elseif (\array_key_exists('store_code', $data) && $data['store_code'] === null) {
            $object->setStoreCode(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('clientToken') && null !== $object->getClientToken()) {
            $data['client_token'] = $object->getClientToken();
        }
        $data['display_name'] = $object->getDisplayName();
        $data['action_success'] = $object->getActionSuccess();
        $data['logged_in'] = $object->getLoggedIn();
        $data['store_code'] = $object->getStoreCode();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\PayPalBraintreeDataAuthDataInterface' => false);
    }
}