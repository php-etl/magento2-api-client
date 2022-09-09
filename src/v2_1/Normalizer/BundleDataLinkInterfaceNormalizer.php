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

class BundleDataLinkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\BundleDataLinkInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\BundleDataLinkInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\BundleDataLinkInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (float) $data['qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('can_change_quantity', $data) && $data['can_change_quantity'] !== null) {
            $object->setCanChangeQuantity($data['can_change_quantity']);
        } elseif (\array_key_exists('can_change_quantity', $data) && $data['can_change_quantity'] === null) {
            $object->setCanChangeQuantity(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_default', $data) && $data['is_default'] !== null) {
            $object->setIsDefault($data['is_default']);
        } elseif (\array_key_exists('is_default', $data) && $data['is_default'] === null) {
            $object->setIsDefault(null);
        }
        if (\array_key_exists('option_id', $data) && $data['option_id'] !== null) {
            $object->setOptionId($data['option_id']);
        } elseif (\array_key_exists('option_id', $data) && $data['option_id'] === null) {
            $object->setOptionId(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('price_type', $data) && $data['price_type'] !== null) {
            $object->setPriceType($data['price_type']);
        } elseif (\array_key_exists('price_type', $data) && $data['price_type'] === null) {
            $object->setPriceType(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        } elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        } elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCanChangeQuantity()) {
            $data['can_change_quantity'] = $object->getCanChangeQuantity();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['is_default'] = $object->getIsDefault();
        if (null !== $object->getOptionId()) {
            $data['option_id'] = $object->getOptionId();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        $data['price'] = $object->getPrice();
        $data['price_type'] = $object->getPriceType();
        if (null !== $object->getQty()) {
            $data['qty'] = $object->getQty();
        }
        if (null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        return $data;
    }
}
