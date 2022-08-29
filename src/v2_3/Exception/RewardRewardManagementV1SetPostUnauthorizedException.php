<?php

namespace Kiboko\Magento\v2_3\Exception;

class RewardRewardManagementV1SetPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
