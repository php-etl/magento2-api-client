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
class MsrpDataProductRenderMsrpPriceInfoInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface';
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
        $object = new \Kiboko\Magento\Model\MsrpDataProductRenderMsrpPriceInfoInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('msrp_price', $data) && $data['msrp_price'] !== null) {
            $object->setMsrpPrice($data['msrp_price']);
        }
        elseif (\array_key_exists('msrp_price', $data) && $data['msrp_price'] === null) {
            $object->setMsrpPrice(null);
        }
        if (\array_key_exists('is_applicable', $data) && $data['is_applicable'] !== null) {
            $object->setIsApplicable($data['is_applicable']);
        }
        elseif (\array_key_exists('is_applicable', $data) && $data['is_applicable'] === null) {
            $object->setIsApplicable(null);
        }
        if (\array_key_exists('is_shown_price_on_gesture', $data) && $data['is_shown_price_on_gesture'] !== null) {
            $object->setIsShownPriceOnGesture($data['is_shown_price_on_gesture']);
        }
        elseif (\array_key_exists('is_shown_price_on_gesture', $data) && $data['is_shown_price_on_gesture'] === null) {
            $object->setIsShownPriceOnGesture(null);
        }
        if (\array_key_exists('msrp_message', $data) && $data['msrp_message'] !== null) {
            $object->setMsrpMessage($data['msrp_message']);
        }
        elseif (\array_key_exists('msrp_message', $data) && $data['msrp_message'] === null) {
            $object->setMsrpMessage(null);
        }
        if (\array_key_exists('explanation_message', $data) && $data['explanation_message'] !== null) {
            $object->setExplanationMessage($data['explanation_message']);
        }
        elseif (\array_key_exists('explanation_message', $data) && $data['explanation_message'] === null) {
            $object->setExplanationMessage(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['msrp_price'] = $object->getMsrpPrice();
        $data['is_applicable'] = $object->getIsApplicable();
        $data['is_shown_price_on_gesture'] = $object->getIsShownPriceOnGesture();
        $data['msrp_message'] = $object->getMsrpMessage();
        $data['explanation_message'] = $object->getExplanationMessage();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface' => false);
    }
}