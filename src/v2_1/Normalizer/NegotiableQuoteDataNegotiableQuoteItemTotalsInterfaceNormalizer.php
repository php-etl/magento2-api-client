<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NegotiableQuoteDataNegotiableQuoteItemTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface();
        if (\array_key_exists('base_cart_price', $data) && \is_int($data['base_cart_price'])) {
            $data['base_cart_price'] = (float) $data['base_cart_price'];
        }
        if (\array_key_exists('base_cart_price_incl_tax', $data) && \is_int($data['base_cart_price_incl_tax'])) {
            $data['base_cart_price_incl_tax'] = (float) $data['base_cart_price_incl_tax'];
        }
        if (\array_key_exists('base_cart_tax', $data) && \is_int($data['base_cart_tax'])) {
            $data['base_cart_tax'] = (float) $data['base_cart_tax'];
        }
        if (\array_key_exists('base_catalog_price', $data) && \is_int($data['base_catalog_price'])) {
            $data['base_catalog_price'] = (float) $data['base_catalog_price'];
        }
        if (\array_key_exists('base_catalog_price_incl_tax', $data) && \is_int($data['base_catalog_price_incl_tax'])) {
            $data['base_catalog_price_incl_tax'] = (float) $data['base_catalog_price_incl_tax'];
        }
        if (\array_key_exists('cart_price', $data) && \is_int($data['cart_price'])) {
            $data['cart_price'] = (float) $data['cart_price'];
        }
        if (\array_key_exists('cart_price_incl_tax', $data) && \is_int($data['cart_price_incl_tax'])) {
            $data['cart_price_incl_tax'] = (float) $data['cart_price_incl_tax'];
        }
        if (\array_key_exists('cart_tax', $data) && \is_int($data['cart_tax'])) {
            $data['cart_tax'] = (float) $data['cart_tax'];
        }
        if (\array_key_exists('catalog_price', $data) && \is_int($data['catalog_price'])) {
            $data['catalog_price'] = (float) $data['catalog_price'];
        }
        if (\array_key_exists('catalog_price_incl_tax', $data) && \is_int($data['catalog_price_incl_tax'])) {
            $data['catalog_price_incl_tax'] = (float) $data['catalog_price_incl_tax'];
        }
        if (\array_key_exists('cost', $data) && \is_int($data['cost'])) {
            $data['cost'] = (float) $data['cost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_cart_price', $data) && $data['base_cart_price'] !== null) {
            $object->setBaseCartPrice($data['base_cart_price']);
        } elseif (\array_key_exists('base_cart_price', $data) && $data['base_cart_price'] === null) {
            $object->setBaseCartPrice(null);
        }
        if (\array_key_exists('base_cart_price_incl_tax', $data) && $data['base_cart_price_incl_tax'] !== null) {
            $object->setBaseCartPriceInclTax($data['base_cart_price_incl_tax']);
        } elseif (\array_key_exists('base_cart_price_incl_tax', $data) && $data['base_cart_price_incl_tax'] === null) {
            $object->setBaseCartPriceInclTax(null);
        }
        if (\array_key_exists('base_cart_tax', $data) && $data['base_cart_tax'] !== null) {
            $object->setBaseCartTax($data['base_cart_tax']);
        } elseif (\array_key_exists('base_cart_tax', $data) && $data['base_cart_tax'] === null) {
            $object->setBaseCartTax(null);
        }
        if (\array_key_exists('base_catalog_price', $data) && $data['base_catalog_price'] !== null) {
            $object->setBaseCatalogPrice($data['base_catalog_price']);
        } elseif (\array_key_exists('base_catalog_price', $data) && $data['base_catalog_price'] === null) {
            $object->setBaseCatalogPrice(null);
        }
        if (\array_key_exists('base_catalog_price_incl_tax', $data) && $data['base_catalog_price_incl_tax'] !== null) {
            $object->setBaseCatalogPriceInclTax($data['base_catalog_price_incl_tax']);
        } elseif (\array_key_exists('base_catalog_price_incl_tax', $data) && $data['base_catalog_price_incl_tax'] === null) {
            $object->setBaseCatalogPriceInclTax(null);
        }
        if (\array_key_exists('cart_price', $data) && $data['cart_price'] !== null) {
            $object->setCartPrice($data['cart_price']);
        } elseif (\array_key_exists('cart_price', $data) && $data['cart_price'] === null) {
            $object->setCartPrice(null);
        }
        if (\array_key_exists('cart_price_incl_tax', $data) && $data['cart_price_incl_tax'] !== null) {
            $object->setCartPriceInclTax($data['cart_price_incl_tax']);
        } elseif (\array_key_exists('cart_price_incl_tax', $data) && $data['cart_price_incl_tax'] === null) {
            $object->setCartPriceInclTax(null);
        }
        if (\array_key_exists('cart_tax', $data) && $data['cart_tax'] !== null) {
            $object->setCartTax($data['cart_tax']);
        } elseif (\array_key_exists('cart_tax', $data) && $data['cart_tax'] === null) {
            $object->setCartTax(null);
        }
        if (\array_key_exists('catalog_price', $data) && $data['catalog_price'] !== null) {
            $object->setCatalogPrice($data['catalog_price']);
        } elseif (\array_key_exists('catalog_price', $data) && $data['catalog_price'] === null) {
            $object->setCatalogPrice(null);
        }
        if (\array_key_exists('catalog_price_incl_tax', $data) && $data['catalog_price_incl_tax'] !== null) {
            $object->setCatalogPriceInclTax($data['catalog_price_incl_tax']);
        } elseif (\array_key_exists('catalog_price_incl_tax', $data) && $data['catalog_price_incl_tax'] === null) {
            $object->setCatalogPriceInclTax(null);
        }
        if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
            $object->setCost($data['cost']);
        } elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
            $object->setCost(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['base_cart_price'] = $object->getBaseCartPrice();
        $data['base_cart_price_incl_tax'] = $object->getBaseCartPriceInclTax();
        $data['base_cart_tax'] = $object->getBaseCartTax();
        $data['base_catalog_price'] = $object->getBaseCatalogPrice();
        $data['base_catalog_price_incl_tax'] = $object->getBaseCatalogPriceInclTax();
        $data['cart_price'] = $object->getCartPrice();
        $data['cart_price_incl_tax'] = $object->getCartPriceInclTax();
        $data['cart_tax'] = $object->getCartTax();
        $data['catalog_price'] = $object->getCatalogPrice();
        $data['catalog_price_incl_tax'] = $object->getCatalogPriceInclTax();
        $data['cost'] = $object->getCost();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
