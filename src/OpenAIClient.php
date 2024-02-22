<?php
// packages/vendorname/openai/src/OpenAIClient.php

namespace idmaintzain\OpenAI;

use Illuminate\Support\Facades\Http;

class OpenAIClient
{
    protected $apiKey;
    protected $baseUrl = 'https://api.openai.com/v1/';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function complete($prompt, $options = [])
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->post($this->baseUrl . 'engines/davinci-codex/completions', array_merge([
            'prompt' => $prompt,
        ], $options));

        return $response->json();
    }

    // Other methods for different OpenAI endpoints can be added here...
}

