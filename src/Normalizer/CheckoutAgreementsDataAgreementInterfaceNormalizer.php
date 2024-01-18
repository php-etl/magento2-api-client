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
class CheckoutAgreementsDataAgreementInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CheckoutAgreementsDataAgreementInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CheckoutAgreementsDataAgreementInterface';
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
        $object = new \Kiboko\Magento\Model\CheckoutAgreementsDataAgreementInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agreement_id', $data) && $data['agreement_id'] !== null) {
            $object->setAgreementId($data['agreement_id']);
        }
        elseif (\array_key_exists('agreement_id', $data) && $data['agreement_id'] === null) {
            $object->setAgreementId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('content_height', $data) && $data['content_height'] !== null) {
            $object->setContentHeight($data['content_height']);
        }
        elseif (\array_key_exists('content_height', $data) && $data['content_height'] === null) {
            $object->setContentHeight(null);
        }
        if (\array_key_exists('checkbox_text', $data) && $data['checkbox_text'] !== null) {
            $object->setCheckboxText($data['checkbox_text']);
        }
        elseif (\array_key_exists('checkbox_text', $data) && $data['checkbox_text'] === null) {
            $object->setCheckboxText(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_html', $data) && $data['is_html'] !== null) {
            $object->setIsHtml($data['is_html']);
        }
        elseif (\array_key_exists('is_html', $data) && $data['is_html'] === null) {
            $object->setIsHtml(null);
        }
        if (\array_key_exists('mode', $data) && $data['mode'] !== null) {
            $object->setMode($data['mode']);
        }
        elseif (\array_key_exists('mode', $data) && $data['mode'] === null) {
            $object->setMode(null);
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
        $data['agreement_id'] = $object->getAgreementId();
        $data['name'] = $object->getName();
        $data['content'] = $object->getContent();
        if ($object->isInitialized('contentHeight') && null !== $object->getContentHeight()) {
            $data['content_height'] = $object->getContentHeight();
        }
        $data['checkbox_text'] = $object->getCheckboxText();
        $data['is_active'] = $object->getIsActive();
        $data['is_html'] = $object->getIsHtml();
        $data['mode'] = $object->getMode();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CheckoutAgreementsDataAgreementInterface' => false);
    }
}