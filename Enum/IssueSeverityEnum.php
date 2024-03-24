<?php

declare(strict_types=1);

namespace Eldahar\SonarQubeAPI\Enum;

enum IssueSeverityEnum: string
{
    case BLOCKER = 'BLOCKER';
    case CRITICAL = 'CRITICAL';
    case MAJOR = 'MAJOR';
    case MINOR = 'MINOR';
    case INFO = 'INFO';
}
