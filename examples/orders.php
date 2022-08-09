<?php

use Kiboko\Magento\V2\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException;

require __DIR__ . '/../vendor/autoload.php';

$token = getenv('MAGENTO_TOKEN');
$httpClient = new \GuzzleHttp\Client();

$test = new \Http\Client\Common\PluginClient($httpClient, [
    new \Http\Client\Common\Plugin\BaseUriPlugin(new \GuzzleHttp\Psr7\Uri(getenv('MAGENTO_SERVER'))),
    new \Http\Client\Common\Plugin\AuthenticationPlugin(new \Http\Message\Authentication\Bearer($token)),
]);

$client = \Kiboko\Magento\V2\Client::create($test);

try {
    $response = $client->salesOrderRepositoryV1GetListGet(queryParameters: [
        'searchCriteria[currentPage]' => 1,
        'searchCriteria[pageSize]' => 10,
    ], fetch: \Kiboko\Magento\V2\Client::FETCH_RESPONSE);
} catch (SalesOrderRepositoryV1GetListGetUnauthorizedException) {
}

if ($response instanceof \Psr\Http\Message\ResponseInterface) {
    if ($response->getStatusCode() !== 200) {
        throw new \Exception('Error');
    }

    $result = json_decode($response->getBody()->getContents(), true);
}

var_dump($result);
