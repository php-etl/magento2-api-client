<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventoryBulkProductSourceAssignPostBody
{
    /**
     *
     *
     * @var string[]
     */
    protected $skus;
    /**
     *
     *
     * @var string[]
     */
    protected $sourceCodes;
    /**
     *
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     *
     *
     * @param string[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus): self
    {
        $this->skus = $skus;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getSourceCodes(): array
    {
        return $this->sourceCodes;
    }
    /**
     *
     *
     * @param string[] $sourceCodes
     *
     * @return self
     */
    public function setSourceCodes(array $sourceCodes): self
    {
        $this->sourceCodes = $sourceCodes;
        return $this;
    }
}
