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

class V1ProductsSkuDownloadableLinksSamplesIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\V1ProductsSkuDownloadableLinksSamplesIdPutBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\V1ProductsSkuDownloadableLinksSamplesIdPutBody';
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
        $object = new \Kiboko\Magento\V2_4\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isGlobalScopeContent', $data) && $data['isGlobalScopeContent'] !== null) {
            $object->setIsGlobalScopeContent($data['isGlobalScopeContent']);
        } elseif (\array_key_exists('isGlobalScopeContent', $data) && $data['isGlobalScopeContent'] === null) {
            $object->setIsGlobalScopeContent(null);
        }
        if (\array_key_exists('sample', $data) && $data['sample'] !== null) {
            $object->setSample($this->denormalizer->denormalize($data['sample'], 'Kiboko\\Magento\\V2_4\\Model\\DownloadableDataSampleInterface', 'json', $context));
        } elseif (\array_key_exists('sample', $data) && $data['sample'] === null) {
            $object->setSample(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsGlobalScopeContent()) {
            $data['isGlobalScopeContent'] = $object->getIsGlobalScopeContent();
        }
        $data['sample'] = $this->normalizer->normalize($object->getSample(), 'json', $context);
        return $data;
    }
}
