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

class DownloadableDataLinkInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataLinkInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataLinkInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\DownloadableDataLinkInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_shareable', $data)) {
            $object->setIsShareable($data['is_shareable']);
        }
        if (\array_key_exists('link_file', $data)) {
            $object->setLinkFile($data['link_file']);
        }
        if (\array_key_exists('link_file_content', $data)) {
            $object->setLinkFileContent($this->denormalizer->denormalize($data['link_file_content'], 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataFileContentInterface', 'json', $context));
        }
        if (\array_key_exists('link_type', $data)) {
            $object->setLinkType($data['link_type']);
        }
        if (\array_key_exists('link_url', $data)) {
            $object->setLinkUrl($data['link_url']);
        }
        if (\array_key_exists('number_of_downloads', $data)) {
            $object->setNumberOfDownloads($data['number_of_downloads']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('sample_file', $data)) {
            $object->setSampleFile($data['sample_file']);
        }
        if (\array_key_exists('sample_file_content', $data)) {
            $object->setSampleFileContent($this->denormalizer->denormalize($data['sample_file_content'], 'Kiboko\\Magento\\v2_3\\Model\\DownloadableDataFileContentInterface', 'json', $context));
        }
        if (\array_key_exists('sample_type', $data)) {
            $object->setSampleType($data['sample_type']);
        }
        if (\array_key_exists('sample_url', $data)) {
            $object->setSampleUrl($data['sample_url']);
        }
        if (\array_key_exists('sort_order', $data)) {
            $object->setSortOrder($data['sort_order']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
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
