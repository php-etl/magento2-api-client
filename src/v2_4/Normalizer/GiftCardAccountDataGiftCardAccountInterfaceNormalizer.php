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

class GiftCardAccountDataGiftCardAccountInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\GiftCardAccountDataGiftCardAccountInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\GiftCardAccountDataGiftCardAccountInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\GiftCardAccountDataGiftCardAccountInterface();
        if (\array_key_exists('base_gift_cards_amount', $data) && \is_int($data['base_gift_cards_amount'])) {
            $data['base_gift_cards_amount'] = (float) $data['base_gift_cards_amount'];
        }
        if (\array_key_exists('base_gift_cards_amount_used', $data) && \is_int($data['base_gift_cards_amount_used'])) {
            $data['base_gift_cards_amount_used'] = (float) $data['base_gift_cards_amount_used'];
        }
        if (\array_key_exists('gift_cards_amount', $data) && \is_int($data['gift_cards_amount'])) {
            $data['gift_cards_amount'] = (float) $data['gift_cards_amount'];
        }
        if (\array_key_exists('gift_cards_amount_used', $data) && \is_int($data['gift_cards_amount_used'])) {
            $data['gift_cards_amount_used'] = (float) $data['gift_cards_amount_used'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] !== null) {
            $object->setBaseGiftCardsAmount($data['base_gift_cards_amount']);
        } elseif (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] === null) {
            $object->setBaseGiftCardsAmount(null);
        }
        if (\array_key_exists('base_gift_cards_amount_used', $data) && $data['base_gift_cards_amount_used'] !== null) {
            $object->setBaseGiftCardsAmountUsed($data['base_gift_cards_amount_used']);
        } elseif (\array_key_exists('base_gift_cards_amount_used', $data) && $data['base_gift_cards_amount_used'] === null) {
            $object->setBaseGiftCardsAmountUsed(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('gift_cards', $data) && $data['gift_cards'] !== null) {
            $values = array();
            foreach ($data['gift_cards'] as $value) {
                $values[] = $value;
            }
            $object->setGiftCards($values);
        } elseif (\array_key_exists('gift_cards', $data) && $data['gift_cards'] === null) {
            $object->setGiftCards(null);
        }
        if (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] !== null) {
            $object->setGiftCardsAmount($data['gift_cards_amount']);
        } elseif (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] === null) {
            $object->setGiftCardsAmount(null);
        }
        if (\array_key_exists('gift_cards_amount_used', $data) && $data['gift_cards_amount_used'] !== null) {
            $object->setGiftCardsAmountUsed($data['gift_cards_amount_used']);
        } elseif (\array_key_exists('gift_cards_amount_used', $data) && $data['gift_cards_amount_used'] === null) {
            $object->setGiftCardsAmountUsed(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['base_gift_cards_amount'] = $object->getBaseGiftCardsAmount();
        $data['base_gift_cards_amount_used'] = $object->getBaseGiftCardsAmountUsed();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $values = array();
        foreach ($object->getGiftCards() as $value) {
            $values[] = $value;
        }
        $data['gift_cards'] = $values;
        $data['gift_cards_amount'] = $object->getGiftCardsAmount();
        $data['gift_cards_amount_used'] = $object->getGiftCardsAmountUsed();
        return $data;
    }
}
