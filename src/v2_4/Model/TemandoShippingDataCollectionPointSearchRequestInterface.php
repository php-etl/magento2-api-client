<?php

namespace Kiboko\Magento\v2_4\Model;

class TemandoShippingDataCollectionPointSearchRequestInterface
{
    /**
     *
     *
     * @var string
     */
    protected $countryId;
    /**
     *
     *
     * @var bool
     */
    protected $pending;
    /**
     *
     *
     * @var string
     */
    protected $postcode;
    /**
     *
     *
     * @var int
     */
    protected $shippingAddressId;
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
}
