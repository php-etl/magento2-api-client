<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesRuleDataCouponGenerationSpecInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\SalesRuleDataCouponGenerationSpecInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\SalesRuleDataCouponGenerationSpecInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\SalesRuleDataCouponGenerationSpecInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rule_id', $data)) {
            $object->setRuleId($data['rule_id']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
        }
        if (\array_key_exists('prefix', $data)) {
            $object->setPrefix($data['prefix']);
        }
        if (\array_key_exists('suffix', $data)) {
            $object->setSuffix($data['suffix']);
        }
        if (\array_key_exists('delimiter_at_every', $data)) {
            $object->setDelimiterAtEvery($data['delimiter_at_every']);
        }
        if (\array_key_exists('delimiter', $data)) {
            $object->setDelimiter($data['delimiter']);
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
        $data['rule_id'] = $object->getRuleId();
        $data['format'] = $object->getFormat();
        $data['quantity'] = $object->getQuantity();
        $data['length'] = $object->getLength();
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        if (null !== $object->getDelimiterAtEvery()) {
            $data['delimiter_at_every'] = $object->getDelimiterAtEvery();
        }
        if (null !== $object->getDelimiter()) {
            $data['delimiter'] = $object->getDelimiter();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}