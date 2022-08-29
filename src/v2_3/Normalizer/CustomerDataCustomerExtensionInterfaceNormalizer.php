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

class CustomerDataCustomerExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CustomerDataCustomerExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amazon_id', $data)) {
            $object->setAmazonId($data['amazon_id']);
        }
        if (\array_key_exists('company_attributes', $data)) {
            $object->setCompanyAttributes($this->denormalizer->denormalize($data['company_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataCompanyCustomerInterface', 'json', $context));
        }
        if (\array_key_exists('is_subscribed', $data)) {
            $object->setIsSubscribed($data['is_subscribed']);
        }
        if (\array_key_exists('vertex_customer_code', $data)) {
            $object->setVertexCustomerCode($data['vertex_customer_code']);
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
