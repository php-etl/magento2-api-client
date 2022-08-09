<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\FrameworkDataVideoContentInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\FrameworkDataVideoContentInterface';
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
        $object = new \Kiboko\Magento\V2\Model\FrameworkDataVideoContentInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('media_type', $data)) {
            $object->setMediaType($data['media_type']);
        }
        if (\array_key_exists('video_description', $data)) {
            $object->setVideoDescription($data['video_description']);
        }
        if (\array_key_exists('video_metadata', $data)) {
            $object->setVideoMetadata($data['video_metadata']);
        }
        if (\array_key_exists('video_provider', $data)) {
            $object->setVideoProvider($data['video_provider']);
        }
        if (\array_key_exists('video_title', $data)) {
            $object->setVideoTitle($data['video_title']);
        }
        if (\array_key_exists('video_url', $data)) {
            $object->setVideoUrl($data['video_url']);
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