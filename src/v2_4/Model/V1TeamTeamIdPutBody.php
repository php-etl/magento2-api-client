<?php

namespace Kiboko\Magento\V2_4\Model;

class V1TeamTeamIdPutBody
{
    /**
     * Team interface
     *
     * @var CompanyDataTeamInterface|null
     */
    protected $team;
    /**
     * Team interface
     *
     * @return CompanyDataTeamInterface|null
     */
    public function getTeam(): ?CompanyDataTeamInterface
    {
        return $this->team;
    }
    /**
     * Team interface
     *
     * @param CompanyDataTeamInterface|null $team
     *
     * @return self
     */
    public function setTeam(?CompanyDataTeamInterface $team): self
    {
        $this->team = $team;
        return $this;
    }
}
