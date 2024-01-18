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
class V1GuestAddressCleansePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1GuestAddressCleansePostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1GuestAddressCleansePostBody';
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
        $object = new \Kiboko\Magento\Model\V1GuestAddressCleansePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cartId', $data) && $data['cartId'] !== null) {
            $object->setCartId($data['cartId']);
        }
        elseif (\array_key_exists('cartId', $data) && $data['cartId'] === null) {
            $object->setCartId(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Kiboko\\Magento\\Model\\VertexAddressValidationApiDataAddressInterface', 'json', $context));
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('scopeCode', $data) && $data['scopeCode'] !== null) {
            $object->setScopeCode($data['scopeCode']);
        }
        elseif (\array_key_exists('scopeCode', $data) && $data['scopeCode'] === null) {
            $object->setScopeCode(null);
        }
        if (\array_key_exists('scopeType', $data) && $data['scopeType'] !== null) {
            $object->setScopeType($data['scopeType']);
        }
        elseif (\array_key_exists('scopeType', $data) && $data['scopeType'] === null) {
            $object->setScopeType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cartId'] = $object->getCartId();
        $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        if ($object->isInitialized('scopeCode') && null !== $object->getScopeCode()) {
            $data['scopeCode'] = $object->getScopeCode();
        }
        if ($object->isInitialized('scopeType') && null !== $object->getScopeType()) {
            $data['scopeType'] = $object->getScopeType();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1GuestAddressCleansePostBody' => false);
    }
}