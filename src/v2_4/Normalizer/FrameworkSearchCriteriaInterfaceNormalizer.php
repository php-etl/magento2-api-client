<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FrameworkSearchCriteriaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\FrameworkSearchCriteriaInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\FrameworkSearchCriteriaInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\FrameworkSearchCriteriaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filter_groups', $data)) {
            $values = array();
            foreach ($data['filter_groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_4\\Model\\FrameworkSearchFilterGroup', 'json', $context);
            }
            $object->setFilterGroups($values);
        }
        if (\array_key_exists('sort_orders', $data)) {
            $values_1 = array();
            foreach ($data['sort_orders'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_4\\Model\\FrameworkSortOrder', 'json', $context);
            }
            $object->setSortOrders($values_1);
        }
        if (\array_key_exists('page_size', $data)) {
            $object->setPageSize($data['page_size']);
        }
        if (\array_key_exists('current_page', $data)) {
            $object->setCurrentPage($data['current_page']);
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
        foreach ($object->getFilterGroups() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['filter_groups'] = $values;
        if (null !== $object->getSortOrders()) {
            $values_1 = array();
            foreach ($object->getSortOrders() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sort_orders'] = $values_1;
        }
        if (null !== $object->getPageSize()) {
            $data['page_size'] = $object->getPageSize();
        }
        if (null !== $object->getCurrentPage()) {
            $data['current_page'] = $object->getCurrentPage();
        }
        return $data;
    }
}
