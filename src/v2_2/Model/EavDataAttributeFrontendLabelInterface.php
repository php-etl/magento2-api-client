<?php

namespace Kiboko\Magento\V2_2\Model;

class EavDataAttributeFrontendLabelInterface
{
    /**
     * Option label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Store id
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Option label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Store id
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
