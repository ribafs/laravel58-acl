<?php
namespace Ribafs\Laravel58Acl\Facades;

use Illuminate\Support\Facades\Facade;

class Laravel58Acl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel58-acl';
    }
}
