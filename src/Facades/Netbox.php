<?php

namespace Intermax\Netbox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Intermax\Netbox\Netbox
 */
class Netbox extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Intermax\Netbox\Netbox::class;
    }
}
