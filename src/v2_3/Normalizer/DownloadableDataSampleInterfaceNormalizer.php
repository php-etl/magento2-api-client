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

class DownloadableDataSampleInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\DownloadableDataSampleInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\DownloadableDataSampleInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\DownloadableDataSampleInterface();
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
        if (\array_key_exists('sample_file', $data) && $data['sample_file'] !== null) {
            $object->setSampleFile($data['sample_file']);
        } elseif (\array_key_exists('sample_file', $data) && $data['sample_file'] === null) {
            $object->setSampleFile(null);
        }
        if (\array_key_exists('sample_file_content', $data) && $data['sample_file_content'] !== null) {
            $object->setSampleFileContent($this->denormalizer->denormalize($data['sample_file_content'], 'Kiboko\\Magento\\V2_3\\Model\\DownloadableDataFileContentInterface', 'json', $context));
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
        $data['title'] = $object->getTitle();
        return $data;
    }
}
