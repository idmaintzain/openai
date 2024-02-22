# Laravel OpenAI Package

This Laravel package provides a simple and convenient way to interact with the OpenAI API, leveraging the power of AI models like GPT-3 directly from your Laravel applications.

## Features

- Easy configuration via Laravel's standard methods.
- Facade for straightforward usage of the OpenAI API.
- Customizable to utilize any OpenAI model.

## Installation

### Step 1: Composer

To add the Laravel OpenAI package to your project, run:

```bash
composer require idmaintzain/openai
```
Step 2: Publish Configuration (Optional)
Optionally, you can publish the package configuration to your application's config directory. This is recommended for customizing the OpenAI API key or settings:

```bash
php artisan vendor:publish --provider="Idmaintzain\OpenAI\OpenAIServiceProvider" --tag=config
```

Step 3: Environment Configuration
Add your OpenAI API key to your .env file to configure your environment:

OPENAI_API_KEY=your_openai_api_key_here

Replace your_openai_api_key_here with your actual OpenAI API key.

Usage
The OpenAI client can be accessed via the facade or dependency injection in your Laravel application.

Via Facade
$response = \Idmaintzain\OpenAI\Facades\OpenAI::complete('Your prompt here');

Via Dependency Injection
public function generateText(\Idmaintzain\OpenAI\OpenAIClient $openAI)
{
    $response = $openAI->complete('Your prompt here');
    return $response;
}

Example: Generating Text
Generate text using the OpenAI client with:

use Idmaintzain\OpenAI\Facades\OpenAI;

$response = OpenAI::complete('Translate the following English text to French: "Hello, how are you?"', [
    'model' => 'text-davinci-003', // Model specification
    'temperature' => 0.7,
    'max_tokens' => 100,
]);

print_r($response);

Customization
After publishing, customize the settings in the config/openai.php file as needed.

Support
For issues, questions, or contributions, please submit a GitHub issue or pull request in the package repository.

License
This package is open-sourced software licensed under the MIT license.


Please ensure you adjust any placeholders (`idmaintzain/openai`, URLs, etc.) to match your actual package name, repository URL, and any other specific details related to your package. This `README.md` is designed to be comprehensive, guiding users from installation to making actual API requests with your package.

