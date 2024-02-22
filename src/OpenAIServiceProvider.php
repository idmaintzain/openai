<?php
// packages/vendorname/openai/src/OpenAIServiceProvider.php


namespace Idmaintzain\OpenAI;

use Illuminate\Support\ServiceProvider;

class OpenAIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__.'/config/openai.php' => config_path('openai.php'),
        ], 'config');
    }

    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/config/openai.php', 'openai'
        );

        $this->app->singleton(OpenAIClient::class, function ($app) {
            return new OpenAIClient(config('openai.api_key'));
        });
    }
}
