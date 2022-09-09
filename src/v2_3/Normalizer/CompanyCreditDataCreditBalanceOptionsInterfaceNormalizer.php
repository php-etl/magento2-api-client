<?php

namespace Kiboko\Magento\V2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanyCreditDataCreditBalanceOptionsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CompanyCreditDataCreditBalanceOptionsInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CompanyCreditDataCreditBalanceOptionsInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CompanyCreditDataCreditBalanceOptionsInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currency_base', $data) && $data['currency_base'] !== null) {
            $object->setCurrencyBase($data['currency_base']);
        } elseif (\array_key_exists('currency_base', $data) && $data['currency_base'] === null) {
            $object->setCurrencyBase(null);
        }
        if (\array_key_exists('currency_display', $data) && $data['currency_display'] !== null) {
            $object->setCurrencyDisplay($data['currency_display']);
        } elseif (\array_key_exists('currency_display', $data) && $data['currency_display'] === null) {
            $object->setCurrencyDisplay(null);
        }
        if (\array_key_exists('order_increment', $data) && $data['order_increment'] !== null) {
            $object->setOrderIncrement($data['order_increment']);
        } elseif (\array_key_exists('order_increment', $data) && $data['order_increment'] === null) {
            $object->setOrderIncrement(null);
        }
        if (\array_key_exists('purchase_order', $data) && $data['purchase_order'] !== null) {
            $object->setPurchaseOrder($data['purchase_order']);
        } elseif (\array_key_exists('purchase_order', $data) && $data['purchase_order'] === null) {
            $object->setPurchaseOrder(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['currency_base'] = $object->getCurrencyBase();
        $data['currency_display'] = $object->getCurrencyDisplay();
        $data['order_increment'] = $object->getOrderIncrement();
        $data['purchase_order'] = $object->getPurchaseOrder();
        return $data;
    }
}
