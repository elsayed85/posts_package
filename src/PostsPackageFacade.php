<?php

namespace Elsayed85\PostsPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elsayed85\PostsPackage\PostsPackage
 */
class PostsPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'posts_package';
    }
}
