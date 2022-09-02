<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataPaymentExtensionInterface
{
    /**
     *
     *
     * @var string[]
     */
    protected $agreementIds;
    /**
     *
     *
     * @return string[]
     */
    public function getAgreementIds(): array
    {
        return $this->agreementIds;
    }
    /**
     *
     *
     * @param string[] $agreementIds
     *
     * @return self
     */
    public function setAgreementIds(array $agreementIds): self
    {
        $this->agreementIds = $agreementIds;
        return $this;
    }
}
