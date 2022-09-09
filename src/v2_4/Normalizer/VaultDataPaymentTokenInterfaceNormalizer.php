<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VaultDataPaymentTokenInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\VaultDataPaymentTokenInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\VaultDataPaymentTokenInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\VaultDataPaymentTokenInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        } elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt($data['expires_at']);
        } elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
            $object->setExpiresAt(null);
        }
        if (\array_key_exists('gateway_token', $data) && $data['gateway_token'] !== null) {
            $object->setGatewayToken($data['gateway_token']);
        } elseif (\array_key_exists('gateway_token', $data) && $data['gateway_token'] === null) {
            $object->setGatewayToken(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_visible', $data) && $data['is_visible'] !== null) {
            $object->setIsVisible($data['is_visible']);
        } elseif (\array_key_exists('is_visible', $data) && $data['is_visible'] === null) {
            $object->setIsVisible(null);
        }
        if (\array_key_exists('payment_method_code', $data) && $data['payment_method_code'] !== null) {
            $object->setPaymentMethodCode($data['payment_method_code']);
        } elseif (\array_key_exists('payment_method_code', $data) && $data['payment_method_code'] === null) {
            $object->setPaymentMethodCode(null);
        }
        if (\array_key_exists('public_hash', $data) && $data['public_hash'] !== null) {
            $object->setPublicHash($data['public_hash']);
        } elseif (\array_key_exists('public_hash', $data) && $data['public_hash'] === null) {
            $object->setPublicHash(null);
        }
        if (\array_key_exists('token_details', $data) && $data['token_details'] !== null) {
            $object->setTokenDetails($data['token_details']);
        } elseif (\array_key_exists('token_details', $data) && $data['token_details'] === null) {
            $object->setTokenDetails(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getExpiresAt()) {
            $data['expires_at'] = $object->getExpiresAt();
        }
        $data['gateway_token'] = $object->getGatewayToken();
        $data['is_active'] = $object->getIsActive();
        $data['is_visible'] = $object->getIsVisible();
        $data['payment_method_code'] = $object->getPaymentMethodCode();
        $data['public_hash'] = $object->getPublicHash();
        $data['token_details'] = $object->getTokenDetails();
        $data['type'] = $object->getType();
        return $data;
    }
}
