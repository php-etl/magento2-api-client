<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\CatalogDataProductRenderExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('review_html', $data) && $data['review_html'] !== null) {
            $object->setReviewHtml($data['review_html']);
        } elseif (\array_key_exists('review_html', $data) && $data['review_html'] === null) {
            $object->setReviewHtml(null);
        }
        if (\array_key_exists('wishlist_button', $data) && $data['wishlist_button'] !== null) {
            $object->setWishlistButton($this->denormalizer->denormalize($data['wishlist_button'], 'Kiboko\\Magento\\V2_4\\Model\\CatalogDataProductRenderButtonInterface', 'json', $context));
        } elseif (\array_key_exists('wishlist_button', $data) && $data['wishlist_button'] === null) {
            $object->setWishlistButton(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getReviewHtml()) {
            $data['review_html'] = $object->getReviewHtml();
        }
        if (null !== $object->getWishlistButton()) {
            $data['wishlist_button'] = $this->normalizer->normalize($object->getWishlistButton(), 'json', $context);
        }
        return $data;
    }
}
