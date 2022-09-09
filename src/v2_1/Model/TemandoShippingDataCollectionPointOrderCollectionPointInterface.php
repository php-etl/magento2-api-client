<?php

namespace Kiboko\Magento\V2_1\Model;

class TemandoShippingDataCollectionPointOrderCollectionPointInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $city;
    /**
     *
     *
     * @var string|null
     */
    protected $collectionPointId;
    /**
     *
     *
     * @var string|null
     */
    protected $country;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
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
    protected $recipientAddressId;
    /**
     *
     *
     * @var string|null
     */
    protected $region;
    /**
     *
     *
     * @var string[]|null
     */
    protected $street;
    /**
     *
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCollectionPointId(): ?string
    {
        return $this->collectionPointId;
    }
    /**
     *
     *
     * @param string|null $collectionPointId
     *
     * @return self
     */
    public function setCollectionPointId(?string $collectionPointId): self
    {
        $this->collectionPointId = $collectionPointId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
    public function getRecipientAddressId(): ?int
    {
        return $this->recipientAddressId;
    }
    /**
     *
     *
     * @param int|null $recipientAddressId
     *
     * @return self
     */
    public function setRecipientAddressId(?int $recipientAddressId): self
    {
        $this->recipientAddressId = $recipientAddressId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     *
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getStreet(): ?array
    {
        return $this->street;
    }
    /**
     *
     *
     * @param string[]|null $street
     *
     * @return self
     */
    public function setStreet(?array $street): self
    {
        $this->street = $street;
        return $this;
    }
}
