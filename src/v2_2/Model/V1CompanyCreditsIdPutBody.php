<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CompanyCreditsIdPutBody
{
    /**
     * Credit Limit data transfer object interface.
     *
     * @var CompanyCreditDataCreditLimitInterface|null
     */
    protected $creditLimit;
    /**
     * Credit Limit data transfer object interface.
     *
     * @return CompanyCreditDataCreditLimitInterface|null
     */
    public function getCreditLimit(): ?CompanyCreditDataCreditLimitInterface
    {
        return $this->creditLimit;
    }
    /**
     * Credit Limit data transfer object interface.
     *
     * @param CompanyCreditDataCreditLimitInterface|null $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(?CompanyCreditDataCreditLimitInterface $creditLimit): self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
}
