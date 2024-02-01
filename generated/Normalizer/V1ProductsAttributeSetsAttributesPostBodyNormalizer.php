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
class V1ProductsAttributeSetsAttributesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\V1ProductsAttributeSetsAttributesPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\V1ProductsAttributeSetsAttributesPostBody';
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
        $object = new \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attributeSetId', $data) && $data['attributeSetId'] !== null) {
            $object->setAttributeSetId($data['attributeSetId']);
        }
        elseif (\array_key_exists('attributeSetId', $data) && $data['attributeSetId'] === null) {
            $object->setAttributeSetId(null);
        }
        if (\array_key_exists('attributeGroupId', $data) && $data['attributeGroupId'] !== null) {
            $object->setAttributeGroupId($data['attributeGroupId']);
        }
        elseif (\array_key_exists('attributeGroupId', $data) && $data['attributeGroupId'] === null) {
            $object->setAttributeGroupId(null);
        }
        if (\array_key_exists('attributeCode', $data) && $data['attributeCode'] !== null) {
            $object->setAttributeCode($data['attributeCode']);
        }
        elseif (\array_key_exists('attributeCode', $data) && $data['attributeCode'] === null) {
            $object->setAttributeCode(null);
        }
        if (\array_key_exists('sortOrder', $data) && $data['sortOrder'] !== null) {
            $object->setSortOrder($data['sortOrder']);
        }
        elseif (\array_key_exists('sortOrder', $data) && $data['sortOrder'] === null) {
            $object->setSortOrder(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['attributeSetId'] = $object->getAttributeSetId();
        $data['attributeGroupId'] = $object->getAttributeGroupId();
        $data['attributeCode'] = $object->getAttributeCode();
        $data['sortOrder'] = $object->getSortOrder();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\V1ProductsAttributeSetsAttributesPostBody' => false);
    }
}