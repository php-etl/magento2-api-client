<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CatalogInventoryDataStockItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\CatalogInventoryDataStockItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\CatalogInventoryDataStockItemInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\CatalogInventoryDataStockItemInterface();
        if (\array_key_exists('max_sale_qty', $data) && \is_int($data['max_sale_qty'])) {
            $data['max_sale_qty'] = (float) $data['max_sale_qty'];
        }
        if (\array_key_exists('min_qty', $data) && \is_int($data['min_qty'])) {
            $data['min_qty'] = (float) $data['min_qty'];
        }
        if (\array_key_exists('min_sale_qty', $data) && \is_int($data['min_sale_qty'])) {
            $data['min_sale_qty'] = (float) $data['min_sale_qty'];
        }
        if (\array_key_exists('notify_stock_qty', $data) && \is_int($data['notify_stock_qty'])) {
            $data['notify_stock_qty'] = (float) $data['notify_stock_qty'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (float) $data['qty'];
        }
        if (\array_key_exists('qty_increments', $data) && \is_int($data['qty_increments'])) {
            $data['qty_increments'] = (float) $data['qty_increments'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('backorders', $data)) {
            $object->setBackorders($data['backorders']);
        }
        if (\array_key_exists('enable_qty_increments', $data)) {
            $object->setEnableQtyIncrements($data['enable_qty_increments']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('is_decimal_divided', $data)) {
            $object->setIsDecimalDivided($data['is_decimal_divided']);
        }
        if (\array_key_exists('is_in_stock', $data)) {
            $object->setIsInStock($data['is_in_stock']);
        }
        if (\array_key_exists('is_qty_decimal', $data)) {
            $object->setIsQtyDecimal($data['is_qty_decimal']);
        }
        if (\array_key_exists('item_id', $data)) {
            $object->setItemId($data['item_id']);
        }
        if (\array_key_exists('low_stock_date', $data)) {
            $object->setLowStockDate($data['low_stock_date']);
        }
        if (\array_key_exists('manage_stock', $data)) {
            $object->setManageStock($data['manage_stock']);
        }
        if (\array_key_exists('max_sale_qty', $data)) {
            $object->setMaxSaleQty($data['max_sale_qty']);
        }
        if (\array_key_exists('min_qty', $data)) {
            $object->setMinQty($data['min_qty']);
        }
        if (\array_key_exists('min_sale_qty', $data)) {
            $object->setMinSaleQty($data['min_sale_qty']);
        }
        if (\array_key_exists('notify_stock_qty', $data)) {
            $object->setNotifyStockQty($data['notify_stock_qty']);
        }
        if (\array_key_exists('product_id', $data)) {
            $object->setProductId($data['product_id']);
        }
        if (\array_key_exists('qty', $data)) {
            $object->setQty($data['qty']);
        }
        if (\array_key_exists('qty_increments', $data)) {
            $object->setQtyIncrements($data['qty_increments']);
        }
        if (\array_key_exists('show_default_notification_message', $data)) {
            $object->setShowDefaultNotificationMessage($data['show_default_notification_message']);
        }
        if (\array_key_exists('stock_id', $data)) {
            $object->setStockId($data['stock_id']);
        }
        if (\array_key_exists('stock_status_changed_auto', $data)) {
            $object->setStockStatusChangedAuto($data['stock_status_changed_auto']);
        }
        if (\array_key_exists('use_config_backorders', $data)) {
            $object->setUseConfigBackorders($data['use_config_backorders']);
        }
        if (\array_key_exists('use_config_enable_qty_inc', $data)) {
            $object->setUseConfigEnableQtyInc($data['use_config_enable_qty_inc']);
        }
        if (\array_key_exists('use_config_manage_stock', $data)) {
            $object->setUseConfigManageStock($data['use_config_manage_stock']);
        }
        if (\array_key_exists('use_config_max_sale_qty', $data)) {
            $object->setUseConfigMaxSaleQty($data['use_config_max_sale_qty']);
        }
        if (\array_key_exists('use_config_min_qty', $data)) {
            $object->setUseConfigMinQty($data['use_config_min_qty']);
        }
        if (\array_key_exists('use_config_min_sale_qty', $data)) {
            $object->setUseConfigMinSaleQty($data['use_config_min_sale_qty']);
        }
        if (\array_key_exists('use_config_notify_stock_qty', $data)) {
            $object->setUseConfigNotifyStockQty($data['use_config_notify_stock_qty']);
        }
        if (\array_key_exists('use_config_qty_increments', $data)) {
            $object->setUseConfigQtyIncrements($data['use_config_qty_increments']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['backorders'] = $object->getBackorders();
        $data['enable_qty_increments'] = $object->getEnableQtyIncrements();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['is_decimal_divided'] = $object->getIsDecimalDivided();
        $data['is_in_stock'] = $object->getIsInStock();
        $data['is_qty_decimal'] = $object->getIsQtyDecimal();
        if (null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        $data['low_stock_date'] = $object->getLowStockDate();
        $data['manage_stock'] = $object->getManageStock();
        $data['max_sale_qty'] = $object->getMaxSaleQty();
        $data['min_qty'] = $object->getMinQty();
        $data['min_sale_qty'] = $object->getMinSaleQty();
        $data['notify_stock_qty'] = $object->getNotifyStockQty();
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        $data['qty'] = $object->getQty();
        $data['qty_increments'] = $object->getQtyIncrements();
        $data['show_default_notification_message'] = $object->getShowDefaultNotificationMessage();
        if (null !== $object->getStockId()) {
            $data['stock_id'] = $object->getStockId();
        }
        $data['stock_status_changed_auto'] = $object->getStockStatusChangedAuto();
        $data['use_config_backorders'] = $object->getUseConfigBackorders();
        $data['use_config_enable_qty_inc'] = $object->getUseConfigEnableQtyInc();
        $data['use_config_manage_stock'] = $object->getUseConfigManageStock();
        $data['use_config_max_sale_qty'] = $object->getUseConfigMaxSaleQty();
        $data['use_config_min_qty'] = $object->getUseConfigMinQty();
        $data['use_config_min_sale_qty'] = $object->getUseConfigMinSaleQty();
        $data['use_config_notify_stock_qty'] = $object->getUseConfigNotifyStockQty();
        $data['use_config_qty_increments'] = $object->getUseConfigQtyIncrements();
        return $data;
    }
}
