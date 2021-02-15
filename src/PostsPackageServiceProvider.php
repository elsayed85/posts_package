<?php

namespace Elsayed85\PostsPackage;

use Elsayed85\PostsPackage\Commands\PostsPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PostsPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('posts_package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_posts_package_table')
            ->hasCommand(PostsPackageCommand::class);
    }
}
