<?php

namespace RectitudeOpen\FilamentNews\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentNews\FilamentNews
 */
class FilamentNews extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentNews\FilamentNews::class;
    }
}
