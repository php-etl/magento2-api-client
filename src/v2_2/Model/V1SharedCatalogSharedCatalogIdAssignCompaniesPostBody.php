<?php

namespace Kiboko\Magento\V2_2\Model;

class V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody
{
    /**
     *
     *
     * @var CompanyDataCompanyInterface[]|null
     */
    protected $companies;
    /**
     *
     *
     * @return CompanyDataCompanyInterface[]|null
     */
    public function getCompanies(): ?array
    {
        return $this->companies;
    }
    /**
     *
     *
     * @param CompanyDataCompanyInterface[]|null $companies
     *
     * @return self
     */
    public function setCompanies(?array $companies): self
    {
        $this->companies = $companies;
        return $this;
    }
}
