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

class CheckoutDataPaymentDetailsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CheckoutDataPaymentDetailsInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CheckoutDataPaymentDetailsInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CheckoutDataPaymentDetailsInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('payment_methods', $data) && $data['payment_methods'] !== null) {
            $values = array();
            foreach ($data['payment_methods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataPaymentMethodInterface', 'json', $context);
            }
            $object->setPaymentMethods($values);
        } elseif (\array_key_exists('payment_methods', $data) && $data['payment_methods'] === null) {
            $object->setPaymentMethods(null);
        }
        if (\array_key_exists('totals', $data) && $data['totals'] !== null) {
            $object->setTotals($this->denormalizer->denormalize($data['totals'], 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalsInterface', 'json', $context));
        } elseif (\array_key_exists('totals', $data) && $data['totals'] === null) {
            $object->setTotals(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $values = array();
        foreach ($object->getPaymentMethods() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['payment_methods'] = $values;
        $data['totals'] = $this->normalizer->normalize($object->getTotals(), 'json', $context);
        return $data;
    }
}
