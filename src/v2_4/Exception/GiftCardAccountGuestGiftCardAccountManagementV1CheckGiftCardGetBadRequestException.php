<?php

namespace Kiboko\Magento\v2_4\Exception;

class GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
