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

class InventorySourceSelectionApiDataSourceSelectionResultInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\InventorySourceSelectionApiDataSourceSelectionResultInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\InventorySourceSelectionApiDataSourceSelectionResultInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\InventorySourceSelectionApiDataSourceSelectionResultInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('source_selection_items', $data)) {
            $values = array();
            foreach ($data['source_selection_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\InventorySourceSelectionApiDataSourceSelectionItemInterface', 'json', $context);
            }
            $object->setSourceSelectionItems($values);
        }
        if (\array_key_exists('shippable', $data)) {
            $object->setShippable($data['shippable']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getSourceSelectionItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['source_selection_items'] = $values;
        $data['shippable'] = $object->getShippable();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
