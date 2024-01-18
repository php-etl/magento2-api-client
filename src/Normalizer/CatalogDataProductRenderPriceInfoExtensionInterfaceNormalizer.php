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
class CatalogDataProductRenderPriceInfoExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductRenderPriceInfoExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('msrp', $data) && $data['msrp'] !== null) {
            $object->setMsrp($this->denormalizer->denormalize($data['msrp'], 'Kiboko\\Magento\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface', 'json', $context));
        }
        elseif (\array_key_exists('msrp', $data) && $data['msrp'] === null) {
            $object->setMsrp(null);
        }
        if (\array_key_exists('tax_adjustments', $data) && $data['tax_adjustments'] !== null) {
            $object->setTaxAdjustments($this->denormalizer->denormalize($data['tax_adjustments'], 'Kiboko\\Magento\\Model\\CatalogDataProductRenderPriceInfoInterface', 'json', $context));
        }
        elseif (\array_key_exists('tax_adjustments', $data) && $data['tax_adjustments'] === null) {
            $object->setTaxAdjustments(null);
        }
        if (\array_key_exists('weee_attributes', $data) && $data['weee_attributes'] !== null) {
            $values = array();
            foreach ($data['weee_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\WeeeDataProductRenderWeeeAdjustmentAttributeInterface', 'json', $context);
            }
            $object->setWeeeAttributes($values);
        }
        elseif (\array_key_exists('weee_attributes', $data) && $data['weee_attributes'] === null) {
            $object->setWeeeAttributes(null);
        }
        if (\array_key_exists('weee_adjustment', $data) && $data['weee_adjustment'] !== null) {
            $object->setWeeeAdjustment($data['weee_adjustment']);
        }
        elseif (\array_key_exists('weee_adjustment', $data) && $data['weee_adjustment'] === null) {
            $object->setWeeeAdjustment(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('msrp') && null !== $object->getMsrp()) {
            $data['msrp'] = $this->normalizer->normalize($object->getMsrp(), 'json', $context);
        }
        if ($object->isInitialized('taxAdjustments') && null !== $object->getTaxAdjustments()) {
            $data['tax_adjustments'] = $this->normalizer->normalize($object->getTaxAdjustments(), 'json', $context);
        }
        if ($object->isInitialized('weeeAttributes') && null !== $object->getWeeeAttributes()) {
            $values = array();
            foreach ($object->getWeeeAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['weee_attributes'] = $values;
        }
        if ($object->isInitialized('weeeAdjustment') && null !== $object->getWeeeAdjustment()) {
            $data['weee_adjustment'] = $object->getWeeeAdjustment();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface' => false);
    }
}