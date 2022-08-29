<?php

namespace Kiboko\Magento\v2_3\Exception;

class CatalogProductAttributeManagementV1GetAttributesGetBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
