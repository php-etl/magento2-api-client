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

class V1OrderOrderIdShipPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\V1OrderOrderIdShipPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\V1OrderOrderIdShipPostBody';
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
        $object = new \Kiboko\Magento\V2_3\Model\V1OrderOrderIdShipPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('appendComment', $data)) {
            $object->setAppendComment($data['appendComment']);
        }
        if (\array_key_exists('arguments', $data)) {
            $object->setArguments($this->denormalizer->denormalize($data['arguments'], 'Kiboko\\Magento\\V2_3\\Model\\SalesDataShipmentCreationArgumentsInterface', 'json', $context));
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Kiboko\\Magento\\V2_3\\Model\\SalesDataShipmentCommentCreationInterface', 'json', $context));
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\SalesDataShipmentItemCreationInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('notify', $data)) {
            $object->setNotify($data['notify']);
        }
        if (\array_key_exists('packages', $data)) {
            $values_1 = array();
            foreach ($data['packages'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_3\\Model\\SalesDataShipmentPackageCreationInterface', 'json', $context);
            }
            $object->setPackages($values_1);
        }
        if (\array_key_exists('tracks', $data)) {
            $values_2 = array();
            foreach ($data['tracks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_3\\Model\\SalesDataShipmentTrackCreationInterface', 'json', $context);
            }
            $object->setTracks($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAppendComment()) {
            $data['appendComment'] = $object->getAppendComment();
        }
        if (null !== $object->getArguments()) {
            $data['arguments'] = $this->normalizer->normalize($object->getArguments(), 'json', $context);
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getNotify()) {
            $data['notify'] = $object->getNotify();
        }
        if (null !== $object->getPackages()) {
            $values_1 = array();
            foreach ($object->getPackages() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['packages'] = $values_1;
        }
        if (null !== $object->getTracks()) {
            $values_2 = array();
            foreach ($object->getTracks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['tracks'] = $values_2;
        }
        return $data;
    }
}
