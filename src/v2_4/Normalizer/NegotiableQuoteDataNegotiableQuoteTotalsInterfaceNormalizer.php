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

class NegotiableQuoteDataNegotiableQuoteTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\NegotiableQuoteDataNegotiableQuoteTotalsInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\NegotiableQuoteDataNegotiableQuoteTotalsInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\NegotiableQuoteDataNegotiableQuoteTotalsInterface();
        if (\array_key_exists('base_cost_total', $data) && \is_int($data['base_cost_total'])) {
            $data['base_cost_total'] = (float) $data['base_cost_total'];
        }
        if (\array_key_exists('base_original_price_incl_tax', $data) && \is_int($data['base_original_price_incl_tax'])) {
            $data['base_original_price_incl_tax'] = (float) $data['base_original_price_incl_tax'];
        }
        if (\array_key_exists('base_original_tax', $data) && \is_int($data['base_original_tax'])) {
            $data['base_original_tax'] = (float) $data['base_original_tax'];
        }
        if (\array_key_exists('base_original_total', $data) && \is_int($data['base_original_total'])) {
            $data['base_original_total'] = (float) $data['base_original_total'];
        }
        if (\array_key_exists('base_to_quote_rate', $data) && \is_int($data['base_to_quote_rate'])) {
            $data['base_to_quote_rate'] = (float) $data['base_to_quote_rate'];
        }
        if (\array_key_exists('cost_total', $data) && \is_int($data['cost_total'])) {
            $data['cost_total'] = (float) $data['cost_total'];
        }
        if (\array_key_exists('negotiated_price_value', $data) && \is_int($data['negotiated_price_value'])) {
            $data['negotiated_price_value'] = (float) $data['negotiated_price_value'];
        }
        if (\array_key_exists('original_price_incl_tax', $data) && \is_int($data['original_price_incl_tax'])) {
            $data['original_price_incl_tax'] = (float) $data['original_price_incl_tax'];
        }
        if (\array_key_exists('original_tax', $data) && \is_int($data['original_tax'])) {
            $data['original_tax'] = (float) $data['original_tax'];
        }
        if (\array_key_exists('original_total', $data) && \is_int($data['original_total'])) {
            $data['original_total'] = (float) $data['original_total'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_cost_total', $data)) {
            $object->setBaseCostTotal($data['base_cost_total']);
        }
        if (\array_key_exists('base_original_price_incl_tax', $data)) {
            $object->setBaseOriginalPriceInclTax($data['base_original_price_incl_tax']);
        }
        if (\array_key_exists('base_original_tax', $data)) {
            $object->setBaseOriginalTax($data['base_original_tax']);
        }
        if (\array_key_exists('base_original_total', $data)) {
            $object->setBaseOriginalTotal($data['base_original_total']);
        }
        if (\array_key_exists('base_to_quote_rate', $data)) {
            $object->setBaseToQuoteRate($data['base_to_quote_rate']);
        }
        if (\array_key_exists('cost_total', $data)) {
            $object->setCostTotal($data['cost_total']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('customer_group', $data)) {
            $object->setCustomerGroup($data['customer_group']);
        }
        if (\array_key_exists('items_count', $data)) {
            $object->setItemsCount($data['items_count']);
        }
        if (\array_key_exists('negotiated_price_type', $data)) {
            $object->setNegotiatedPriceType($data['negotiated_price_type']);
        }
        if (\array_key_exists('negotiated_price_value', $data)) {
            $object->setNegotiatedPriceValue($data['negotiated_price_value']);
        }
        if (\array_key_exists('original_price_incl_tax', $data)) {
            $object->setOriginalPriceInclTax($data['original_price_incl_tax']);
        }
        if (\array_key_exists('original_tax', $data)) {
            $object->setOriginalTax($data['original_tax']);
        }
        if (\array_key_exists('original_total', $data)) {
            $object->setOriginalTotal($data['original_total']);
        }
        if (\array_key_exists('quote_status', $data)) {
            $object->setQuoteStatus($data['quote_status']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['base_cost_total'] = $object->getBaseCostTotal();
        $data['base_original_price_incl_tax'] = $object->getBaseOriginalPriceInclTax();
        $data['base_original_tax'] = $object->getBaseOriginalTax();
        $data['base_original_total'] = $object->getBaseOriginalTotal();
        $data['base_to_quote_rate'] = $object->getBaseToQuoteRate();
        $data['cost_total'] = $object->getCostTotal();
        $data['created_at'] = $object->getCreatedAt();
        $data['customer_group'] = $object->getCustomerGroup();
        $data['items_count'] = $object->getItemsCount();
        $data['negotiated_price_type'] = $object->getNegotiatedPriceType();
        $data['negotiated_price_value'] = $object->getNegotiatedPriceValue();
        $data['original_price_incl_tax'] = $object->getOriginalPriceInclTax();
        $data['original_tax'] = $object->getOriginalTax();
        $data['original_total'] = $object->getOriginalTotal();
        $data['quote_status'] = $object->getQuoteStatus();
        $data['updated_at'] = $object->getUpdatedAt();
        return $data;
    }
}
