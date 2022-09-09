<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GiftMessageDataMessageExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\GiftMessageDataMessageExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\GiftMessageDataMessageExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\GiftMessageDataMessageExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entity_type', $data) && $data['entity_type'] !== null) {
            $object->setEntityType($data['entity_type']);
        } elseif (\array_key_exists('entity_type', $data) && $data['entity_type'] === null) {
            $object->setEntityType(null);
        }
        if (\array_key_exists('wrapping_add_printed_card', $data) && $data['wrapping_add_printed_card'] !== null) {
            $object->setWrappingAddPrintedCard($data['wrapping_add_printed_card']);
        } elseif (\array_key_exists('wrapping_add_printed_card', $data) && $data['wrapping_add_printed_card'] === null) {
            $object->setWrappingAddPrintedCard(null);
        }
        if (\array_key_exists('wrapping_allow_gift_receipt', $data) && $data['wrapping_allow_gift_receipt'] !== null) {
            $object->setWrappingAllowGiftReceipt($data['wrapping_allow_gift_receipt']);
        } elseif (\array_key_exists('wrapping_allow_gift_receipt', $data) && $data['wrapping_allow_gift_receipt'] === null) {
            $object->setWrappingAllowGiftReceipt(null);
        }
        if (\array_key_exists('wrapping_id', $data) && $data['wrapping_id'] !== null) {
            $object->setWrappingId($data['wrapping_id']);
        } elseif (\array_key_exists('wrapping_id', $data) && $data['wrapping_id'] === null) {
            $object->setWrappingId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getEntityType()) {
            $data['entity_type'] = $object->getEntityType();
        }
        if (null !== $object->getWrappingAddPrintedCard()) {
            $data['wrapping_add_printed_card'] = $object->getWrappingAddPrintedCard();
        }
        if (null !== $object->getWrappingAllowGiftReceipt()) {
            $data['wrapping_allow_gift_receipt'] = $object->getWrappingAllowGiftReceipt();
        }
        if (null !== $object->getWrappingId()) {
            $data['wrapping_id'] = $object->getWrappingId();
        }
        return $data;
    }
}
