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

class V1CartsMineCollectTotalsPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\V1CartsMineCollectTotalsPutBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\V1CartsMineCollectTotalsPutBody';
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
        $object = new \Kiboko\Magento\V2_1\Model\V1CartsMineCollectTotalsPutBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalData', $data) && $data['additionalData'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additionalData'], 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataTotalsAdditionalDataInterface', 'json', $context));
        } elseif (\array_key_exists('additionalData', $data) && $data['additionalData'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] !== null) {
            $object->setPaymentMethod($this->denormalizer->denormalize($data['paymentMethod'], 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataPaymentInterface', 'json', $context));
        } elseif (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] === null) {
            $object->setPaymentMethod(null);
        }
        if (\array_key_exists('shippingCarrierCode', $data) && $data['shippingCarrierCode'] !== null) {
            $object->setShippingCarrierCode($data['shippingCarrierCode']);
        } elseif (\array_key_exists('shippingCarrierCode', $data) && $data['shippingCarrierCode'] === null) {
            $object->setShippingCarrierCode(null);
        }
        if (\array_key_exists('shippingMethodCode', $data) && $data['shippingMethodCode'] !== null) {
            $object->setShippingMethodCode($data['shippingMethodCode']);
        } elseif (\array_key_exists('shippingMethodCode', $data) && $data['shippingMethodCode'] === null) {
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
        if (null !== $object->getAdditionalData()) {
            $data['additionalData'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        $data['paymentMethod'] = $this->normalizer->normalize($object->getPaymentMethod(), 'json', $context);
        if (null !== $object->getShippingCarrierCode()) {
            $data['shippingCarrierCode'] = $object->getShippingCarrierCode();
        }
        if (null !== $object->getShippingMethodCode()) {
            $data['shippingMethodCode'] = $object->getShippingMethodCode();
        }
        return $data;
    }
}
