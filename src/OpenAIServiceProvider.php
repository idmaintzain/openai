<?php
// packages/vendorname/openai/src/OpenAIServiceProvider.php

namespace idmaintzain\OpenAI;

use Illuminate\Support\ServiceProvider;

class OpenAIServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('openai', function ($app) {
            return new OpenAIClient(config('services.openai.key'));
        });
    }
}
