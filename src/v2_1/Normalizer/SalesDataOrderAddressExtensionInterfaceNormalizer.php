<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderAddressExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderAddressExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderAddressExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\SalesDataOrderAddressExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('checkout_fields', $data) && $data['checkout_fields'] !== null) {
            $values = array();
            foreach ($data['checkout_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCheckoutFields($values);
        } elseif (\array_key_exists('checkout_fields', $data) && $data['checkout_fields'] === null) {
            $object->setCheckoutFields(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCheckoutFields()) {
            $values = array();
            foreach ($object->getCheckoutFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['checkout_fields'] = $values;
        }
        return $data;
    }
}
