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

class SalesRuleDataDiscountDataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\SalesRuleDataDiscountDataInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\SalesRuleDataDiscountDataInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\SalesRuleDataDiscountDataInterface();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('base_amount', $data) && \is_int($data['base_amount'])) {
            $data['base_amount'] = (float) $data['base_amount'];
        }
        if (\array_key_exists('original_amount', $data) && \is_int($data['original_amount'])) {
            $data['original_amount'] = (float) $data['original_amount'];
        }
        if (\array_key_exists('base_original_amount', $data) && \is_int($data['base_original_amount'])) {
            $data['base_original_amount'] = (float) $data['base_original_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('base_amount', $data)) {
            $object->setBaseAmount($data['base_amount']);
        }
        if (\array_key_exists('original_amount', $data)) {
            $object->setOriginalAmount($data['original_amount']);
        }
        if (\array_key_exists('base_original_amount', $data)) {
            $object->setBaseOriginalAmount($data['base_original_amount']);
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
        $data['base_amount'] = $object->getBaseAmount();
        $data['original_amount'] = $object->getOriginalAmount();
        $data['base_original_amount'] = $object->getBaseOriginalAmount();
        return $data;
    }
}