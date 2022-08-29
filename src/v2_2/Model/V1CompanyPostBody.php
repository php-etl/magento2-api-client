<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CompanyPostBody
{
    /**
     * Interface for Company entity.
     *
     * @var CompanyDataCompanyInterface
     */
    protected $company;
    /**
     * Interface for Company entity.
     *
     * @return CompanyDataCompanyInterface
     */
    public function getCompany(): CompanyDataCompanyInterface
    {
        return $this->company;
    }
    /**
     * Interface for Company entity.
     *
     * @param CompanyDataCompanyInterface $company
     *
     * @return self
     */
    public function setCompany(CompanyDataCompanyInterface $company): self
    {
        $this->company = $company;
        return $this;
    }
}
