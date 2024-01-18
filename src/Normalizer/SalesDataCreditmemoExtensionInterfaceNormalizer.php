<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesDataCreditmemoExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataCreditmemoExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] !== null) {
            $object->setGwBasePrice($data['gw_base_price']);
        }
        elseif (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] === null) {
            $object->setGwBasePrice(null);
        }
        if (\array_key_exists('gw_price', $data) && $data['gw_price'] !== null) {
            $object->setGwPrice($data['gw_price']);
        }
        elseif (\array_key_exists('gw_price', $data) && $data['gw_price'] === null) {
            $object->setGwPrice(null);
        }
        if (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] !== null) {
            $object->setGwItemsBasePrice($data['gw_items_base_price']);
        }
        elseif (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] === null) {
            $object->setGwItemsBasePrice(null);
        }
        if (\array_key_exists('gw_items_price', $data) && $data['gw_items_price'] !== null) {
            $object->setGwItemsPrice($data['gw_items_price']);
        }
        elseif (\array_key_exists('gw_items_price', $data) && $data['gw_items_price'] === null) {
            $object->setGwItemsPrice(null);
        }
        if (\array_key_exists('gw_card_base_price', $data) && $data['gw_card_base_price'] !== null) {
            $object->setGwCardBasePrice($data['gw_card_base_price']);
        }
        elseif (\array_key_exists('gw_card_base_price', $data) && $data['gw_card_base_price'] === null) {
            $object->setGwCardBasePrice(null);
        }
        if (\array_key_exists('gw_card_price', $data) && $data['gw_card_price'] !== null) {
            $object->setGwCardPrice($data['gw_card_price']);
        }
        elseif (\array_key_exists('gw_card_price', $data) && $data['gw_card_price'] === null) {
            $object->setGwCardPrice(null);
        }
        if (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] !== null) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        }
        elseif (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] === null) {
            $object->setGwBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] !== null) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        }
        elseif (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] === null) {
            $object->setGwTaxAmount(null);
        }
        if (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] !== null) {
            $object->setGwItemsBaseTaxAmount($data['gw_items_base_tax_amount']);
        }
        elseif (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] === null) {
            $object->setGwItemsBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] !== null) {
            $object->setGwItemsTaxAmount($data['gw_items_tax_amount']);
        }
        elseif (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] === null) {
            $object->setGwItemsTaxAmount(null);
        }
        if (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] !== null) {
            $object->setGwCardBaseTaxAmount($data['gw_card_base_tax_amount']);
        }
        elseif (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] === null) {
            $object->setGwCardBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] !== null) {
            $object->setGwCardTaxAmount($data['gw_card_tax_amount']);
        }
        elseif (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] === null) {
            $object->setGwCardTaxAmount(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('gwBasePrice') && null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if ($object->isInitialized('gwPrice') && null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if ($object->isInitialized('gwItemsBasePrice') && null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if ($object->isInitialized('gwItemsPrice') && null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if ($object->isInitialized('gwCardBasePrice') && null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if ($object->isInitialized('gwCardPrice') && null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
        }
        if ($object->isInitialized('gwBaseTaxAmount') && null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if ($object->isInitialized('gwTaxAmount') && null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if ($object->isInitialized('gwItemsBaseTaxAmount') && null !== $object->getGwItemsBaseTaxAmount()) {
            $data['gw_items_base_tax_amount'] = $object->getGwItemsBaseTaxAmount();
        }
        if ($object->isInitialized('gwItemsTaxAmount') && null !== $object->getGwItemsTaxAmount()) {
            $data['gw_items_tax_amount'] = $object->getGwItemsTaxAmount();
        }
        if ($object->isInitialized('gwCardBaseTaxAmount') && null !== $object->getGwCardBaseTaxAmount()) {
            $data['gw_card_base_tax_amount'] = $object->getGwCardBaseTaxAmount();
        }
        if ($object->isInitialized('gwCardTaxAmount') && null !== $object->getGwCardTaxAmount()) {
            $data['gw_card_tax_amount'] = $object->getGwCardTaxAmount();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataCreditmemoExtensionInterface' => false);
    }
}