<?php

namespace Kiboko\Magento\v2_4\Model;

class V1Msp2faUserProvidersUserIdPutBody
{
    /**
     *
     *
     * @var string
     */
    protected $providersCodes;
    /**
     *
     *
     * @return string
     */
    public function getProvidersCodes(): string
    {
        return $this->providersCodes;
    }
    /**
     *
     *
     * @param string $providersCodes
     *
     * @return self
     */
    public function setProvidersCodes(string $providersCodes): self
    {
        $this->providersCodes = $providersCodes;
        return $this;
    }
}
