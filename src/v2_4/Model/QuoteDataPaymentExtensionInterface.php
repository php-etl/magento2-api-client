<?php

namespace Kiboko\Magento\V2_4\Model;

class QuoteDataPaymentExtensionInterface
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $agreementIds;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAgreementIds(): ?array
    {
        return $this->agreementIds;
    }
    /**
     *
     *
     * @param string[]|null $agreementIds
     *
     * @return self
     */
    public function setAgreementIds(?array $agreementIds): self
    {
        $this->agreementIds = $agreementIds;
        return $this;
    }
}
