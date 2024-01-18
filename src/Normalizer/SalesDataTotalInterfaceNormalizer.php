<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataTotalInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataTotalInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataTotalInterface();
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (double) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_canceled', $data) && \is_int($data['base_shipping_canceled'])) {
            $data['base_shipping_canceled'] = (double) $data['base_shipping_canceled'];
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && \is_int($data['base_shipping_discount_amount'])) {
            $data['base_shipping_discount_amount'] = (double) $data['base_shipping_discount_amount'];
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && \is_int($data['base_shipping_discount_tax_compensation_amnt'])) {
            $data['base_shipping_discount_tax_compensation_amnt'] = (double) $data['base_shipping_discount_tax_compensation_amnt'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (double) $data['base_shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && \is_int($data['base_shipping_invoiced'])) {
            $data['base_shipping_invoiced'] = (double) $data['base_shipping_invoiced'];
        }
        if (\array_key_exists('base_shipping_refunded', $data) && \is_int($data['base_shipping_refunded'])) {
            $data['base_shipping_refunded'] = (double) $data['base_shipping_refunded'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (double) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && \is_int($data['base_shipping_tax_refunded'])) {
            $data['base_shipping_tax_refunded'] = (double) $data['base_shipping_tax_refunded'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (double) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_canceled', $data) && \is_int($data['shipping_canceled'])) {
            $data['shipping_canceled'] = (double) $data['shipping_canceled'];
        }
        if (\array_key_exists('shipping_discount_amount', $data) && \is_int($data['shipping_discount_amount'])) {
            $data['shipping_discount_amount'] = (double) $data['shipping_discount_amount'];
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && \is_int($data['shipping_discount_tax_compensation_amount'])) {
            $data['shipping_discount_tax_compensation_amount'] = (double) $data['shipping_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (double) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_invoiced', $data) && \is_int($data['shipping_invoiced'])) {
            $data['shipping_invoiced'] = (double) $data['shipping_invoiced'];
        }
        if (\array_key_exists('shipping_refunded', $data) && \is_int($data['shipping_refunded'])) {
            $data['shipping_refunded'] = (double) $data['shipping_refunded'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (double) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && \is_int($data['shipping_tax_refunded'])) {
            $data['shipping_tax_refunded'] = (double) $data['shipping_tax_refunded'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] !== null) {
            $object->setBaseShippingCanceled($data['base_shipping_canceled']);
        }
        elseif (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] === null) {
            $object->setBaseShippingCanceled(null);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] !== null) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        }
        elseif (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] === null) {
            $object->setBaseShippingDiscountAmount(null);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] !== null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        }
        elseif (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] === null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt(null);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] !== null) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        elseif (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] === null) {
            $object->setBaseShippingInclTax(null);
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] !== null) {
            $object->setBaseShippingInvoiced($data['base_shipping_invoiced']);
        }
        elseif (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] === null) {
            $object->setBaseShippingInvoiced(null);
        }
        if (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] !== null) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        }
        elseif (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] === null) {
            $object->setBaseShippingRefunded(null);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] !== null) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        elseif (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] === null) {
            $object->setBaseShippingTaxAmount(null);
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] !== null) {
            $object->setBaseShippingTaxRefunded($data['base_shipping_tax_refunded']);
        }
        elseif (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] === null) {
            $object->setBaseShippingTaxRefunded(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] !== null) {
            $object->setShippingCanceled($data['shipping_canceled']);
        }
        elseif (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] === null) {
            $object->setShippingCanceled(null);
        }
        if (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] !== null) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        }
        elseif (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] === null) {
            $object->setShippingDiscountAmount(null);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] !== null) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] === null) {
            $object->setShippingDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] !== null) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        elseif (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] === null) {
            $object->setShippingInclTax(null);
        }
        if (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] !== null) {
            $object->setShippingInvoiced($data['shipping_invoiced']);
        }
        elseif (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] === null) {
            $object->setShippingInvoiced(null);
        }
        if (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] !== null) {
            $object->setShippingRefunded($data['shipping_refunded']);
        }
        elseif (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] === null) {
            $object->setShippingRefunded(null);
        }
        if (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] !== null) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        elseif (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] === null) {
            $object->setShippingTaxAmount(null);
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] !== null) {
            $object->setShippingTaxRefunded($data['shipping_tax_refunded']);
        }
        elseif (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] === null) {
            $object->setShippingTaxRefunded(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('baseShippingAmount') && null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if ($object->isInitialized('baseShippingCanceled') && null !== $object->getBaseShippingCanceled()) {
            $data['base_shipping_canceled'] = $object->getBaseShippingCanceled();
        }
        if ($object->isInitialized('baseShippingDiscountAmount') && null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
        }
        if ($object->isInitialized('baseShippingDiscountTaxCompensationAmnt') && null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if ($object->isInitialized('baseShippingInclTax') && null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if ($object->isInitialized('baseShippingInvoiced') && null !== $object->getBaseShippingInvoiced()) {
            $data['base_shipping_invoiced'] = $object->getBaseShippingInvoiced();
        }
        if ($object->isInitialized('baseShippingRefunded') && null !== $object->getBaseShippingRefunded()) {
            $data['base_shipping_refunded'] = $object->getBaseShippingRefunded();
        }
        if ($object->isInitialized('baseShippingTaxAmount') && null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if ($object->isInitialized('baseShippingTaxRefunded') && null !== $object->getBaseShippingTaxRefunded()) {
            $data['base_shipping_tax_refunded'] = $object->getBaseShippingTaxRefunded();
        }
        if ($object->isInitialized('shippingAmount') && null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if ($object->isInitialized('shippingCanceled') && null !== $object->getShippingCanceled()) {
            $data['shipping_canceled'] = $object->getShippingCanceled();
        }
        if ($object->isInitialized('shippingDiscountAmount') && null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if ($object->isInitialized('shippingDiscountTaxCompensationAmount') && null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if ($object->isInitialized('shippingInclTax') && null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if ($object->isInitialized('shippingInvoiced') && null !== $object->getShippingInvoiced()) {
            $data['shipping_invoiced'] = $object->getShippingInvoiced();
        }
        if ($object->isInitialized('shippingRefunded') && null !== $object->getShippingRefunded()) {
            $data['shipping_refunded'] = $object->getShippingRefunded();
        }
        if ($object->isInitialized('shippingTaxAmount') && null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if ($object->isInitialized('shippingTaxRefunded') && null !== $object->getShippingTaxRefunded()) {
            $data['shipping_tax_refunded'] = $object->getShippingTaxRefunded();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataTotalInterface' => false);
    }
}