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
class SalesRuleDataDiscountDataInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesRuleDataDiscountDataInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesRuleDataDiscountDataInterface';
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
        $object = new \Kiboko\Magento\Model\SalesRuleDataDiscountDataInterface();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('base_amount', $data) && \is_int($data['base_amount'])) {
            $data['base_amount'] = (double) $data['base_amount'];
        }
        if (\array_key_exists('original_amount', $data) && \is_int($data['original_amount'])) {
            $data['original_amount'] = (double) $data['original_amount'];
        }
        if (\array_key_exists('base_original_amount', $data) && \is_int($data['base_original_amount'])) {
            $data['base_original_amount'] = (double) $data['base_original_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('base_amount', $data) && $data['base_amount'] !== null) {
            $object->setBaseAmount($data['base_amount']);
        }
        elseif (\array_key_exists('base_amount', $data) && $data['base_amount'] === null) {
            $object->setBaseAmount(null);
        }
        if (\array_key_exists('original_amount', $data) && $data['original_amount'] !== null) {
            $object->setOriginalAmount($data['original_amount']);
        }
        elseif (\array_key_exists('original_amount', $data) && $data['original_amount'] === null) {
            $object->setOriginalAmount(null);
        }
        if (\array_key_exists('base_original_amount', $data) && $data['base_original_amount'] !== null) {
            $object->setBaseOriginalAmount($data['base_original_amount']);
        }
        elseif (\array_key_exists('base_original_amount', $data) && $data['base_original_amount'] === null) {
            $object->setBaseOriginalAmount(null);
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
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesRuleDataDiscountDataInterface' => false);
    }
}