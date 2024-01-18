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
class TaxDataOrderTaxDetailsAppliedTaxExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsAppliedTaxExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsAppliedTaxExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\TaxDataOrderTaxDetailsAppliedTaxExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rates', $data) && $data['rates'] !== null) {
            $values = array();
            foreach ($data['rates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\TaxDataAppliedTaxRateInterface', 'json', $context);
            }
            $object->setRates($values);
        }
        elseif (\array_key_exists('rates', $data) && $data['rates'] === null) {
            $object->setRates(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('rates') && null !== $object->getRates()) {
            $values = array();
            foreach ($object->getRates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rates'] = $values;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsAppliedTaxExtensionInterface' => false);
    }
}