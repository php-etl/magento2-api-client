<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\AmazonPaymentDataQuoteLinkInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\AmazonPaymentDataQuoteLinkInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\AmazonPaymentDataQuoteLinkInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('amazon_order_reference_id', $data)) {
            $object->setAmazonOrderReferenceId($data['amazon_order_reference_id']);
        }
        if (\array_key_exists('quote_id', $data)) {
            $object->setQuoteId($data['quote_id']);
        }
        if (\array_key_exists('sandbox_simulation_reference', $data)) {
            $object->setSandboxSimulationReference($data['sandbox_simulation_reference']);
        }
        if (\array_key_exists('confirmed', $data)) {
            $object->setConfirmed($data['confirmed']);
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
}
