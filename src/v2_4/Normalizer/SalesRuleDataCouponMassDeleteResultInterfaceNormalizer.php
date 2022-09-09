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

class SalesRuleDataCouponMassDeleteResultInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesRuleDataCouponMassDeleteResultInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesRuleDataCouponMassDeleteResultInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesRuleDataCouponMassDeleteResultInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('failed_items', $data) && $data['failed_items'] !== null) {
            $values = array();
            foreach ($data['failed_items'] as $value) {
                $values[] = $value;
            }
            $object->setFailedItems($values);
        } elseif (\array_key_exists('failed_items', $data) && $data['failed_items'] === null) {
            $object->setFailedItems(null);
        }
        if (\array_key_exists('missing_items', $data) && $data['missing_items'] !== null) {
            $values_1 = array();
            foreach ($data['missing_items'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMissingItems($values_1);
        } elseif (\array_key_exists('missing_items', $data) && $data['missing_items'] === null) {
            $object->setMissingItems(null);
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
        foreach ($object->getFailedItems() as $value) {
            $values[] = $value;
        }
        $data['failed_items'] = $values;
        $values_1 = array();
        foreach ($object->getMissingItems() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['missing_items'] = $values_1;
        return $data;
    }
}
