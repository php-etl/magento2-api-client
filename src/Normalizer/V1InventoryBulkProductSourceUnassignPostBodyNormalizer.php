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
class V1InventoryBulkProductSourceUnassignPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceUnassignPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceUnassignPostBody';
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
        $object = new \Kiboko\Magento\Model\V1InventoryBulkProductSourceUnassignPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('skus', $data) && $data['skus'] !== null) {
            $values = array();
            foreach ($data['skus'] as $value) {
                $values[] = $value;
            }
            $object->setSkus($values);
        }
        elseif (\array_key_exists('skus', $data) && $data['skus'] === null) {
            $object->setSkus(null);
        }
        if (\array_key_exists('sourceCodes', $data) && $data['sourceCodes'] !== null) {
            $values_1 = array();
            foreach ($data['sourceCodes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSourceCodes($values_1);
        }
        elseif (\array_key_exists('sourceCodes', $data) && $data['sourceCodes'] === null) {
            $object->setSourceCodes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getSkus() as $value) {
            $values[] = $value;
        }
        $data['skus'] = $values;
        $values_1 = array();
        foreach ($object->getSourceCodes() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['sourceCodes'] = $values_1;
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1InventoryBulkProductSourceUnassignPostBody' => false);
    }
}