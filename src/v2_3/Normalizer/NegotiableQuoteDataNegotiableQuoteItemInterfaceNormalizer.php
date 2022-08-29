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
class NegotiableQuoteDataNegotiableQuoteItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataNegotiableQuoteItemInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataNegotiableQuoteItemInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\NegotiableQuoteDataNegotiableQuoteItemInterface();
        if (\array_key_exists('original_price', $data) && \is_int($data['original_price'])) {
            $data['original_price'] = (double) $data['original_price'];
        }
        if (\array_key_exists('original_tax_amount', $data) && \is_int($data['original_tax_amount'])) {
            $data['original_tax_amount'] = (double) $data['original_tax_amount'];
        }
        if (\array_key_exists('original_discount_amount', $data) && \is_int($data['original_discount_amount'])) {
            $data['original_discount_amount'] = (double) $data['original_discount_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('item_id', $data)) {
            $object->setItemId($data['item_id']);
        }
        if (\array_key_exists('original_price', $data)) {
            $object->setOriginalPrice($data['original_price']);
        }
        if (\array_key_exists('original_tax_amount', $data)) {
            $object->setOriginalTaxAmount($data['original_tax_amount']);
        }
        if (\array_key_exists('original_discount_amount', $data)) {
            $object->setOriginalDiscountAmount($data['original_discount_amount']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['item_id'] = $object->getItemId();
        $data['original_price'] = $object->getOriginalPrice();
        $data['original_tax_amount'] = $object->getOriginalTaxAmount();
        $data['original_discount_amount'] = $object->getOriginalDiscountAmount();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}