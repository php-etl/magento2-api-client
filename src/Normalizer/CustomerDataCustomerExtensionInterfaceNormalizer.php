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
class CustomerDataCustomerExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CustomerDataCustomerExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CustomerDataCustomerExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\CustomerDataCustomerExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_subscribed', $data) && $data['is_subscribed'] !== null) {
            $object->setIsSubscribed($data['is_subscribed']);
        }
        elseif (\array_key_exists('is_subscribed', $data) && $data['is_subscribed'] === null) {
            $object->setIsSubscribed(null);
        }
        if (\array_key_exists('amazon_id', $data) && $data['amazon_id'] !== null) {
            $object->setAmazonId($data['amazon_id']);
        }
        elseif (\array_key_exists('amazon_id', $data) && $data['amazon_id'] === null) {
            $object->setAmazonId(null);
        }
        if (\array_key_exists('vertex_customer_code', $data) && $data['vertex_customer_code'] !== null) {
            $object->setVertexCustomerCode($data['vertex_customer_code']);
        }
        elseif (\array_key_exists('vertex_customer_code', $data) && $data['vertex_customer_code'] === null) {
            $object->setVertexCustomerCode(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('isSubscribed') && null !== $object->getIsSubscribed()) {
            $data['is_subscribed'] = $object->getIsSubscribed();
        }
        if ($object->isInitialized('amazonId') && null !== $object->getAmazonId()) {
            $data['amazon_id'] = $object->getAmazonId();
        }
        if ($object->isInitialized('vertexCustomerCode') && null !== $object->getVertexCustomerCode()) {
            $data['vertex_customer_code'] = $object->getVertexCustomerCode();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CustomerDataCustomerExtensionInterface' => false);
    }
}