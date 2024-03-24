<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Exception;

use Psr\Http\Message\ResponseInterface;

final class SonarQubeRequestException extends \RuntimeException
{
    private ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function hasResponse(): bool
    {
        return isset($this->response);
    }
}
