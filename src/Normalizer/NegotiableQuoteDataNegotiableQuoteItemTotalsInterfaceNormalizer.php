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
class NegotiableQuoteDataNegotiableQuoteItemTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
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
        $object = new \Kiboko\Magento\V2\Model\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_cart_price', $data)) {
            $object->setBaseCartPrice($data['base_cart_price']);
        }
        if (\array_key_exists('base_cart_price_incl_tax', $data)) {
            $object->setBaseCartPriceInclTax($data['base_cart_price_incl_tax']);
        }
        if (\array_key_exists('base_cart_tax', $data)) {
            $object->setBaseCartTax($data['base_cart_tax']);
        }
        if (\array_key_exists('base_catalog_price', $data)) {
            $object->setBaseCatalogPrice($data['base_catalog_price']);
        }
        if (\array_key_exists('base_catalog_price_incl_tax', $data)) {
            $object->setBaseCatalogPriceInclTax($data['base_catalog_price_incl_tax']);
        }
        if (\array_key_exists('cart_price', $data)) {
            $object->setCartPrice($data['cart_price']);
        }
        if (\array_key_exists('cart_price_incl_tax', $data)) {
            $object->setCartPriceInclTax($data['cart_price_incl_tax']);
        }
        if (\array_key_exists('cart_tax', $data)) {
            $object->setCartTax($data['cart_tax']);
        }
        if (\array_key_exists('catalog_price', $data)) {
            $object->setCatalogPrice($data['catalog_price']);
        }
        if (\array_key_exists('catalog_price_incl_tax', $data)) {
            $object->setCatalogPriceInclTax($data['catalog_price_incl_tax']);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($data['cost']);
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