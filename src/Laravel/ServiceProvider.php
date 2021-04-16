<?php

namespace FilippoToso\Rasa\Laravel;

use Exception;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use FilippoToso\Rasa\Configuration;
use FilippoToso\Rasa\Api\DomainApi;
use FilippoToso\Rasa\Api\ModelApi;
use FilippoToso\Rasa\Api\ServerInformationApi;
use FilippoToso\Rasa\Api\TrackerApi;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('filippo-toso-rasa-domain', function () {
            return new DomainApi(null, $this->configuration());
        });

        $this->app->singleton('filippo-toso-rasa-model', function () {
            return new ModelApi(null, $this->configuration());
        });

        $this->app->singleton('filippo-toso-rasa-server-information', function () {
            return new ServerInformationApi(null, $this->configuration());
        });

        $this->app->singleton('filippo-toso-rasa-tracker', function () {
            return new TrackerApi(null, $this->configuration());
        });
    }

    protected function configuration()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setHost(rtrim(config('services.rasa.host'), '/'));

        if ($token = config('services.rasa.api_key')) {
            $config->setApiKey('token', $token);
        }

        return $config;
    }
}
