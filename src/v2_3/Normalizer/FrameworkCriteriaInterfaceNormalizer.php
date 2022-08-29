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

class FrameworkCriteriaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\FrameworkCriteriaInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\FrameworkCriteriaInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\FrameworkCriteriaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('criteria_list', $data)) {
            $values = array();
            foreach ($data['criteria_list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\FrameworkCriteriaInterface', 'json', $context);
            }
            $object->setCriteriaList($values);
        }
        if (\array_key_exists('filters', $data)) {
            $values_1 = array();
            foreach ($data['filters'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFilters($values_1);
        }
        if (\array_key_exists('limit', $data)) {
            $values_2 = array();
            foreach ($data['limit'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLimit($values_2);
        }
        if (\array_key_exists('mapper_interface_name', $data)) {
            $object->setMapperInterfaceName($data['mapper_interface_name']);
        }
        if (\array_key_exists('orders', $data)) {
            $values_3 = array();
            foreach ($data['orders'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setOrders($values_3);
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
        foreach ($object->getLimit() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['limit'] = $values_2;
        $data['mapper_interface_name'] = $object->getMapperInterfaceName();
        $values_3 = array();
        foreach ($object->getOrders() as $value_3) {
            $values_3[] = $value_3;
        }
        $data['orders'] = $values_3;
        return $data;
    }
}
