<?php

namespace Kiboko\Magento\V2\Model;

class GiftMessageDataMessageExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $entityId;
    /**
     *
     *
     * @var string
     */
    protected $entityType;
    /**
     *
     *
     * @var int
     */
    protected $wrappingId;
    /**
     *
     *
     * @var bool
     */
    protected $wrappingAllowGiftReceipt;
    /**
     *
     *
     * @var bool
     */
    protected $wrappingAddPrintedCard;
    /**
     *
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     *
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     *
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getWrappingId(): int
    {
        return $this->wrappingId;
    }
    /**
     *
     *
     * @param int $wrappingId
     *
     * @return self
     */
    public function setWrappingId(int $wrappingId): self
    {
        $this->wrappingId = $wrappingId;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getWrappingAllowGiftReceipt(): bool
    {
        return $this->wrappingAllowGiftReceipt;
    }
    /**
     *
     *
     * @param bool $wrappingAllowGiftReceipt
     *
     * @return self
     */
    public function setWrappingAllowGiftReceipt(bool $wrappingAllowGiftReceipt): self
    {
        $this->wrappingAllowGiftReceipt = $wrappingAllowGiftReceipt;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getWrappingAddPrintedCard(): bool
    {
        return $this->wrappingAddPrintedCard;
    }
    /**
     *
     *
     * @param bool $wrappingAddPrintedCard
     *
     * @return self
     */
    public function setWrappingAddPrintedCard(bool $wrappingAddPrintedCard): self
    {
        $this->wrappingAddPrintedCard = $wrappingAddPrintedCard;
        return $this;
    }
}
