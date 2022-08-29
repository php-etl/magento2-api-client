<?php

namespace Kiboko\Magento\v2_4\Model;

class TemandoShippingDataCollectionPointOrderCollectionPointInterface
{
    /**
     *
     *
     * @var string
     */
    protected $city;
    /**
     *
     *
     * @var string
     */
    protected $collectionPointId;
    /**
     *
     *
     * @var string
     */
    protected $country;
    /**
     *
     *
     * @var string
     */
    protected $name;
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
    protected $recipientAddressId;
    /**
     *
     *
     * @var string
     */
    protected $region;
    /**
     *
     *
     * @var string[]
     */
    protected $street;
    /**
     *
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCollectionPointId(): string
    {
        return $this->collectionPointId;
    }
    /**
     *
     *
     * @param string $collectionPointId
     *
     * @return self
     */
    public function setCollectionPointId(string $collectionPointId): self
    {
        $this->collectionPointId = $collectionPointId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
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
    public function getRecipientAddressId(): int
    {
        return $this->recipientAddressId;
    }
    /**
     *
     *
     * @param int $recipientAddressId
     *
     * @return self
     */
    public function setRecipientAddressId(int $recipientAddressId): self
    {
        $this->recipientAddressId = $recipientAddressId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     *
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getStreet(): array
    {
        return $this->street;
    }
    /**
     *
     *
     * @param string[] $street
     *
     * @return self
     */
    public function setStreet(array $street): self
    {
        $this->street = $street;
        return $this;
    }
}
