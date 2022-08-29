<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CmsDataPageInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\CmsDataPageInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\CmsDataPageInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\CmsDataPageInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('page_layout', $data)) {
            $object->setPageLayout($data['page_layout']);
        }
        if (\array_key_exists('meta_title', $data)) {
            $object->setMetaTitle($data['meta_title']);
        }
        if (\array_key_exists('meta_keywords', $data)) {
            $object->setMetaKeywords($data['meta_keywords']);
        }
        if (\array_key_exists('meta_description', $data)) {
            $object->setMetaDescription($data['meta_description']);
        }
        if (\array_key_exists('content_heading', $data)) {
            $object->setContentHeading($data['content_heading']);
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
        }
        if (\array_key_exists('layout_update_xml', $data)) {
            $object->setLayoutUpdateXml($data['layout_update_xml']);
        }
        if (\array_key_exists('custom_theme', $data)) {
            $object->setCustomTheme($data['custom_theme']);
        }
        if (\array_key_exists('custom_root_template', $data)) {
            $object->setCustomRootTemplate($data['custom_root_template']);
        }
        if (\array_key_exists('custom_layout_update_xml', $data)) {
            $object->setCustomLayoutUpdateXml($data['custom_layout_update_xml']);
        }
        if (\array_key_exists('custom_theme_from', $data)) {
            $object->setCustomThemeFrom($data['custom_theme_from']);
        }
        if (\array_key_exists('custom_theme_to', $data)) {
            $object->setCustomThemeTo($data['custom_theme_to']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
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
        $data['identifier'] = $object->getIdentifier();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getPageLayout()) {
            $data['page_layout'] = $object->getPageLayout();
        }
        if (null !== $object->getMetaTitle()) {
            $data['meta_title'] = $object->getMetaTitle();
        }
        if (null !== $object->getMetaKeywords()) {
            $data['meta_keywords'] = $object->getMetaKeywords();
        }
        if (null !== $object->getMetaDescription()) {
            $data['meta_description'] = $object->getMetaDescription();
        }
        if (null !== $object->getContentHeading()) {
            $data['content_heading'] = $object->getContentHeading();
        }
        if (null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        if (null !== $object->getSortOrder()) {
            $data['sort_order'] = $object->getSortOrder();
        }
        if (null !== $object->getLayoutUpdateXml()) {
            $data['layout_update_xml'] = $object->getLayoutUpdateXml();
        }
        if (null !== $object->getCustomTheme()) {
            $data['custom_theme'] = $object->getCustomTheme();
        }
        if (null !== $object->getCustomRootTemplate()) {
            $data['custom_root_template'] = $object->getCustomRootTemplate();
        }
        if (null !== $object->getCustomLayoutUpdateXml()) {
            $data['custom_layout_update_xml'] = $object->getCustomLayoutUpdateXml();
        }
        if (null !== $object->getCustomThemeFrom()) {
            $data['custom_theme_from'] = $object->getCustomThemeFrom();
        }
        if (null !== $object->getCustomThemeTo()) {
            $data['custom_theme_to'] = $object->getCustomThemeTo();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        return $data;
    }
}