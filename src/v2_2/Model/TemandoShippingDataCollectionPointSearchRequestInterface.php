<?php

namespace Kiboko\Magento\v2_2\Model;

class TemandoShippingDataCollectionPointSearchRequestInterface
{
    /**
     *
     *
     * @var int
     */
    protected $shippingAddressId;
    /**
     *
     *
     * @var string
     */
    protected $countryId;
    /**
     *
     *
     * @var string
     */
    protected $postcode;
    /**
     *
     *
     * @var bool
     */
    protected $pending;
    /**
     *
     *
     * @return int
     */
    public function getShippingAddressId(): int
    {
        return $this->shippingAddressId;
    }
    /**
     *
     *
     * @param int $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(int $shippingAddressId): self
    {
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }
    /**
     *
     *
     * @param string $countryId
     *
     * @return self
     */
    public function setCountryId(string $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     *
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getPending(): bool
    {
        return $this->pending;
    }
    /**
     *
     *
     * @param bool $pending
     *
     * @return self
     */
    public function setPending(bool $pending): self
    {
        $this->pending = $pending;
        return $this;
    }
}
