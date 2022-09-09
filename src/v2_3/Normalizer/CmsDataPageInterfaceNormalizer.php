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

class CmsDataPageInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CmsDataPageInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CmsDataPageInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CmsDataPageInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('content_heading', $data) && $data['content_heading'] !== null) {
            $object->setContentHeading($data['content_heading']);
        } elseif (\array_key_exists('content_heading', $data) && $data['content_heading'] === null) {
            $object->setContentHeading(null);
        }
        if (\array_key_exists('creation_time', $data) && $data['creation_time'] !== null) {
            $object->setCreationTime($data['creation_time']);
        } elseif (\array_key_exists('creation_time', $data) && $data['creation_time'] === null) {
            $object->setCreationTime(null);
        }
        if (\array_key_exists('custom_layout_update_xml', $data) && $data['custom_layout_update_xml'] !== null) {
            $object->setCustomLayoutUpdateXml($data['custom_layout_update_xml']);
        } elseif (\array_key_exists('custom_layout_update_xml', $data) && $data['custom_layout_update_xml'] === null) {
            $object->setCustomLayoutUpdateXml(null);
        }
        if (\array_key_exists('custom_root_template', $data) && $data['custom_root_template'] !== null) {
            $object->setCustomRootTemplate($data['custom_root_template']);
        } elseif (\array_key_exists('custom_root_template', $data) && $data['custom_root_template'] === null) {
            $object->setCustomRootTemplate(null);
        }
        if (\array_key_exists('custom_theme', $data) && $data['custom_theme'] !== null) {
            $object->setCustomTheme($data['custom_theme']);
        } elseif (\array_key_exists('custom_theme', $data) && $data['custom_theme'] === null) {
            $object->setCustomTheme(null);
        }
        if (\array_key_exists('custom_theme_from', $data) && $data['custom_theme_from'] !== null) {
            $object->setCustomThemeFrom($data['custom_theme_from']);
        } elseif (\array_key_exists('custom_theme_from', $data) && $data['custom_theme_from'] === null) {
            $object->setCustomThemeFrom(null);
        }
        if (\array_key_exists('custom_theme_to', $data) && $data['custom_theme_to'] !== null) {
            $object->setCustomThemeTo($data['custom_theme_to']);
        } elseif (\array_key_exists('custom_theme_to', $data) && $data['custom_theme_to'] === null) {
            $object->setCustomThemeTo(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
            $object->setIdentifier($data['identifier']);
        } elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
            $object->setIdentifier(null);
        }
        if (\array_key_exists('layout_update_xml', $data) && $data['layout_update_xml'] !== null) {
            $object->setLayoutUpdateXml($data['layout_update_xml']);
        } elseif (\array_key_exists('layout_update_xml', $data) && $data['layout_update_xml'] === null) {
            $object->setLayoutUpdateXml(null);
        }
        if (\array_key_exists('meta_description', $data) && $data['meta_description'] !== null) {
            $object->setMetaDescription($data['meta_description']);
        } elseif (\array_key_exists('meta_description', $data) && $data['meta_description'] === null) {
            $object->setMetaDescription(null);
        }
        if (\array_key_exists('meta_keywords', $data) && $data['meta_keywords'] !== null) {
            $object->setMetaKeywords($data['meta_keywords']);
        } elseif (\array_key_exists('meta_keywords', $data) && $data['meta_keywords'] === null) {
            $object->setMetaKeywords(null);
        }
        if (\array_key_exists('meta_title', $data) && $data['meta_title'] !== null) {
            $object->setMetaTitle($data['meta_title']);
        } elseif (\array_key_exists('meta_title', $data) && $data['meta_title'] === null) {
            $object->setMetaTitle(null);
        }
        if (\array_key_exists('page_layout', $data) && $data['page_layout'] !== null) {
            $object->setPageLayout($data['page_layout']);
        } elseif (\array_key_exists('page_layout', $data) && $data['page_layout'] === null) {
            $object->setPageLayout(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        } elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime($data['update_time']);
        } elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
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
        if (null !== $object->getContentHeading()) {
            $data['content_heading'] = $object->getContentHeading();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getCustomLayoutUpdateXml()) {
            $data['custom_layout_update_xml'] = $object->getCustomLayoutUpdateXml();
        }
        if (null !== $object->getCustomRootTemplate()) {
            $data['custom_root_template'] = $object->getCustomRootTemplate();
        }
        if (null !== $object->getCustomTheme()) {
            $data['custom_theme'] = $object->getCustomTheme();
        }
        if (null !== $object->getCustomThemeFrom()) {
            $data['custom_theme_from'] = $object->getCustomThemeFrom();
        }
        if (null !== $object->getCustomThemeTo()) {
            $data['custom_theme_to'] = $object->getCustomThemeTo();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['identifier'] = $object->getIdentifier();
        if (null !== $object->getLayoutUpdateXml()) {
            $data['layout_update_xml'] = $object->getLayoutUpdateXml();
        }
        if (null !== $object->getMetaDescription()) {
            $data['meta_description'] = $object->getMetaDescription();
        }
        if (null !== $object->getMetaKeywords()) {
            $data['meta_keywords'] = $object->getMetaKeywords();
        }
        if (null !== $object->getMetaTitle()) {
            $data['meta_title'] = $object->getMetaTitle();
        }
        if (null !== $object->getPageLayout()) {
            $data['page_layout'] = $object->getPageLayout();
        }
        if (null !== $object->getSortOrder()) {
            $data['sort_order'] = $object->getSortOrder();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        return $data;
    }
}
