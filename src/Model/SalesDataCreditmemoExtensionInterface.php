<?php

namespace Kiboko\Magento\Model;

class SalesDataCreditmemoExtensionInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $gwBasePrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwItemsBasePrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwItemsPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwCardBasePrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwCardPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwBaseTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwItemsBaseTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwItemsTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwCardBaseTaxAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $gwCardTaxAmount;
    /**
     * 
     *
     * @return string|null
     */
    public function getGwBasePrice() : ?string
    {
        return $this->gwBasePrice;
    }
    /**
     * 
     *
     * @param string|null $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(?string $gwBasePrice) : self
    {
        $this->initialized['gwBasePrice'] = true;
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwPrice() : ?string
    {
        return $this->gwPrice;
    }
    /**
     * 
     *
     * @param string|null $gwPrice
     *
     * @return self
     */
    public function setGwPrice(?string $gwPrice) : self
    {
        $this->initialized['gwPrice'] = true;
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwItemsBasePrice() : ?string
    {
        return $this->gwItemsBasePrice;
    }
    /**
     * 
     *
     * @param string|null $gwItemsBasePrice
     *
     * @return self
     */
    public function setGwItemsBasePrice(?string $gwItemsBasePrice) : self
    {
        $this->initialized['gwItemsBasePrice'] = true;
        $this->gwItemsBasePrice = $gwItemsBasePrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwItemsPrice() : ?string
    {
        return $this->gwItemsPrice;
    }
    /**
     * 
     *
     * @param string|null $gwItemsPrice
     *
     * @return self
     */
    public function setGwItemsPrice(?string $gwItemsPrice) : self
    {
        $this->initialized['gwItemsPrice'] = true;
        $this->gwItemsPrice = $gwItemsPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwCardBasePrice() : ?string
    {
        return $this->gwCardBasePrice;
    }
    /**
     * 
     *
     * @param string|null $gwCardBasePrice
     *
     * @return self
     */
    public function setGwCardBasePrice(?string $gwCardBasePrice) : self
    {
        $this->initialized['gwCardBasePrice'] = true;
        $this->gwCardBasePrice = $gwCardBasePrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwCardPrice() : ?string
    {
        return $this->gwCardPrice;
    }
    /**
     * 
     *
     * @param string|null $gwCardPrice
     *
     * @return self
     */
    public function setGwCardPrice(?string $gwCardPrice) : self
    {
        $this->initialized['gwCardPrice'] = true;
        $this->gwCardPrice = $gwCardPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwBaseTaxAmount() : ?string
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(?string $gwBaseTaxAmount) : self
    {
        $this->initialized['gwBaseTaxAmount'] = true;
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwTaxAmount() : ?string
    {
        return $this->gwTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(?string $gwTaxAmount) : self
    {
        $this->initialized['gwTaxAmount'] = true;
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwItemsBaseTaxAmount() : ?string
    {
        return $this->gwItemsBaseTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwItemsBaseTaxAmount
     *
     * @return self
     */
    public function setGwItemsBaseTaxAmount(?string $gwItemsBaseTaxAmount) : self
    {
        $this->initialized['gwItemsBaseTaxAmount'] = true;
        $this->gwItemsBaseTaxAmount = $gwItemsBaseTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwItemsTaxAmount() : ?string
    {
        return $this->gwItemsTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwItemsTaxAmount
     *
     * @return self
     */
    public function setGwItemsTaxAmount(?string $gwItemsTaxAmount) : self
    {
        $this->initialized['gwItemsTaxAmount'] = true;
        $this->gwItemsTaxAmount = $gwItemsTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwCardBaseTaxAmount() : ?string
    {
        return $this->gwCardBaseTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwCardBaseTaxAmount
     *
     * @return self
     */
    public function setGwCardBaseTaxAmount(?string $gwCardBaseTaxAmount) : self
    {
        $this->initialized['gwCardBaseTaxAmount'] = true;
        $this->gwCardBaseTaxAmount = $gwCardBaseTaxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGwCardTaxAmount() : ?string
    {
        return $this->gwCardTaxAmount;
    }
    /**
     * 
     *
     * @param string|null $gwCardTaxAmount
     *
     * @return self
     */
    public function setGwCardTaxAmount(?string $gwCardTaxAmount) : self
    {
        $this->initialized['gwCardTaxAmount'] = true;
        $this->gwCardTaxAmount = $gwCardTaxAmount;
        return $this;
    }
}