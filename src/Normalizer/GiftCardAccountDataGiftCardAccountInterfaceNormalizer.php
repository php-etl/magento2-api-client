<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2\\Model\\GiftCardAccountDataGiftCardAccountInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\GiftCardAccountDataGiftCardAccountInterface';
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
        $object = new \Kiboko\Magento\V2\Model\GiftCardAccountDataGiftCardAccountInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gift_cards', $data)) {
            $values = array();
            foreach ($data['gift_cards'] as $value) {
                $values[] = $value;
            }
            $object->setGiftCards($values);
        }
        if (\array_key_exists('gift_cards_amount', $data)) {
            $object->setGiftCardsAmount($data['gift_cards_amount']);
        }
        if (\array_key_exists('base_gift_cards_amount', $data)) {
            $object->setBaseGiftCardsAmount($data['base_gift_cards_amount']);
        }
        if (\array_key_exists('gift_cards_amount_used', $data)) {
            $object->setGiftCardsAmountUsed($data['gift_cards_amount_used']);
        }
        if (\array_key_exists('base_gift_cards_amount_used', $data)) {
            $object->setBaseGiftCardsAmountUsed($data['base_gift_cards_amount_used']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
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
        foreach ($object->getGiftCards() as $value) {
            $values[] = $value;
        }
        $data['gift_cards'] = $values;
        $data['gift_cards_amount'] = $object->getGiftCardsAmount();
        $data['base_gift_cards_amount'] = $object->getBaseGiftCardsAmount();
        $data['gift_cards_amount_used'] = $object->getGiftCardsAmountUsed();
        $data['base_gift_cards_amount_used'] = $object->getBaseGiftCardsAmountUsed();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
