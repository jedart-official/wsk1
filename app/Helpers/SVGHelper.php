<?php

namespace App\Helpers;

class SVGHelper
{
    public static function includeSvg($path): bool|string
    {
        $fullPath = resource_path("images/{$path}.svg");
        return file_exists($fullPath) ? file_get_contents($fullPath) : '';
    }
}
