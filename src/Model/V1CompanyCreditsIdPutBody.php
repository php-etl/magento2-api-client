<?php

namespace Kiboko\Magento\V2\Model;

class V1CompanyCreditsIdPutBody
{
    /**
     * Credit Limit data transfer object interface.
     *
     * @var CompanyCreditDataCreditLimitInterface
     */
    protected $creditLimit;
    /**
     * Credit Limit data transfer object interface.
     *
     * @return CompanyCreditDataCreditLimitInterface
     */
    public function getCreditLimit() : CompanyCreditDataCreditLimitInterface
    {
        return $this->creditLimit;
    }
    /**
     * Credit Limit data transfer object interface.
     *
     * @param CompanyCreditDataCreditLimitInterface $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(CompanyCreditDataCreditLimitInterface $creditLimit) : self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
}