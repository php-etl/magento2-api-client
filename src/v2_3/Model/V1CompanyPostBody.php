<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CompanyPostBody
{
    /**
     * Interface for Company entity.
     *
     * @var CompanyDataCompanyInterface|null
     */
    protected $company;
    /**
     * Interface for Company entity.
     *
     * @return CompanyDataCompanyInterface|null
     */
    public function getCompany(): ?CompanyDataCompanyInterface
    {
        return $this->company;
    }
    /**
     * Interface for Company entity.
     *
     * @param CompanyDataCompanyInterface|null $company
     *
     * @return self
     */
    public function setCompany(?CompanyDataCompanyInterface $company): self
    {
        $this->company = $company;
        return $this;
    }
}
