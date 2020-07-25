<?php

namespace Goodechilde\CommonContact;

use Illuminate\Support\Facades\Facade;

/**
 * @see
 */
class CommonContactFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'common-contact';
    }
}
