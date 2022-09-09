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

class DownloadableDataLinkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataLinkInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataLinkInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\DownloadableDataLinkInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_shareable', $data) && $data['is_shareable'] !== null) {
            $object->setIsShareable($data['is_shareable']);
        } elseif (\array_key_exists('is_shareable', $data) && $data['is_shareable'] === null) {
            $object->setIsShareable(null);
        }
        if (\array_key_exists('link_file', $data) && $data['link_file'] !== null) {
            $object->setLinkFile($data['link_file']);
        } elseif (\array_key_exists('link_file', $data) && $data['link_file'] === null) {
            $object->setLinkFile(null);
        }
        if (\array_key_exists('link_file_content', $data) && $data['link_file_content'] !== null) {
            $object->setLinkFileContent($this->denormalizer->denormalize($data['link_file_content'], 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataFileContentInterface', 'json', $context));
        } elseif (\array_key_exists('link_file_content', $data) && $data['link_file_content'] === null) {
            $object->setLinkFileContent(null);
        }
        if (\array_key_exists('link_type', $data) && $data['link_type'] !== null) {
            $object->setLinkType($data['link_type']);
        } elseif (\array_key_exists('link_type', $data) && $data['link_type'] === null) {
            $object->setLinkType(null);
        }
        if (\array_key_exists('link_url', $data) && $data['link_url'] !== null) {
            $object->setLinkUrl($data['link_url']);
        } elseif (\array_key_exists('link_url', $data) && $data['link_url'] === null) {
            $object->setLinkUrl(null);
        }
        if (\array_key_exists('number_of_downloads', $data) && $data['number_of_downloads'] !== null) {
            $object->setNumberOfDownloads($data['number_of_downloads']);
        } elseif (\array_key_exists('number_of_downloads', $data) && $data['number_of_downloads'] === null) {
            $object->setNumberOfDownloads(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('sample_file', $data) && $data['sample_file'] !== null) {
            $object->setSampleFile($data['sample_file']);
        } elseif (\array_key_exists('sample_file', $data) && $data['sample_file'] === null) {
            $object->setSampleFile(null);
        }
        if (\array_key_exists('sample_file_content', $data) && $data['sample_file_content'] !== null) {
            $object->setSampleFileContent($this->denormalizer->denormalize($data['sample_file_content'], 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataFileContentInterface', 'json', $context));
        } elseif (\array_key_exists('sample_file_content', $data) && $data['sample_file_content'] === null) {
            $object->setSampleFileContent(null);
        }
        if (\array_key_exists('sample_type', $data) && $data['sample_type'] !== null) {
            $object->setSampleType($data['sample_type']);
        } elseif (\array_key_exists('sample_type', $data) && $data['sample_type'] === null) {
            $object->setSampleType(null);
        }
        if (\array_key_exists('sample_url', $data) && $data['sample_url'] !== null) {
            $object->setSampleUrl($data['sample_url']);
        } elseif (\array_key_exists('sample_url', $data) && $data['sample_url'] === null) {
            $object->setSampleUrl(null);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['is_shareable'] = $object->getIsShareable();
        if (null !== $object->getLinkFile()) {
            $data['link_file'] = $object->getLinkFile();
        }
        if (null !== $object->getLinkFileContent()) {
            $data['link_file_content'] = $this->normalizer->normalize($object->getLinkFileContent(), 'json', $context);
        }
        $data['link_type'] = $object->getLinkType();
        if (null !== $object->getLinkUrl()) {
            $data['link_url'] = $object->getLinkUrl();
        }
        if (null !== $object->getNumberOfDownloads()) {
            $data['number_of_downloads'] = $object->getNumberOfDownloads();
        }
        $data['price'] = $object->getPrice();
        if (null !== $object->getSampleFile()) {
            $data['sample_file'] = $object->getSampleFile();
        }
        if (null !== $object->getSampleFileContent()) {
            $data['sample_file_content'] = $this->normalizer->normalize($object->getSampleFileContent(), 'json', $context);
        }
        $data['sample_type'] = $object->getSampleType();
        if (null !== $object->getSampleUrl()) {
            $data['sample_url'] = $object->getSampleUrl();
        }
        $data['sort_order'] = $object->getSortOrder();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}
