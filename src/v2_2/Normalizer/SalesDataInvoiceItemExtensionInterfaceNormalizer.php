<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataInvoiceItemExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataInvoiceItemExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataInvoiceItemExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\SalesDataInvoiceItemExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('invoice_text_codes', $data)) {
            $values = array();
            foreach ($data['invoice_text_codes'] as $value) {
                $values[] = $value;
            }
            $object->setInvoiceTextCodes($values);
        }
        if (\array_key_exists('tax_codes', $data)) {
            $values_1 = array();
            foreach ($data['tax_codes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTaxCodes($values_1);
        }
        if (\array_key_exists('vertex_tax_codes', $data)) {
            $values_2 = array();
            foreach ($data['vertex_tax_codes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setVertexTaxCodes($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
