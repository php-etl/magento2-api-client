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

class SalesDataOrderItemExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderItemExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderItemExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataOrderItemExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gift_message', $data) && $data['gift_message'] !== null) {
            $object->setGiftMessage($this->denormalizer->denormalize($data['gift_message'], 'Kiboko\\Magento\\V2_4\\Model\\GiftMessageDataMessageInterface', 'json', $context));
        } elseif (\array_key_exists('gift_message', $data) && $data['gift_message'] === null) {
            $object->setGiftMessage(null);
        }
        if (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] !== null) {
            $object->setGwBasePrice($data['gw_base_price']);
        } elseif (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] === null) {
            $object->setGwBasePrice(null);
        }
        if (\array_key_exists('gw_base_price_invoiced', $data) && $data['gw_base_price_invoiced'] !== null) {
            $object->setGwBasePriceInvoiced($data['gw_base_price_invoiced']);
        } elseif (\array_key_exists('gw_base_price_invoiced', $data) && $data['gw_base_price_invoiced'] === null) {
            $object->setGwBasePriceInvoiced(null);
        }
        if (\array_key_exists('gw_base_price_refunded', $data) && $data['gw_base_price_refunded'] !== null) {
            $object->setGwBasePriceRefunded($data['gw_base_price_refunded']);
        } elseif (\array_key_exists('gw_base_price_refunded', $data) && $data['gw_base_price_refunded'] === null) {
            $object->setGwBasePriceRefunded(null);
        }
        if (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] !== null) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        } elseif (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] === null) {
            $object->setGwBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_base_tax_amount_invoiced', $data) && $data['gw_base_tax_amount_invoiced'] !== null) {
            $object->setGwBaseTaxAmountInvoiced($data['gw_base_tax_amount_invoiced']);
        } elseif (\array_key_exists('gw_base_tax_amount_invoiced', $data) && $data['gw_base_tax_amount_invoiced'] === null) {
            $object->setGwBaseTaxAmountInvoiced(null);
        }
        if (\array_key_exists('gw_base_tax_amount_refunded', $data) && $data['gw_base_tax_amount_refunded'] !== null) {
            $object->setGwBaseTaxAmountRefunded($data['gw_base_tax_amount_refunded']);
        } elseif (\array_key_exists('gw_base_tax_amount_refunded', $data) && $data['gw_base_tax_amount_refunded'] === null) {
            $object->setGwBaseTaxAmountRefunded(null);
        }
        if (\array_key_exists('gw_id', $data) && $data['gw_id'] !== null) {
            $object->setGwId($data['gw_id']);
        } elseif (\array_key_exists('gw_id', $data) && $data['gw_id'] === null) {
            $object->setGwId(null);
        }
        if (\array_key_exists('gw_price', $data) && $data['gw_price'] !== null) {
            $object->setGwPrice($data['gw_price']);
        } elseif (\array_key_exists('gw_price', $data) && $data['gw_price'] === null) {
            $object->setGwPrice(null);
        }
        if (\array_key_exists('gw_price_invoiced', $data) && $data['gw_price_invoiced'] !== null) {
            $object->setGwPriceInvoiced($data['gw_price_invoiced']);
        } elseif (\array_key_exists('gw_price_invoiced', $data) && $data['gw_price_invoiced'] === null) {
            $object->setGwPriceInvoiced(null);
        }
        if (\array_key_exists('gw_price_refunded', $data) && $data['gw_price_refunded'] !== null) {
            $object->setGwPriceRefunded($data['gw_price_refunded']);
        } elseif (\array_key_exists('gw_price_refunded', $data) && $data['gw_price_refunded'] === null) {
            $object->setGwPriceRefunded(null);
        }
        if (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] !== null) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        } elseif (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] === null) {
            $object->setGwTaxAmount(null);
        }
        if (\array_key_exists('gw_tax_amount_invoiced', $data) && $data['gw_tax_amount_invoiced'] !== null) {
            $object->setGwTaxAmountInvoiced($data['gw_tax_amount_invoiced']);
        } elseif (\array_key_exists('gw_tax_amount_invoiced', $data) && $data['gw_tax_amount_invoiced'] === null) {
            $object->setGwTaxAmountInvoiced(null);
        }
        if (\array_key_exists('gw_tax_amount_refunded', $data) && $data['gw_tax_amount_refunded'] !== null) {
            $object->setGwTaxAmountRefunded($data['gw_tax_amount_refunded']);
        } elseif (\array_key_exists('gw_tax_amount_refunded', $data) && $data['gw_tax_amount_refunded'] === null) {
            $object->setGwTaxAmountRefunded(null);
        }
        if (\array_key_exists('invoice_text_codes', $data) && $data['invoice_text_codes'] !== null) {
            $values = array();
            foreach ($data['invoice_text_codes'] as $value) {
                $values[] = $value;
            }
            $object->setInvoiceTextCodes($values);
        } elseif (\array_key_exists('invoice_text_codes', $data) && $data['invoice_text_codes'] === null) {
            $object->setInvoiceTextCodes(null);
        }
        if (\array_key_exists('tax_codes', $data) && $data['tax_codes'] !== null) {
            $values_1 = array();
            foreach ($data['tax_codes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTaxCodes($values_1);
        } elseif (\array_key_exists('tax_codes', $data) && $data['tax_codes'] === null) {
            $object->setTaxCodes(null);
        }
        if (\array_key_exists('vertex_tax_codes', $data) && $data['vertex_tax_codes'] !== null) {
            $values_2 = array();
            foreach ($data['vertex_tax_codes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setVertexTaxCodes($values_2);
        } elseif (\array_key_exists('vertex_tax_codes', $data) && $data['vertex_tax_codes'] === null) {
            $object->setVertexTaxCodes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGiftMessage()) {
            $data['gift_message'] = $this->normalizer->normalize($object->getGiftMessage(), 'json', $context);
        }
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwBasePriceInvoiced()) {
            $data['gw_base_price_invoiced'] = $object->getGwBasePriceInvoiced();
        }
        if (null !== $object->getGwBasePriceRefunded()) {
            $data['gw_base_price_refunded'] = $object->getGwBasePriceRefunded();
        }
        if (null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if (null !== $object->getGwBaseTaxAmountInvoiced()) {
            $data['gw_base_tax_amount_invoiced'] = $object->getGwBaseTaxAmountInvoiced();
        }
        if (null !== $object->getGwBaseTaxAmountRefunded()) {
            $data['gw_base_tax_amount_refunded'] = $object->getGwBaseTaxAmountRefunded();
        }
        if (null !== $object->getGwId()) {
            $data['gw_id'] = $object->getGwId();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwPriceInvoiced()) {
            $data['gw_price_invoiced'] = $object->getGwPriceInvoiced();
        }
        if (null !== $object->getGwPriceRefunded()) {
            $data['gw_price_refunded'] = $object->getGwPriceRefunded();
        }
        if (null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if (null !== $object->getGwTaxAmountInvoiced()) {
            $data['gw_tax_amount_invoiced'] = $object->getGwTaxAmountInvoiced();
        }
        if (null !== $object->getGwTaxAmountRefunded()) {
            $data['gw_tax_amount_refunded'] = $object->getGwTaxAmountRefunded();
        }
        if (null !== $object->getInvoiceTextCodes()) {
            $values = array();
            foreach ($object->getInvoiceTextCodes() as $value) {
                $values[] = $value;
            }
            $data['invoice_text_codes'] = $values;
        }
        if (null !== $object->getTaxCodes()) {
            $values_1 = array();
            foreach ($object->getTaxCodes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tax_codes'] = $values_1;
        }
        if (null !== $object->getVertexTaxCodes()) {
            $values_2 = array();
            foreach ($object->getVertexTaxCodes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['vertex_tax_codes'] = $values_2;
        }
        return $data;
    }
}
