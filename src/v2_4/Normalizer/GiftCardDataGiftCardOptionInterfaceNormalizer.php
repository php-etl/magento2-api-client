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

class GiftCardDataGiftCardOptionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\GiftCardDataGiftCardOptionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\GiftCardDataGiftCardOptionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\GiftCardDataGiftCardOptionInterface();
        if (\array_key_exists('custom_giftcard_amount', $data) && \is_int($data['custom_giftcard_amount'])) {
            $data['custom_giftcard_amount'] = (float) $data['custom_giftcard_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('custom_giftcard_amount', $data)) {
            $object->setCustomGiftcardAmount($data['custom_giftcard_amount']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('giftcard_amount', $data)) {
            $object->setGiftcardAmount($data['giftcard_amount']);
        }
        if (\array_key_exists('giftcard_message', $data)) {
            $object->setGiftcardMessage($data['giftcard_message']);
        }
        if (\array_key_exists('giftcard_recipient_email', $data)) {
            $object->setGiftcardRecipientEmail($data['giftcard_recipient_email']);
        }
        if (\array_key_exists('giftcard_recipient_name', $data)) {
            $object->setGiftcardRecipientName($data['giftcard_recipient_name']);
        }
        if (\array_key_exists('giftcard_sender_email', $data)) {
            $object->setGiftcardSenderEmail($data['giftcard_sender_email']);
        }
        if (\array_key_exists('giftcard_sender_name', $data)) {
            $object->setGiftcardSenderName($data['giftcard_sender_name']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCustomGiftcardAmount()) {
            $data['custom_giftcard_amount'] = $object->getCustomGiftcardAmount();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['giftcard_amount'] = $object->getGiftcardAmount();
        if (null !== $object->getGiftcardMessage()) {
            $data['giftcard_message'] = $object->getGiftcardMessage();
        }
        $data['giftcard_recipient_email'] = $object->getGiftcardRecipientEmail();
        $data['giftcard_recipient_name'] = $object->getGiftcardRecipientName();
        $data['giftcard_sender_email'] = $object->getGiftcardSenderEmail();
        $data['giftcard_sender_name'] = $object->getGiftcardSenderName();
        return $data;
    }
}
