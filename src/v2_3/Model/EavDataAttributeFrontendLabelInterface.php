<?php

namespace Kiboko\Magento\v2_3\Model;

class EavDataAttributeFrontendLabelInterface
{
    /**
     * Store id
     *
     * @var int
     */
    protected $storeId;
    /**
     * Option label
     *
     * @var string
     */
    protected $label;
    /**
     * Store id
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Option label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }
}
