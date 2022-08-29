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

class AdobeStockAssetApiDataAssetInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\AdobeStockAssetApiDataAssetInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\AdobeStockAssetApiDataAssetInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\AdobeStockAssetApiDataAssetInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('media_gallery_id', $data)) {
            $object->setMediaGalleryId($data['media_gallery_id']);
        }
        if (\array_key_exists('category_id', $data)) {
            $object->setCategoryId($data['category_id']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], 'Kiboko\\Magento\\v2_4\\Model\\AdobeStockAssetApiDataCategoryInterface', 'json', $context));
        }
        if (\array_key_exists('creator_id', $data)) {
            $object->setCreatorId($data['creator_id']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'Kiboko\\Magento\\v2_4\\Model\\AdobeStockAssetApiDataCreatorInterface', 'json', $context));
        }
        if (\array_key_exists('is_licensed', $data)) {
            $object->setIsLicensed($data['is_licensed']);
        }
        if (\array_key_exists('creation_date', $data)) {
            $object->setCreationDate($data['creation_date']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['media_gallery_id'] = $object->getMediaGalleryId();
        if (null !== $object->getCategoryId()) {
            $data['category_id'] = $object->getCategoryId();
        }
        if (null !== $object->getCategory()) {
            $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if (null !== $object->getCreatorId()) {
            $data['creator_id'] = $object->getCreatorId();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        $data['is_licensed'] = $object->getIsLicensed();
        $data['creation_date'] = $object->getCreationDate();
        $data['extension_attributes'] = $object->getExtensionAttributes();
        return $data;
    }
}
