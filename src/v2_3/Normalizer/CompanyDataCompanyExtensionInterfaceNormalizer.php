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

class CompanyDataCompanyExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CompanyDataCompanyExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CompanyDataCompanyExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CompanyDataCompanyExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applicable_payment_method', $data) && $data['applicable_payment_method'] !== null) {
            $object->setApplicablePaymentMethod($data['applicable_payment_method']);
        } elseif (\array_key_exists('applicable_payment_method', $data) && $data['applicable_payment_method'] === null) {
            $object->setApplicablePaymentMethod(null);
        }
        if (\array_key_exists('available_payment_methods', $data) && $data['available_payment_methods'] !== null) {
            $object->setAvailablePaymentMethods($data['available_payment_methods']);
        } elseif (\array_key_exists('available_payment_methods', $data) && $data['available_payment_methods'] === null) {
            $object->setAvailablePaymentMethods(null);
        }
        if (\array_key_exists('quote_config', $data) && $data['quote_config'] !== null) {
            $object->setQuoteConfig($this->denormalizer->denormalize($data['quote_config'], 'Kiboko\\Magento\\V2_3\\Model\\NegotiableQuoteDataCompanyQuoteConfigInterface', 'json', $context));
        } elseif (\array_key_exists('quote_config', $data) && $data['quote_config'] === null) {
            $object->setQuoteConfig(null);
        }
        if (\array_key_exists('use_config_settings', $data) && $data['use_config_settings'] !== null) {
            $object->setUseConfigSettings($data['use_config_settings']);
        } elseif (\array_key_exists('use_config_settings', $data) && $data['use_config_settings'] === null) {
            $object->setUseConfigSettings(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getApplicablePaymentMethod()) {
            $data['applicable_payment_method'] = $object->getApplicablePaymentMethod();
        }
        if (null !== $object->getAvailablePaymentMethods()) {
            $data['available_payment_methods'] = $object->getAvailablePaymentMethods();
        }
        if (null !== $object->getQuoteConfig()) {
            $data['quote_config'] = $this->normalizer->normalize($object->getQuoteConfig(), 'json', $context);
        }
        if (null !== $object->getUseConfigSettings()) {
            $data['use_config_settings'] = $object->getUseConfigSettings();
        }
        return $data;
    }
}
