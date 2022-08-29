<?php

namespace Kiboko\Magento\v2_4\Model;

class V1Msp2faDefaultProviderCodeUserIdPutBody
{
    /**
     *
     *
     * @var string
     */
    protected $providerCode;
    /**
     *
     *
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->providerCode;
    }
    /**
     *
     *
     * @param string $providerCode
     *
     * @return self
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->providerCode = $providerCode;
        return $this;
    }
}
