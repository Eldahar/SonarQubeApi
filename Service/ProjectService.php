<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Service;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

final class ProjectService extends AbstractService
{
    public const API_PROJECTS_SEARCH = '/api/projects/search';

    public function search(?string $projectKey = null, int $page = 1): ResponseInterface
    {
        $query = [
            'p' => $page
        ];
        if ($projectKey !== null) {
            $query['projects'] = $projectKey;
        }
        return $this->get(self::API_PROJECTS_SEARCH, [
            RequestOptions::QUERY => $query
        ]);
    }
}
