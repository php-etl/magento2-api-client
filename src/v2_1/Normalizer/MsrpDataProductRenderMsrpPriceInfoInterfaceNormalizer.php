<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\MsrpDataProductRenderMsrpPriceInfoInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\MsrpDataProductRenderMsrpPriceInfoInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('explanation_message', $data)) {
            $object->setExplanationMessage($data['explanation_message']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('is_applicable', $data)) {
            $object->setIsApplicable($data['is_applicable']);
        }
        if (\array_key_exists('is_shown_price_on_gesture', $data)) {
            $object->setIsShownPriceOnGesture($data['is_shown_price_on_gesture']);
        }
        if (\array_key_exists('msrp_message', $data)) {
            $object->setMsrpMessage($data['msrp_message']);
        }
        if (\array_key_exists('msrp_price', $data)) {
            $object->setMsrpPrice($data['msrp_price']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['explanation_message'] = $object->getExplanationMessage();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['is_applicable'] = $object->getIsApplicable();
        $data['is_shown_price_on_gesture'] = $object->getIsShownPriceOnGesture();
        $data['msrp_message'] = $object->getMsrpMessage();
        $data['msrp_price'] = $object->getMsrpPrice();
        return $data;
    }
}
