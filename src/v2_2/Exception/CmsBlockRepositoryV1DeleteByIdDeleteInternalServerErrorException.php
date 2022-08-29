<?php

namespace Kiboko\Magento\v2_2\Exception;

class CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
