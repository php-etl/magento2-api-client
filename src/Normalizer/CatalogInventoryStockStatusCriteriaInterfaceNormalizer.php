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
class CatalogInventoryStockStatusCriteriaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogInventoryStockStatusCriteriaInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogInventoryStockStatusCriteriaInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogInventoryStockStatusCriteriaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mapper_interface_name', $data) && $data['mapper_interface_name'] !== null) {
            $object->setMapperInterfaceName($data['mapper_interface_name']);
        }
        elseif (\array_key_exists('mapper_interface_name', $data) && $data['mapper_interface_name'] === null) {
            $object->setMapperInterfaceName(null);
        }
        if (\array_key_exists('criteria_list', $data) && $data['criteria_list'] !== null) {
            $values = array();
            foreach ($data['criteria_list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\FrameworkCriteriaInterface', 'json', $context);
            }
            $object->setCriteriaList($values);
        }
        elseif (\array_key_exists('criteria_list', $data) && $data['criteria_list'] === null) {
            $object->setCriteriaList(null);
        }
        if (\array_key_exists('filters', $data) && $data['filters'] !== null) {
            $values_1 = array();
            foreach ($data['filters'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFilters($values_1);
        }
        elseif (\array_key_exists('filters', $data) && $data['filters'] === null) {
            $object->setFilters(null);
        }
        if (\array_key_exists('orders', $data) && $data['orders'] !== null) {
            $values_2 = array();
            foreach ($data['orders'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setOrders($values_2);
        }
        elseif (\array_key_exists('orders', $data) && $data['orders'] === null) {
            $object->setOrders(null);
        }
        if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
            $values_3 = array();
            foreach ($data['limit'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLimit($values_3);
        }
        elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
            $object->setLimit(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['mapper_interface_name'] = $object->getMapperInterfaceName();
        $values = array();
        foreach ($object->getCriteriaList() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['criteria_list'] = $values;
        $values_1 = array();
        foreach ($object->getFilters() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['filters'] = $values_1;
        $values_2 = array();
        foreach ($object->getOrders() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['orders'] = $values_2;
        $values_3 = array();
        foreach ($object->getLimit() as $value_3) {
            $values_3[] = $value_3;
        }
        $data['limit'] = $values_3;
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogInventoryStockStatusCriteriaInterface' => false);
    }
}