<?php

declare(strict_types=1);

namespace SPC\doctor;

#[\Attribute(\Attribute::TARGET_METHOD)]
class AsFixItem
{
    public function __construct(public string $name)
    {
    }
}
