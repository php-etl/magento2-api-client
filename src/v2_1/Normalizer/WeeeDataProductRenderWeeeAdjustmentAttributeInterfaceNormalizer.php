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

class WeeeDataProductRenderWeeeAdjustmentAttributeInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\WeeeDataProductRenderWeeeAdjustmentAttributeInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\WeeeDataProductRenderWeeeAdjustmentAttributeInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\WeeeDataProductRenderWeeeAdjustmentAttributeInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amount_excl_tax', $data) && $data['amount_excl_tax'] !== null) {
            $object->setAmountExclTax($data['amount_excl_tax']);
        } elseif (\array_key_exists('amount_excl_tax', $data) && $data['amount_excl_tax'] === null) {
            $object->setAmountExclTax(null);
        }
        if (\array_key_exists('attribute_code', $data) && $data['attribute_code'] !== null) {
            $object->setAttributeCode($data['attribute_code']);
        } elseif (\array_key_exists('attribute_code', $data) && $data['attribute_code'] === null) {
            $object->setAttributeCode(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        } elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('tax_amount_incl_tax', $data) && $data['tax_amount_incl_tax'] !== null) {
            $object->setTaxAmountInclTax($data['tax_amount_incl_tax']);
        } elseif (\array_key_exists('tax_amount_incl_tax', $data) && $data['tax_amount_incl_tax'] === null) {
            $object->setTaxAmountInclTax(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['amount'] = $object->getAmount();
        $data['amount_excl_tax'] = $object->getAmountExclTax();
        $data['attribute_code'] = $object->getAttributeCode();
        $data['extension_attributes'] = $object->getExtensionAttributes();
        $data['tax_amount'] = $object->getTaxAmount();
        $data['tax_amount_incl_tax'] = $object->getTaxAmountInclTax();
        return $data;
    }
}
