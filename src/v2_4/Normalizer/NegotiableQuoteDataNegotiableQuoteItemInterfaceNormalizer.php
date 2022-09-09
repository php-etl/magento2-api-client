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

class NegotiableQuoteDataNegotiableQuoteItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\NegotiableQuoteDataNegotiableQuoteItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\NegotiableQuoteDataNegotiableQuoteItemInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\NegotiableQuoteDataNegotiableQuoteItemInterface();
        if (\array_key_exists('original_discount_amount', $data) && \is_int($data['original_discount_amount'])) {
            $data['original_discount_amount'] = (float) $data['original_discount_amount'];
        }
        if (\array_key_exists('original_price', $data) && \is_int($data['original_price'])) {
            $data['original_price'] = (float) $data['original_price'];
        }
        if (\array_key_exists('original_tax_amount', $data) && \is_int($data['original_tax_amount'])) {
            $data['original_tax_amount'] = (float) $data['original_tax_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        } elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('original_discount_amount', $data) && $data['original_discount_amount'] !== null) {
            $object->setOriginalDiscountAmount($data['original_discount_amount']);
        } elseif (\array_key_exists('original_discount_amount', $data) && $data['original_discount_amount'] === null) {
            $object->setOriginalDiscountAmount(null);
        }
        if (\array_key_exists('original_price', $data) && $data['original_price'] !== null) {
            $object->setOriginalPrice($data['original_price']);
        } elseif (\array_key_exists('original_price', $data) && $data['original_price'] === null) {
            $object->setOriginalPrice(null);
        }
        if (\array_key_exists('original_tax_amount', $data) && $data['original_tax_amount'] !== null) {
            $object->setOriginalTaxAmount($data['original_tax_amount']);
        } elseif (\array_key_exists('original_tax_amount', $data) && $data['original_tax_amount'] === null) {
            $object->setOriginalTaxAmount(null);
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
        $data['item_id'] = $object->getItemId();
        $data['original_discount_amount'] = $object->getOriginalDiscountAmount();
        $data['original_price'] = $object->getOriginalPrice();
        $data['original_tax_amount'] = $object->getOriginalTaxAmount();
        return $data;
    }
}
