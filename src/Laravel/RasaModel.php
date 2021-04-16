<?php

namespace FilippoToso\Rasa\Laravel;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @method static \FilippoToso\Rasa\Model\ParseResult parseModelMessage($inlineObject1, $emulationMode = null)
 *
 * @see \FilippoToso\Rasa\Api\ModelApi
 */
class RasaModel extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filippo-toso-rasa-model';
    }

    public static function parse($text, $messageId = null)
    {
        return static::parseModelMessage([
            'text' => $text,
            'message_id' => $messageId,
        ]);
    }
}
