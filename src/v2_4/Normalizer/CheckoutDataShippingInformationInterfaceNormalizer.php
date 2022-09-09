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

class CheckoutDataShippingInformationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CheckoutDataShippingInformationInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CheckoutDataShippingInformationInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CheckoutDataShippingInformationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address', $data) && $data['billing_address'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataAddressInterface', 'json', $context));
        } elseif (\array_key_exists('billing_address', $data) && $data['billing_address'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values = array();
            foreach ($data['custom_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values);
        } elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('shipping_address', $data) && $data['shipping_address'] !== null) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataAddressInterface', 'json', $context));
        } elseif (\array_key_exists('shipping_address', $data) && $data['shipping_address'] === null) {
            $object->setShippingAddress(null);
        }
        if (\array_key_exists('shipping_carrier_code', $data) && $data['shipping_carrier_code'] !== null) {
            $object->setShippingCarrierCode($data['shipping_carrier_code']);
        } elseif (\array_key_exists('shipping_carrier_code', $data) && $data['shipping_carrier_code'] === null) {
            $object->setShippingCarrierCode(null);
        }
        if (\array_key_exists('shipping_method_code', $data) && $data['shipping_method_code'] !== null) {
            $object->setShippingMethodCode($data['shipping_method_code']);
        } elseif (\array_key_exists('shipping_method_code', $data) && $data['shipping_method_code'] === null) {
            $object->setShippingMethodCode(null);
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
            $data['billing_address'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getCustomAttributes()) {
            $values = array();
            foreach ($object->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom_attributes'] = $values;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['shipping_address'] = $this->normalizer->normalize($object->getShippingAddress(), 'json', $context);
        $data['shipping_carrier_code'] = $object->getShippingCarrierCode();
        $data['shipping_method_code'] = $object->getShippingMethodCode();
        return $data;
    }
}
