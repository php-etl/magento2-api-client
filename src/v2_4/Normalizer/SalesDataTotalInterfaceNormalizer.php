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

class SalesDataTotalInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataTotalInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataTotalInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataTotalInterface();
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
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        } elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] !== null) {
            $object->setBaseShippingCanceled($data['base_shipping_canceled']);
        } elseif (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] === null) {
            $object->setBaseShippingCanceled(null);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] !== null) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        } elseif (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] === null) {
            $object->setBaseShippingDiscountAmount(null);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] !== null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        } elseif (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] === null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt(null);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] !== null) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        } elseif (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] === null) {
            $object->setBaseShippingInclTax(null);
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] !== null) {
            $object->setBaseShippingInvoiced($data['base_shipping_invoiced']);
        } elseif (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] === null) {
            $object->setBaseShippingInvoiced(null);
        }
        if (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] !== null) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        } elseif (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] === null) {
            $object->setBaseShippingRefunded(null);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] !== null) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        } elseif (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] === null) {
            $object->setBaseShippingTaxAmount(null);
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] !== null) {
            $object->setBaseShippingTaxRefunded($data['base_shipping_tax_refunded']);
        } elseif (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] === null) {
            $object->setBaseShippingTaxRefunded(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        } elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] !== null) {
            $object->setShippingCanceled($data['shipping_canceled']);
        } elseif (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] === null) {
            $object->setShippingCanceled(null);
        }
        if (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] !== null) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        } elseif (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] === null) {
            $object->setShippingDiscountAmount(null);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] !== null) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        } elseif (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] === null) {
            $object->setShippingDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] !== null) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        } elseif (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] === null) {
            $object->setShippingInclTax(null);
        }
        if (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] !== null) {
            $object->setShippingInvoiced($data['shipping_invoiced']);
        } elseif (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] === null) {
            $object->setShippingInvoiced(null);
        }
        if (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] !== null) {
            $object->setShippingRefunded($data['shipping_refunded']);
        } elseif (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] === null) {
            $object->setShippingRefunded(null);
        }
        if (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] !== null) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        } elseif (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] === null) {
            $object->setShippingTaxAmount(null);
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] !== null) {
            $object->setShippingTaxRefunded($data['shipping_tax_refunded']);
        } elseif (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] === null) {
            $object->setShippingTaxRefunded(null);
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
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
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
        return $data;
    }
}
