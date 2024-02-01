<?php

return [
    'openapi-file' => __DIR__.'/schema.json',
    'namespace' => 'Kiboko\Magento',
    'directory' => __DIR__ . '/../generated',
    'strict' => false,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/../.php-cs-fixer.dist.php',
    'throw-unexpected-status-code' => true,
];
