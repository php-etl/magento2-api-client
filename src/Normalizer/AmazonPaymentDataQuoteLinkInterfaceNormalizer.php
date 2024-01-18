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
class AmazonPaymentDataQuoteLinkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\AmazonPaymentDataQuoteLinkInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\AmazonPaymentDataQuoteLinkInterface';
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
        $object = new \Kiboko\Magento\Model\AmazonPaymentDataQuoteLinkInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] !== null) {
            $object->setAmazonOrderReferenceId($data['amazon_order_reference_id']);
        }
        elseif (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] === null) {
            $object->setAmazonOrderReferenceId(null);
        }
        if (\array_key_exists('quote_id', $data) && $data['quote_id'] !== null) {
            $object->setQuoteId($data['quote_id']);
        }
        elseif (\array_key_exists('quote_id', $data) && $data['quote_id'] === null) {
            $object->setQuoteId(null);
        }
        if (\array_key_exists('sandbox_simulation_reference', $data) && $data['sandbox_simulation_reference'] !== null) {
            $object->setSandboxSimulationReference($data['sandbox_simulation_reference']);
        }
        elseif (\array_key_exists('sandbox_simulation_reference', $data) && $data['sandbox_simulation_reference'] === null) {
            $object->setSandboxSimulationReference(null);
        }
        if (\array_key_exists('confirmed', $data) && $data['confirmed'] !== null) {
            $object->setConfirmed($data['confirmed']);
        }
        elseif (\array_key_exists('confirmed', $data) && $data['confirmed'] === null) {
            $object->setConfirmed(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['amazon_order_reference_id'] = $object->getAmazonOrderReferenceId();
        $data['quote_id'] = $object->getQuoteId();
        $data['sandbox_simulation_reference'] = $object->getSandboxSimulationReference();
        $data['confirmed'] = $object->getConfirmed();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\AmazonPaymentDataQuoteLinkInterface' => false);
    }
}