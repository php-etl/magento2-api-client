<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1GuestCartsCartIdSetPaymentInformationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\V1GuestCartsCartIdSetPaymentInformationPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\V1GuestCartsCartIdSetPaymentInformationPostBody';
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
        $object = new \Kiboko\Magento\V2_2\Model\V1GuestCartsCartIdSetPaymentInformationPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billingAddress', $data) && $data['billingAddress'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billingAddress'], 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataAddressInterface', 'json', $context));
        } elseif (\array_key_exists('billingAddress', $data) && $data['billingAddress'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] !== null) {
            $object->setPaymentMethod($this->denormalizer->denormalize($data['paymentMethod'], 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataPaymentInterface', 'json', $context));
        } elseif (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] === null) {
            $object->setPaymentMethod(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBillingAddress()) {
            $data['billingAddress'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        $data['email'] = $object->getEmail();
        $data['paymentMethod'] = $this->normalizer->normalize($object->getPaymentMethod(), 'json', $context);
        return $data;
    }
}
