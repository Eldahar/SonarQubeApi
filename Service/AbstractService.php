<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Service;

use Eldahar\SonarQubeAPI\Exception\SonarQubeRequestException;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractService
{
    protected ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    protected function get(string $uri, array $options = []): ResponseInterface
    {
        $response = $this->client->request(Request::METHOD_GET, $uri, $options);
        if ($response->getStatusCode() !== Response::HTTP_OK) {
            throw new SonarQubeRequestException($response);
        }

        return $response;
    }
}
