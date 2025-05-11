<?php

namespace RectitudeOpen\FilamentNews\Commands;

use Illuminate\Console\Command;

class FilamentNewsCommand extends Command
{
    public $signature = 'filament-news';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
