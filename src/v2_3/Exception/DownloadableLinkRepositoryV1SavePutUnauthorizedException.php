<?php

namespace Kiboko\Magento\v2_3\Exception;

class DownloadableLinkRepositoryV1SavePutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
