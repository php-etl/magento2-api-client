<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CartsMineCollectionPointSearchRequestPutBody
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
     * @var string|null
     */
    protected $postcode;
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
}
