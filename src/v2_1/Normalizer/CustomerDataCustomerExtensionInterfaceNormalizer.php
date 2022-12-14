<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataCustomerExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\CustomerDataCustomerExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\CustomerDataCustomerExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amazon_id', $data) && $data['amazon_id'] !== null) {
            $object->setAmazonId($data['amazon_id']);
        } elseif (\array_key_exists('amazon_id', $data) && $data['amazon_id'] === null) {
            $object->setAmazonId(null);
        }
        if (\array_key_exists('company_attributes', $data) && $data['company_attributes'] !== null) {
            $object->setCompanyAttributes($this->denormalizer->denormalize($data['company_attributes'], 'Kiboko\\Magento\\V2_1\\Model\\CompanyDataCompanyCustomerInterface', 'json', $context));
        } elseif (\array_key_exists('company_attributes', $data) && $data['company_attributes'] === null) {
            $object->setCompanyAttributes(null);
        }
        if (\array_key_exists('is_subscribed', $data) && $data['is_subscribed'] !== null) {
            $object->setIsSubscribed($data['is_subscribed']);
        } elseif (\array_key_exists('is_subscribed', $data) && $data['is_subscribed'] === null) {
            $object->setIsSubscribed(null);
        }
        if (\array_key_exists('vertex_customer_code', $data) && $data['vertex_customer_code'] !== null) {
            $object->setVertexCustomerCode($data['vertex_customer_code']);
        } elseif (\array_key_exists('vertex_customer_code', $data) && $data['vertex_customer_code'] === null) {
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
        if (null !== $object->getAmazonId()) {
            $data['amazon_id'] = $object->getAmazonId();
        }
        if (null !== $object->getCompanyAttributes()) {
            $data['company_attributes'] = $this->normalizer->normalize($object->getCompanyAttributes(), 'json', $context);
        }
        if (null !== $object->getIsSubscribed()) {
            $data['is_subscribed'] = $object->getIsSubscribed();
        }
        if (null !== $object->getVertexCustomerCode()) {
            $data['vertex_customer_code'] = $object->getVertexCustomerCode();
        }
        return $data;
    }
}
