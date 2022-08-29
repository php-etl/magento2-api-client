<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataTotalInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataTotalInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataTotalInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\SalesDataTotalInterface();
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (float) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_canceled', $data) && \is_int($data['base_shipping_canceled'])) {
            $data['base_shipping_canceled'] = (float) $data['base_shipping_canceled'];
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && \is_int($data['base_shipping_discount_amount'])) {
            $data['base_shipping_discount_amount'] = (float) $data['base_shipping_discount_amount'];
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && \is_int($data['base_shipping_discount_tax_compensation_amnt'])) {
            $data['base_shipping_discount_tax_compensation_amnt'] = (float) $data['base_shipping_discount_tax_compensation_amnt'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (float) $data['base_shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && \is_int($data['base_shipping_invoiced'])) {
            $data['base_shipping_invoiced'] = (float) $data['base_shipping_invoiced'];
        }
        if (\array_key_exists('base_shipping_refunded', $data) && \is_int($data['base_shipping_refunded'])) {
            $data['base_shipping_refunded'] = (float) $data['base_shipping_refunded'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (float) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && \is_int($data['base_shipping_tax_refunded'])) {
            $data['base_shipping_tax_refunded'] = (float) $data['base_shipping_tax_refunded'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (float) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_canceled', $data) && \is_int($data['shipping_canceled'])) {
            $data['shipping_canceled'] = (float) $data['shipping_canceled'];
        }
        if (\array_key_exists('shipping_discount_amount', $data) && \is_int($data['shipping_discount_amount'])) {
            $data['shipping_discount_amount'] = (float) $data['shipping_discount_amount'];
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && \is_int($data['shipping_discount_tax_compensation_amount'])) {
            $data['shipping_discount_tax_compensation_amount'] = (float) $data['shipping_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (float) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_invoiced', $data) && \is_int($data['shipping_invoiced'])) {
            $data['shipping_invoiced'] = (float) $data['shipping_invoiced'];
        }
        if (\array_key_exists('shipping_refunded', $data) && \is_int($data['shipping_refunded'])) {
            $data['shipping_refunded'] = (float) $data['shipping_refunded'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (float) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && \is_int($data['shipping_tax_refunded'])) {
            $data['shipping_tax_refunded'] = (float) $data['shipping_tax_refunded'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_shipping_amount', $data)) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        if (\array_key_exists('base_shipping_canceled', $data)) {
            $object->setBaseShippingCanceled($data['base_shipping_canceled']);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data)) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data)) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data)) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        if (\array_key_exists('base_shipping_invoiced', $data)) {
            $object->setBaseShippingInvoiced($data['base_shipping_invoiced']);
        }
        if (\array_key_exists('base_shipping_refunded', $data)) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data)) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data)) {
            $object->setBaseShippingTaxRefunded($data['base_shipping_tax_refunded']);
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('shipping_canceled', $data)) {
            $object->setShippingCanceled($data['shipping_canceled']);
        }
        if (\array_key_exists('shipping_discount_amount', $data)) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data)) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('shipping_incl_tax', $data)) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        if (\array_key_exists('shipping_invoiced', $data)) {
            $object->setShippingInvoiced($data['shipping_invoiced']);
        }
        if (\array_key_exists('shipping_refunded', $data)) {
            $object->setShippingRefunded($data['shipping_refunded']);
        }
        if (\array_key_exists('shipping_tax_amount', $data)) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        if (\array_key_exists('shipping_tax_refunded', $data)) {
            $object->setShippingTaxRefunded($data['shipping_tax_refunded']);
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
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingCanceled()) {
            $data['base_shipping_canceled'] = $object->getBaseShippingCanceled();
        }
        if (null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
        }
        if (null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if (null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if (null !== $object->getBaseShippingInvoiced()) {
            $data['base_shipping_invoiced'] = $object->getBaseShippingInvoiced();
        }
        if (null !== $object->getBaseShippingRefunded()) {
            $data['base_shipping_refunded'] = $object->getBaseShippingRefunded();
        }
        if (null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if (null !== $object->getBaseShippingTaxRefunded()) {
            $data['base_shipping_tax_refunded'] = $object->getBaseShippingTaxRefunded();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingCanceled()) {
            $data['shipping_canceled'] = $object->getShippingCanceled();
        }
        if (null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if (null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if (null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if (null !== $object->getShippingInvoiced()) {
            $data['shipping_invoiced'] = $object->getShippingInvoiced();
        }
        if (null !== $object->getShippingRefunded()) {
            $data['shipping_refunded'] = $object->getShippingRefunded();
        }
        if (null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if (null !== $object->getShippingTaxRefunded()) {
            $data['shipping_tax_refunded'] = $object->getShippingTaxRefunded();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
