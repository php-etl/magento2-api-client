<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductRenderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductRenderExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\CatalogDataProductRenderExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('wishlist_button', $data)) {
            $object->setWishlistButton($this->denormalizer->denormalize($data['wishlist_button'], 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductRenderButtonInterface', 'json', $context));
        }
        if (\array_key_exists('review_html', $data)) {
            $object->setReviewHtml($data['review_html']);
        }
        if (\array_key_exists('ddg_brand', $data)) {
            $object->setDdgBrand($data['ddg_brand']);
        }
        if (\array_key_exists('ddg_description', $data)) {
            $object->setDdgDescription($data['ddg_description']);
        }
        if (\array_key_exists('ddg_sku', $data)) {
            $object->setDdgSku($data['ddg_sku']);
        }
        if (\array_key_exists('ddg_image', $data)) {
            $object->setDdgImage($data['ddg_image']);
        }
        if (\array_key_exists('ddg_categories', $data)) {
            $values = array();
            foreach ($data['ddg_categories'] as $value) {
                $values[] = $value;
            }
            $object->setDdgCategories($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getWishlistButton()) {
            $data['wishlist_button'] = $this->normalizer->normalize($object->getWishlistButton(), 'json', $context);
        }
        if (null !== $object->getReviewHtml()) {
            $data['review_html'] = $object->getReviewHtml();
        }
        if (null !== $object->getDdgBrand()) {
            $data['ddg_brand'] = $object->getDdgBrand();
        }
        if (null !== $object->getDdgDescription()) {
            $data['ddg_description'] = $object->getDdgDescription();
        }
        if (null !== $object->getDdgSku()) {
            $data['ddg_sku'] = $object->getDdgSku();
        }
        if (null !== $object->getDdgImage()) {
            $data['ddg_image'] = $object->getDdgImage();
        }
        if (null !== $object->getDdgCategories()) {
            $values = array();
            foreach ($object->getDdgCategories() as $value) {
                $values[] = $value;
            }
            $data['ddg_categories'] = $values;
        }
        return $data;
    }
}