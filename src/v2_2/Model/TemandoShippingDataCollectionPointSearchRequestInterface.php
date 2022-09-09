<?php

namespace Kiboko\Magento\V2_2\Model;

class TemandoShippingDataCollectionPointSearchRequestInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $countryId;
    /**
     *
     *
     * @var bool|null
     */
    protected $pending;
    /**
     *
     *
     * @var string|null
     */
    protected $postcode;
    /**
     *
     *
     * @var int|null
     */
    protected $shippingAddressId;
    /**
     *
     *
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     *
     *
     * @param string|null $countryId
     *
     * @return self
     */
    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getPending(): ?bool
    {
        return $this->pending;
    }
    /**
     *
     *
     * @param bool|null $pending
     *
     * @return self
     */
    public function setPending(?bool $pending): self
    {
        $this->pending = $pending;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     *
     *
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getShippingAddressId(): ?int
    {
        return $this->shippingAddressId;
    }
    /**
     *
     *
     * @param int|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?int $shippingAddressId): self
    {
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
}
