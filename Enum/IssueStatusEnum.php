<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Enum;

enum IssueStatusEnum: string
{
    case OPEN = 'OPEN';
    case CONFIRMED = 'CONFIRMED';
    case FALSE_POSITIVE = 'FALSE_POSITIVE';
    case ACCEPTED = 'ACCEPTED';
    case FIXED = 'FIXED';
}
