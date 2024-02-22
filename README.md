# Laravel OpenAI Package

This Laravel package provides a simple and convenient way to interact with the OpenAI API, leveraging the power of AI models like GPT-3 directly from your Laravel applications.

## Features

* **Easy configuration:** Utilize Laravel's standard methods for seamless integration.
* **Facade:** Facade for straightforward usage of the OpenAI API.
* **Customizable:** Utilize any OpenAI model to fit your specific needs.

## Installation

### 1. Composer

Add the package to your project:

```bash
composer require idmaintzain/openai
```

### 2. Publish Configuration (Optional)
(Optional) Publish the configuration for customization:
php artisan vendor:publish --provider="Idmaintzain\OpenAI\OpenAIServiceProvider" --tag=config

```bash
php artisan vendor:publish --provider="Idmaintzain\OpenAI\OpenAIServiceProvider" --tag=config
```



### 3. Environment Configuration
Add your OpenAI API key to your .env file:

```env
OPENAI_API_KEY=your_openai_api_key_here
```

### Usage
Access the OpenAI client via the facade or dependency injection:

Via Facade:

```php
$response = OpenAI::complete('Your prompt here');
```

Via Dependency Injection:
```php
public function generateText(\Idmaintzain\OpenAI\OpenAIClient $openAI)
{
    $response = $openAI->complete('Your prompt here');
    return $response;
}
```

### Example: Generating Text

```php
use Idmaintzain\OpenAI\Facades\OpenAI;

$response = OpenAI::complete('Translate the following English text to French: "Hello, how are you?"', [
    'model' => 'text-davinci-003', // Model specification
    'temperature' => 0.7,
    'max_tokens' => 100,
]);

print_r($response);
```

### Customization
Customize settings in the config/openai.php file after publishing.

### Support
For issues, questions, or contributions, visit the project's GitHub repository

### License
This package is open-sourced under the MIT license.
