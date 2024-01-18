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
class AdobeStockAssetApiDataAssetInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\AdobeStockAssetApiDataAssetInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\AdobeStockAssetApiDataAssetInterface';
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
        $object = new \Kiboko\Magento\Model\AdobeStockAssetApiDataAssetInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('media_gallery_id', $data) && $data['media_gallery_id'] !== null) {
            $object->setMediaGalleryId($data['media_gallery_id']);
        }
        elseif (\array_key_exists('media_gallery_id', $data) && $data['media_gallery_id'] === null) {
            $object->setMediaGalleryId(null);
        }
        if (\array_key_exists('category_id', $data) && $data['category_id'] !== null) {
            $object->setCategoryId($data['category_id']);
        }
        elseif (\array_key_exists('category_id', $data) && $data['category_id'] === null) {
            $object->setCategoryId(null);
        }
        if (\array_key_exists('category', $data) && $data['category'] !== null) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], 'Kiboko\\Magento\\Model\\AdobeStockAssetApiDataCategoryInterface', 'json', $context));
        }
        elseif (\array_key_exists('category', $data) && $data['category'] === null) {
            $object->setCategory(null);
        }
        if (\array_key_exists('creator_id', $data) && $data['creator_id'] !== null) {
            $object->setCreatorId($data['creator_id']);
        }
        elseif (\array_key_exists('creator_id', $data) && $data['creator_id'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'Kiboko\\Magento\\Model\\AdobeStockAssetApiDataCreatorInterface', 'json', $context));
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('is_licensed', $data) && $data['is_licensed'] !== null) {
            $object->setIsLicensed($data['is_licensed']);
        }
        elseif (\array_key_exists('is_licensed', $data) && $data['is_licensed'] === null) {
            $object->setIsLicensed(null);
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        }
        elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['media_gallery_id'] = $object->getMediaGalleryId();
        if ($object->isInitialized('categoryId') && null !== $object->getCategoryId()) {
            $data['category_id'] = $object->getCategoryId();
        }
        if ($object->isInitialized('category') && null !== $object->getCategory()) {
            $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if ($object->isInitialized('creatorId') && null !== $object->getCreatorId()) {
            $data['creator_id'] = $object->getCreatorId();
        }
        if ($object->isInitialized('creator') && null !== $object->getCreator()) {
            $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        $data['is_licensed'] = $object->getIsLicensed();
        $data['creation_date'] = $object->getCreationDate();
        $data['extension_attributes'] = $object->getExtensionAttributes();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\AdobeStockAssetApiDataAssetInterface' => false);
    }
}