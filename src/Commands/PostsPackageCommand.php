<?php

namespace Elsayed85\PostsPackage\Commands;

use Illuminate\Console\Command;

class PostsPackageCommand extends Command
{
    public $signature = 'posts_package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
