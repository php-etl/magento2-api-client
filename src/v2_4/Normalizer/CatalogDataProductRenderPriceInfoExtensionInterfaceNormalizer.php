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

class CatalogDataProductRenderPriceInfoExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderPriceInfoExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CatalogDataProductRenderPriceInfoExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('msrp', $data) && $data['msrp'] !== null) {
            $object->setMsrp($this->denormalizer->denormalize($data['msrp'], 'Kiboko\\Magento\\V2_4\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface', 'json', $context));
        } elseif (\array_key_exists('msrp', $data) && $data['msrp'] === null) {
            $object->setMsrp(null);
        }
        if (\array_key_exists('tax_adjustments', $data) && $data['tax_adjustments'] !== null) {
            $object->setTaxAdjustments($this->denormalizer->denormalize($data['tax_adjustments'], 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderPriceInfoInterface', 'json', $context));
        } elseif (\array_key_exists('tax_adjustments', $data) && $data['tax_adjustments'] === null) {
            $object->setTaxAdjustments(null);
        }
        if (\array_key_exists('weee_adjustment', $data) && $data['weee_adjustment'] !== null) {
            $object->setWeeeAdjustment($data['weee_adjustment']);
        } elseif (\array_key_exists('weee_adjustment', $data) && $data['weee_adjustment'] === null) {
            $object->setWeeeAdjustment(null);
        }
        if (\array_key_exists('weee_attributes', $data) && $data['weee_attributes'] !== null) {
            $values = array();
            foreach ($data['weee_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\WeeeDataProductRenderWeeeAdjustmentAttributeInterface', 'json', $context);
            }
            $object->setWeeeAttributes($values);
        } elseif (\array_key_exists('weee_attributes', $data) && $data['weee_attributes'] === null) {
            $object->setWeeeAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMsrp()) {
            $data['msrp'] = $this->normalizer->normalize($object->getMsrp(), 'json', $context);
        }
        if (null !== $object->getTaxAdjustments()) {
            $data['tax_adjustments'] = $this->normalizer->normalize($object->getTaxAdjustments(), 'json', $context);
        }
        if (null !== $object->getWeeeAdjustment()) {
            $data['weee_adjustment'] = $object->getWeeeAdjustment();
        }
        if (null !== $object->getWeeeAttributes()) {
            $values = array();
            foreach ($object->getWeeeAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['weee_attributes'] = $values;
        }
        return $data;
    }
}
