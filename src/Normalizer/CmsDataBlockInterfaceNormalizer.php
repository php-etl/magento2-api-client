<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CmsDataBlockInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\CmsDataBlockInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\CmsDataBlockInterface';
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
        $object = new \Kiboko\Magento\V2\Model\CmsDataBlockInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('identifier', $data)) {
            $object->setIdentifier($data['identifier']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['identifier'] = $object->getIdentifier();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        return $data;
    }
}