<?php

namespace FilippoToso\Rasa\Laravel;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 *
 * @see \Illuminate\Hashing\HashManager
 */
class RasaServerInformation extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filippo-toso-rasa-server-information';
    }
}
