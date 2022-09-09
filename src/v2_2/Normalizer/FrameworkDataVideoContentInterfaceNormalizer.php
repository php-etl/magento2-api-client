<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FrameworkDataVideoContentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\FrameworkDataVideoContentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\FrameworkDataVideoContentInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\FrameworkDataVideoContentInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('media_type', $data) && $data['media_type'] !== null) {
            $object->setMediaType($data['media_type']);
        } elseif (\array_key_exists('media_type', $data) && $data['media_type'] === null) {
            $object->setMediaType(null);
        }
        if (\array_key_exists('video_description', $data) && $data['video_description'] !== null) {
            $object->setVideoDescription($data['video_description']);
        } elseif (\array_key_exists('video_description', $data) && $data['video_description'] === null) {
            $object->setVideoDescription(null);
        }
        if (\array_key_exists('video_metadata', $data) && $data['video_metadata'] !== null) {
            $object->setVideoMetadata($data['video_metadata']);
        } elseif (\array_key_exists('video_metadata', $data) && $data['video_metadata'] === null) {
            $object->setVideoMetadata(null);
        }
        if (\array_key_exists('video_provider', $data) && $data['video_provider'] !== null) {
            $object->setVideoProvider($data['video_provider']);
        } elseif (\array_key_exists('video_provider', $data) && $data['video_provider'] === null) {
            $object->setVideoProvider(null);
        }
        if (\array_key_exists('video_title', $data) && $data['video_title'] !== null) {
            $object->setVideoTitle($data['video_title']);
        } elseif (\array_key_exists('video_title', $data) && $data['video_title'] === null) {
            $object->setVideoTitle(null);
        }
        if (\array_key_exists('video_url', $data) && $data['video_url'] !== null) {
            $object->setVideoUrl($data['video_url']);
        } elseif (\array_key_exists('video_url', $data) && $data['video_url'] === null) {
            $object->setVideoUrl(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['media_type'] = $object->getMediaType();
        $data['video_description'] = $object->getVideoDescription();
        $data['video_metadata'] = $object->getVideoMetadata();
        $data['video_provider'] = $object->getVideoProvider();
        $data['video_title'] = $object->getVideoTitle();
        $data['video_url'] = $object->getVideoUrl();
        return $data;
    }
}
