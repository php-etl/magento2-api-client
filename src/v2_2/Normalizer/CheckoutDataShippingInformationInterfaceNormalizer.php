<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\CheckoutDataShippingInformationInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\CheckoutDataShippingInformationInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\CheckoutDataShippingInformationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataAddressInterface', 'json', $context));
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values = array();
            foreach ($data['custom_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('shipping_address', $data)) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataAddressInterface', 'json', $context));
        }
        if (\array_key_exists('shipping_carrier_code', $data)) {
            $object->setShippingCarrierCode($data['shipping_carrier_code']);
        }
        if (\array_key_exists('shipping_method_code', $data)) {
            $object->setShippingMethodCode($data['shipping_method_code']);
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
