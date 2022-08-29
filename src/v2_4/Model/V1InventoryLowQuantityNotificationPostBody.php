<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventoryLowQuantityNotificationPostBody
{
    /**
     *
     *
     * @var InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[]
     */
    protected $sourceItemConfigurations;
    /**
     *
     *
     * @return InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[]
     */
    public function getSourceItemConfigurations(): array
    {
        return $this->sourceItemConfigurations;
    }
    /**
     *
     *
     * @param InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[] $sourceItemConfigurations
     *
     * @return self
     */
    public function setSourceItemConfigurations(array $sourceItemConfigurations): self
    {
        $this->sourceItemConfigurations = $sourceItemConfigurations;
        return $this;
    }
}
