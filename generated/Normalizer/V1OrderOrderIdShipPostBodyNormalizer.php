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
class V1OrderOrderIdShipPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1OrderOrderIdShipPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1OrderOrderIdShipPostBody';
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
        $object = new \Kiboko\Magento\Model\V1OrderOrderIdShipPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\SalesDataShipmentItemCreationInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('notify', $data) && $data['notify'] !== null) {
            $object->setNotify($data['notify']);
        }
        elseif (\array_key_exists('notify', $data) && $data['notify'] === null) {
            $object->setNotify(null);
        }
        if (\array_key_exists('appendComment', $data) && $data['appendComment'] !== null) {
            $object->setAppendComment($data['appendComment']);
        }
        elseif (\array_key_exists('appendComment', $data) && $data['appendComment'] === null) {
            $object->setAppendComment(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Kiboko\\Magento\\Model\\SalesDataShipmentCommentCreationInterface', 'json', $context));
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('tracks', $data) && $data['tracks'] !== null) {
            $values_1 = array();
            foreach ($data['tracks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\SalesDataShipmentTrackCreationInterface', 'json', $context);
            }
            $object->setTracks($values_1);
        }
        elseif (\array_key_exists('tracks', $data) && $data['tracks'] === null) {
            $object->setTracks(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values_2 = array();
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\SalesDataShipmentPackageCreationInterface', 'json', $context);
            }
            $object->setPackages($values_2);
        }
        elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
            $object->setArguments($this->denormalizer->denormalize($data['arguments'], 'Kiboko\\Magento\\Model\\SalesDataShipmentCreationArgumentsInterface', 'json', $context));
        }
        elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
            $object->setArguments(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('items') && null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if ($object->isInitialized('notify') && null !== $object->getNotify()) {
            $data['notify'] = $object->getNotify();
        }
        if ($object->isInitialized('appendComment') && null !== $object->getAppendComment()) {
            $data['appendComment'] = $object->getAppendComment();
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if ($object->isInitialized('tracks') && null !== $object->getTracks()) {
            $values_1 = array();
            foreach ($object->getTracks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tracks'] = $values_1;
        }
        if ($object->isInitialized('packages') && null !== $object->getPackages()) {
            $values_2 = array();
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
        }
        if ($object->isInitialized('arguments') && null !== $object->getArguments()) {
            $data['arguments'] = $this->normalizer->normalize($object->getArguments(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1OrderOrderIdShipPostBody' => false);
    }
}