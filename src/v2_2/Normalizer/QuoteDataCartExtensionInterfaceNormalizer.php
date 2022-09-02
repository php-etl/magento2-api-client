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

class QuoteDataCartExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataCartExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataCartExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\QuoteDataCartExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amazon_order_reference_id', $data)) {
            $object->setAmazonOrderReferenceId($data['amazon_order_reference_id']);
        }
        if (\array_key_exists('negotiable_quote', $data)) {
            $object->setNegotiableQuote($this->denormalizer->denormalize($data['negotiable_quote'], 'Kiboko\\Magento\\V2_2\\Model\\NegotiableQuoteDataNegotiableQuoteInterface', 'json', $context));
        }
        if (\array_key_exists('shipping_assignments', $data)) {
            $values = array();
            foreach ($data['shipping_assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataShippingAssignmentInterface', 'json', $context);
            }
            $object->setShippingAssignments($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAmazonOrderReferenceId()) {
            $data['amazon_order_reference_id'] = $object->getAmazonOrderReferenceId();
        }
        if (null !== $object->getNegotiableQuote()) {
            $data['negotiable_quote'] = $this->normalizer->normalize($object->getNegotiableQuote(), 'json', $context);
        }
        if (null !== $object->getShippingAssignments()) {
            $values = array();
            foreach ($object->getShippingAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipping_assignments'] = $values;
        }
        return $data;
    }
}
