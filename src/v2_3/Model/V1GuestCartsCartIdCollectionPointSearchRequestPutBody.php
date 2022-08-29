<?php

namespace Kiboko\Magento\v2_3\Model;

class V1GuestCartsCartIdCollectionPointSearchRequestPutBody
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
     * @var string
     */
    protected $postcode;
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
}
