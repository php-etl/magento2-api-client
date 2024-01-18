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
class CatalogInventoryDataStockItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogInventoryDataStockItemInterface();
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (\array_key_exists('min_qty', $data) && \is_int($data['min_qty'])) {
            $data['min_qty'] = (double) $data['min_qty'];
        }
        if (\array_key_exists('min_sale_qty', $data) && \is_int($data['min_sale_qty'])) {
            $data['min_sale_qty'] = (double) $data['min_sale_qty'];
        }
        if (\array_key_exists('max_sale_qty', $data) && \is_int($data['max_sale_qty'])) {
            $data['max_sale_qty'] = (double) $data['max_sale_qty'];
        }
        if (\array_key_exists('notify_stock_qty', $data) && \is_int($data['notify_stock_qty'])) {
            $data['notify_stock_qty'] = (double) $data['notify_stock_qty'];
        }
        if (\array_key_exists('qty_increments', $data) && \is_int($data['qty_increments'])) {
            $data['qty_increments'] = (double) $data['qty_increments'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('stock_id', $data) && $data['stock_id'] !== null) {
            $object->setStockId($data['stock_id']);
        }
        elseif (\array_key_exists('stock_id', $data) && $data['stock_id'] === null) {
            $object->setStockId(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('is_in_stock', $data) && $data['is_in_stock'] !== null) {
            $object->setIsInStock($data['is_in_stock']);
        }
        elseif (\array_key_exists('is_in_stock', $data) && $data['is_in_stock'] === null) {
            $object->setIsInStock(null);
        }
        if (\array_key_exists('is_qty_decimal', $data) && $data['is_qty_decimal'] !== null) {
            $object->setIsQtyDecimal($data['is_qty_decimal']);
        }
        elseif (\array_key_exists('is_qty_decimal', $data) && $data['is_qty_decimal'] === null) {
            $object->setIsQtyDecimal(null);
        }
        if (\array_key_exists('show_default_notification_message', $data) && $data['show_default_notification_message'] !== null) {
            $object->setShowDefaultNotificationMessage($data['show_default_notification_message']);
        }
        elseif (\array_key_exists('show_default_notification_message', $data) && $data['show_default_notification_message'] === null) {
            $object->setShowDefaultNotificationMessage(null);
        }
        if (\array_key_exists('use_config_min_qty', $data) && $data['use_config_min_qty'] !== null) {
            $object->setUseConfigMinQty($data['use_config_min_qty']);
        }
        elseif (\array_key_exists('use_config_min_qty', $data) && $data['use_config_min_qty'] === null) {
            $object->setUseConfigMinQty(null);
        }
        if (\array_key_exists('min_qty', $data) && $data['min_qty'] !== null) {
            $object->setMinQty($data['min_qty']);
        }
        elseif (\array_key_exists('min_qty', $data) && $data['min_qty'] === null) {
            $object->setMinQty(null);
        }
        if (\array_key_exists('use_config_min_sale_qty', $data) && $data['use_config_min_sale_qty'] !== null) {
            $object->setUseConfigMinSaleQty($data['use_config_min_sale_qty']);
        }
        elseif (\array_key_exists('use_config_min_sale_qty', $data) && $data['use_config_min_sale_qty'] === null) {
            $object->setUseConfigMinSaleQty(null);
        }
        if (\array_key_exists('min_sale_qty', $data) && $data['min_sale_qty'] !== null) {
            $object->setMinSaleQty($data['min_sale_qty']);
        }
        elseif (\array_key_exists('min_sale_qty', $data) && $data['min_sale_qty'] === null) {
            $object->setMinSaleQty(null);
        }
        if (\array_key_exists('use_config_max_sale_qty', $data) && $data['use_config_max_sale_qty'] !== null) {
            $object->setUseConfigMaxSaleQty($data['use_config_max_sale_qty']);
        }
        elseif (\array_key_exists('use_config_max_sale_qty', $data) && $data['use_config_max_sale_qty'] === null) {
            $object->setUseConfigMaxSaleQty(null);
        }
        if (\array_key_exists('max_sale_qty', $data) && $data['max_sale_qty'] !== null) {
            $object->setMaxSaleQty($data['max_sale_qty']);
        }
        elseif (\array_key_exists('max_sale_qty', $data) && $data['max_sale_qty'] === null) {
            $object->setMaxSaleQty(null);
        }
        if (\array_key_exists('use_config_backorders', $data) && $data['use_config_backorders'] !== null) {
            $object->setUseConfigBackorders($data['use_config_backorders']);
        }
        elseif (\array_key_exists('use_config_backorders', $data) && $data['use_config_backorders'] === null) {
            $object->setUseConfigBackorders(null);
        }
        if (\array_key_exists('backorders', $data) && $data['backorders'] !== null) {
            $object->setBackorders($data['backorders']);
        }
        elseif (\array_key_exists('backorders', $data) && $data['backorders'] === null) {
            $object->setBackorders(null);
        }
        if (\array_key_exists('use_config_notify_stock_qty', $data) && $data['use_config_notify_stock_qty'] !== null) {
            $object->setUseConfigNotifyStockQty($data['use_config_notify_stock_qty']);
        }
        elseif (\array_key_exists('use_config_notify_stock_qty', $data) && $data['use_config_notify_stock_qty'] === null) {
            $object->setUseConfigNotifyStockQty(null);
        }
        if (\array_key_exists('notify_stock_qty', $data) && $data['notify_stock_qty'] !== null) {
            $object->setNotifyStockQty($data['notify_stock_qty']);
        }
        elseif (\array_key_exists('notify_stock_qty', $data) && $data['notify_stock_qty'] === null) {
            $object->setNotifyStockQty(null);
        }
        if (\array_key_exists('use_config_qty_increments', $data) && $data['use_config_qty_increments'] !== null) {
            $object->setUseConfigQtyIncrements($data['use_config_qty_increments']);
        }
        elseif (\array_key_exists('use_config_qty_increments', $data) && $data['use_config_qty_increments'] === null) {
            $object->setUseConfigQtyIncrements(null);
        }
        if (\array_key_exists('qty_increments', $data) && $data['qty_increments'] !== null) {
            $object->setQtyIncrements($data['qty_increments']);
        }
        elseif (\array_key_exists('qty_increments', $data) && $data['qty_increments'] === null) {
            $object->setQtyIncrements(null);
        }
        if (\array_key_exists('use_config_enable_qty_inc', $data) && $data['use_config_enable_qty_inc'] !== null) {
            $object->setUseConfigEnableQtyInc($data['use_config_enable_qty_inc']);
        }
        elseif (\array_key_exists('use_config_enable_qty_inc', $data) && $data['use_config_enable_qty_inc'] === null) {
            $object->setUseConfigEnableQtyInc(null);
        }
        if (\array_key_exists('enable_qty_increments', $data) && $data['enable_qty_increments'] !== null) {
            $object->setEnableQtyIncrements($data['enable_qty_increments']);
        }
        elseif (\array_key_exists('enable_qty_increments', $data) && $data['enable_qty_increments'] === null) {
            $object->setEnableQtyIncrements(null);
        }
        if (\array_key_exists('use_config_manage_stock', $data) && $data['use_config_manage_stock'] !== null) {
            $object->setUseConfigManageStock($data['use_config_manage_stock']);
        }
        elseif (\array_key_exists('use_config_manage_stock', $data) && $data['use_config_manage_stock'] === null) {
            $object->setUseConfigManageStock(null);
        }
        if (\array_key_exists('manage_stock', $data) && $data['manage_stock'] !== null) {
            $object->setManageStock($data['manage_stock']);
        }
        elseif (\array_key_exists('manage_stock', $data) && $data['manage_stock'] === null) {
            $object->setManageStock(null);
        }
        if (\array_key_exists('low_stock_date', $data) && $data['low_stock_date'] !== null) {
            $object->setLowStockDate($data['low_stock_date']);
        }
        elseif (\array_key_exists('low_stock_date', $data) && $data['low_stock_date'] === null) {
            $object->setLowStockDate(null);
        }
        if (\array_key_exists('is_decimal_divided', $data) && $data['is_decimal_divided'] !== null) {
            $object->setIsDecimalDivided($data['is_decimal_divided']);
        }
        elseif (\array_key_exists('is_decimal_divided', $data) && $data['is_decimal_divided'] === null) {
            $object->setIsDecimalDivided(null);
        }
        if (\array_key_exists('stock_status_changed_auto', $data) && $data['stock_status_changed_auto'] !== null) {
            $object->setStockStatusChangedAuto($data['stock_status_changed_auto']);
        }
        elseif (\array_key_exists('stock_status_changed_auto', $data) && $data['stock_status_changed_auto'] === null) {
            $object->setStockStatusChangedAuto(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
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
        if ($object->isInitialized('itemId') && null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        if ($object->isInitialized('productId') && null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if ($object->isInitialized('stockId') && null !== $object->getStockId()) {
            $data['stock_id'] = $object->getStockId();
        }
        $data['qty'] = $object->getQty();
        $data['is_in_stock'] = $object->getIsInStock();
        $data['is_qty_decimal'] = $object->getIsQtyDecimal();
        $data['show_default_notification_message'] = $object->getShowDefaultNotificationMessage();
        $data['use_config_min_qty'] = $object->getUseConfigMinQty();
        $data['min_qty'] = $object->getMinQty();
        $data['use_config_min_sale_qty'] = $object->getUseConfigMinSaleQty();
        $data['min_sale_qty'] = $object->getMinSaleQty();
        $data['use_config_max_sale_qty'] = $object->getUseConfigMaxSaleQty();
        $data['max_sale_qty'] = $object->getMaxSaleQty();
        $data['use_config_backorders'] = $object->getUseConfigBackorders();
        $data['backorders'] = $object->getBackorders();
        $data['use_config_notify_stock_qty'] = $object->getUseConfigNotifyStockQty();
        $data['notify_stock_qty'] = $object->getNotifyStockQty();
        $data['use_config_qty_increments'] = $object->getUseConfigQtyIncrements();
        $data['qty_increments'] = $object->getQtyIncrements();
        $data['use_config_enable_qty_inc'] = $object->getUseConfigEnableQtyInc();
        $data['enable_qty_increments'] = $object->getEnableQtyIncrements();
        $data['use_config_manage_stock'] = $object->getUseConfigManageStock();
        $data['manage_stock'] = $object->getManageStock();
        $data['low_stock_date'] = $object->getLowStockDate();
        $data['is_decimal_divided'] = $object->getIsDecimalDivided();
        $data['stock_status_changed_auto'] = $object->getStockStatusChangedAuto();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface' => false);
    }
}