<?php

namespace Kiboko\Magento\V2_2\Model;

class GiftMessageDataMessageExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $entityId;
    /**
     *
     *
     * @var string|null
     */
    protected $entityType;
    /**
     *
     *
     * @var bool|null
     */
    protected $wrappingAddPrintedCard;
    /**
     *
     *
     * @var bool|null
     */
    protected $wrappingAllowGiftReceipt;
    /**
     *
     *
     * @var int|null
     */
    protected $wrappingId;
    /**
     *
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     *
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }
    /**
     *
     *
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getWrappingAddPrintedCard(): ?bool
    {
        return $this->wrappingAddPrintedCard;
    }
    /**
     *
     *
     * @param bool|null $wrappingAddPrintedCard
     *
     * @return self
     */
    public function setWrappingAddPrintedCard(?bool $wrappingAddPrintedCard): self
    {
        $this->wrappingAddPrintedCard = $wrappingAddPrintedCard;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getWrappingAllowGiftReceipt(): ?bool
    {
        return $this->wrappingAllowGiftReceipt;
    }
    /**
     *
     *
     * @param bool|null $wrappingAllowGiftReceipt
     *
     * @return self
     */
    public function setWrappingAllowGiftReceipt(?bool $wrappingAllowGiftReceipt): self
    {
        $this->wrappingAllowGiftReceipt = $wrappingAllowGiftReceipt;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWrappingId(): ?int
    {
        return $this->wrappingId;
    }
    /**
     *
     *
     * @param int|null $wrappingId
     *
     * @return self
     */
    public function setWrappingId(?int $wrappingId): self
    {
        $this->wrappingId = $wrappingId;
        return $this;
    }
}
