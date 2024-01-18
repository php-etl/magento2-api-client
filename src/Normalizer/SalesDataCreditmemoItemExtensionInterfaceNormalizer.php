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
class SalesDataCreditmemoItemExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoItemExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoItemExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataCreditmemoItemExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vertex_tax_codes', $data) && $data['vertex_tax_codes'] !== null) {
            $values = array();
            foreach ($data['vertex_tax_codes'] as $value) {
                $values[] = $value;
            }
            $object->setVertexTaxCodes($values);
        }
        elseif (\array_key_exists('vertex_tax_codes', $data) && $data['vertex_tax_codes'] === null) {
            $object->setVertexTaxCodes(null);
        }
        if (\array_key_exists('invoice_text_codes', $data) && $data['invoice_text_codes'] !== null) {
            $values_1 = array();
            foreach ($data['invoice_text_codes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInvoiceTextCodes($values_1);
        }
        elseif (\array_key_exists('invoice_text_codes', $data) && $data['invoice_text_codes'] === null) {
            $object->setInvoiceTextCodes(null);
        }
        if (\array_key_exists('tax_codes', $data) && $data['tax_codes'] !== null) {
            $values_2 = array();
            foreach ($data['tax_codes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTaxCodes($values_2);
        }
        elseif (\array_key_exists('tax_codes', $data) && $data['tax_codes'] === null) {
            $object->setTaxCodes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('vertexTaxCodes') && null !== $object->getVertexTaxCodes()) {
            $values = array();
            foreach ($object->getVertexTaxCodes() as $value) {
                $values[] = $value;
            }
            $data['vertex_tax_codes'] = $values;
        }
        if ($object->isInitialized('invoiceTextCodes') && null !== $object->getInvoiceTextCodes()) {
            $values_1 = array();
            foreach ($object->getInvoiceTextCodes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['invoice_text_codes'] = $values_1;
        }
        if ($object->isInitialized('taxCodes') && null !== $object->getTaxCodes()) {
            $values_2 = array();
            foreach ($object->getTaxCodes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['tax_codes'] = $values_2;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataCreditmemoItemExtensionInterface' => false);
    }
}