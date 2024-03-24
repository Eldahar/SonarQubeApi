<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Service;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

final class IssueService extends AbstractService
{
    public const API_ISSUES_SEARCH = '/api/issues/search';

    public function search(?string $projectKey = null, int $page = 1): ResponseInterface
    {
        $query = [
            's' => 'SEVERITY',
            'resolved' => 'no',
            'p' => $page
        ];
        if ($projectKey !== null) {
            $query['projects'] = $projectKey;
        }
        return $this->get(self::API_ISSUES_SEARCH, [
            RequestOptions::QUERY => $query
        ]);
    }
}
