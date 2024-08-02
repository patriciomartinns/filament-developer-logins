<?php

namespace Patriciomartins\FilamentDeveloperLogins\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Patriciomartins\FilamentDeveloperLogins\FilamentDevelopersLogin
 */
class FilamentDevelopersLogin extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'filament-developers-login';
    }
}
