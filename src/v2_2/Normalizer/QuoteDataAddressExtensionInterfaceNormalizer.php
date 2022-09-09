<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QuoteDataAddressExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataAddressExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataAddressExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\QuoteDataAddressExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('checkout_fields', $data) && $data['checkout_fields'] !== null) {
            $values = array();
            foreach ($data['checkout_fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCheckoutFields($values);
        } elseif (\array_key_exists('checkout_fields', $data) && $data['checkout_fields'] === null) {
            $object->setCheckoutFields(null);
        }
        if (\array_key_exists('gift_registry_id', $data) && $data['gift_registry_id'] !== null) {
            $object->setGiftRegistryId($data['gift_registry_id']);
        } elseif (\array_key_exists('gift_registry_id', $data) && $data['gift_registry_id'] === null) {
            $object->setGiftRegistryId(null);
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
        if (null !== $object->getGiftRegistryId()) {
            $data['gift_registry_id'] = $object->getGiftRegistryId();
        }
        return $data;
    }
}
