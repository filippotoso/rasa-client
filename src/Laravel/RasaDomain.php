<?php

namespace FilippoToso\Rasa\Laravel;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @method static \FilippoToso\Rasa\Model\Domain getDomain()
 *
 * @see \FilippoToso\Rasa\Api\DomainApi
 */
class RasaDomain extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filippo-toso-rasa-domain';
    }
}
