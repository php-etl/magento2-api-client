<?php

namespace Kiboko\Magento\v2_3\Exception;

class QuoteGuestCartItemRepositoryV1SavePostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
