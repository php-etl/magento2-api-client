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
class V1CreditmemoRefundPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1CreditmemoRefundPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1CreditmemoRefundPostBody';
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
        $object = new \Kiboko\Magento\Model\V1CreditmemoRefundPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('creditmemo', $data) && $data['creditmemo'] !== null) {
            $object->setCreditmemo($this->denormalizer->denormalize($data['creditmemo'], 'Kiboko\\Magento\\Model\\SalesDataCreditmemoInterface', 'json', $context));
        }
        elseif (\array_key_exists('creditmemo', $data) && $data['creditmemo'] === null) {
            $object->setCreditmemo(null);
        }
        if (\array_key_exists('offlineRequested', $data) && $data['offlineRequested'] !== null) {
            $object->setOfflineRequested($data['offlineRequested']);
        }
        elseif (\array_key_exists('offlineRequested', $data) && $data['offlineRequested'] === null) {
            $object->setOfflineRequested(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['creditmemo'] = $this->normalizer->normalize($object->getCreditmemo(), 'json', $context);
        if ($object->isInitialized('offlineRequested') && null !== $object->getOfflineRequested()) {
            $data['offlineRequested'] = $object->getOfflineRequested();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1CreditmemoRefundPostBody' => false);
    }
}