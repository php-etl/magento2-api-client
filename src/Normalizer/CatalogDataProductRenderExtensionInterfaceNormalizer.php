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
class CatalogDataProductRenderExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataProductRenderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataProductRenderExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataProductRenderExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('review_html', $data) && $data['review_html'] !== null) {
            $object->setReviewHtml($data['review_html']);
        }
        elseif (\array_key_exists('review_html', $data) && $data['review_html'] === null) {
            $object->setReviewHtml(null);
        }
        if (\array_key_exists('wishlist_button', $data) && $data['wishlist_button'] !== null) {
            $object->setWishlistButton($this->denormalizer->denormalize($data['wishlist_button'], 'Kiboko\\Magento\\Model\\CatalogDataProductRenderButtonInterface', 'json', $context));
        }
        elseif (\array_key_exists('wishlist_button', $data) && $data['wishlist_button'] === null) {
            $object->setWishlistButton(null);
        }
        if (\array_key_exists('ddg_brand', $data) && $data['ddg_brand'] !== null) {
            $object->setDdgBrand($data['ddg_brand']);
        }
        elseif (\array_key_exists('ddg_brand', $data) && $data['ddg_brand'] === null) {
            $object->setDdgBrand(null);
        }
        if (\array_key_exists('ddg_description', $data) && $data['ddg_description'] !== null) {
            $object->setDdgDescription($data['ddg_description']);
        }
        elseif (\array_key_exists('ddg_description', $data) && $data['ddg_description'] === null) {
            $object->setDdgDescription(null);
        }
        if (\array_key_exists('ddg_sku', $data) && $data['ddg_sku'] !== null) {
            $object->setDdgSku($data['ddg_sku']);
        }
        elseif (\array_key_exists('ddg_sku', $data) && $data['ddg_sku'] === null) {
            $object->setDdgSku(null);
        }
        if (\array_key_exists('ddg_image', $data) && $data['ddg_image'] !== null) {
            $object->setDdgImage($data['ddg_image']);
        }
        elseif (\array_key_exists('ddg_image', $data) && $data['ddg_image'] === null) {
            $object->setDdgImage(null);
        }
        if (\array_key_exists('ddg_categories', $data) && $data['ddg_categories'] !== null) {
            $values = array();
            foreach ($data['ddg_categories'] as $value) {
                $values[] = $value;
            }
            $object->setDdgCategories($values);
        }
        elseif (\array_key_exists('ddg_categories', $data) && $data['ddg_categories'] === null) {
            $object->setDdgCategories(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('reviewHtml') && null !== $object->getReviewHtml()) {
            $data['review_html'] = $object->getReviewHtml();
        }
        if ($object->isInitialized('wishlistButton') && null !== $object->getWishlistButton()) {
            $data['wishlist_button'] = $this->normalizer->normalize($object->getWishlistButton(), 'json', $context);
        }
        if ($object->isInitialized('ddgBrand') && null !== $object->getDdgBrand()) {
            $data['ddg_brand'] = $object->getDdgBrand();
        }
        if ($object->isInitialized('ddgDescription') && null !== $object->getDdgDescription()) {
            $data['ddg_description'] = $object->getDdgDescription();
        }
        if ($object->isInitialized('ddgSku') && null !== $object->getDdgSku()) {
            $data['ddg_sku'] = $object->getDdgSku();
        }
        if ($object->isInitialized('ddgImage') && null !== $object->getDdgImage()) {
            $data['ddg_image'] = $object->getDdgImage();
        }
        if ($object->isInitialized('ddgCategories') && null !== $object->getDdgCategories()) {
            $values = array();
            foreach ($object->getDdgCategories() as $value) {
                $values[] = $value;
            }
            $data['ddg_categories'] = $values;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataProductRenderExtensionInterface' => false);
    }
}