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

class SalesRuleDataCouponGenerationSpecInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataCouponGenerationSpecInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\SalesRuleDataCouponGenerationSpecInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\SalesRuleDataCouponGenerationSpecInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delimiter', $data) && $data['delimiter'] !== null) {
            $object->setDelimiter($data['delimiter']);
        } elseif (\array_key_exists('delimiter', $data) && $data['delimiter'] === null) {
            $object->setDelimiter(null);
        }
        if (\array_key_exists('delimiter_at_every', $data) && $data['delimiter_at_every'] !== null) {
            $object->setDelimiterAtEvery($data['delimiter_at_every']);
        } elseif (\array_key_exists('delimiter_at_every', $data) && $data['delimiter_at_every'] === null) {
            $object->setDelimiterAtEvery(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
        } elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
        } elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('rule_id', $data) && $data['rule_id'] !== null) {
            $object->setRuleId($data['rule_id']);
        } elseif (\array_key_exists('rule_id', $data) && $data['rule_id'] === null) {
            $object->setRuleId(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDelimiter()) {
            $data['delimiter'] = $object->getDelimiter();
        }
        if (null !== $object->getDelimiterAtEvery()) {
            $data['delimiter_at_every'] = $object->getDelimiterAtEvery();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['format'] = $object->getFormat();
        $data['length'] = $object->getLength();
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        $data['quantity'] = $object->getQuantity();
        $data['rule_id'] = $object->getRuleId();
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        return $data;
    }
}
