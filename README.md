#!/bin/bash

# Define package path
PACKAGE_PATH="packages/idmaintzain/openai"

# Navigate to the package directory
cd $PACKAGE_PATH

# Check if inside the correct directory
if [ $? -ne 0 ]; then
    echo "Failed to navigate to the package directory. Does it exist?"
    exit 1
fi

# Create README.md with the provided content
cat <<EOF >README.md
# Laravel OpenAI Package

This Laravel package provides a simple and convenient way to interact with the OpenAI API, allowing you to leverage the power of AI models like GPT-3 directly from your Laravel applications.

## Features

- Easy configuration via Laravel's standard configuration methods.
- Facade for simple usage of the OpenAI API.
- Customizable to use any OpenAI model.

## Installation

### Step 1: Composer

Run the following command in your project to add the Laravel OpenAI package:

\`\`\`bash
composer require idmaintzain/openai
\`\`\`

### Step 2: Publish Configuration (Optional)

Publish the package configuration file to your application's \`config\` directory:

\`\`\`bash
php artisan vendor:publish --provider="Idmaintzain\OpenAI\OpenAIServiceProvider" --tag=config
\`\`\`

This step is optional but recommended if you wish to customize the OpenAI API key or other settings directly within your application.

### Step 3: Environment Configuration

Add your OpenAI API key to your \`.env\` file:

\`\`\`plaintext
OPENAI_API_KEY=your_openai_api_key_here
\`\`\`

Ensure you replace \`your_openai_api_key_here\` with your actual OpenAI API key.

## Usage

To use the OpenAI client, you may access it via the facade or dependency injection.

### Via Facade

\`\`\`php
\$response = \\\Idmaintzain\\OpenAI\\Facades\\OpenAI::complete('Here is your prompt');
\`\`\`

### Via Dependency Injection

\`\`\`php
public function generateText(\\Idmaintzain\\OpenAI\\OpenAIClient \$openAI)
{
    \$response = \$openAI->complete('Here is your prompt');
    return \$response;
}
\`\`\`

### Example: Generating Text

Here's how you can generate text using the OpenAI client:

\`\`\`php
use Idmaintzain\\OpenAI\\Facades\\OpenAI;

\$response = OpenAI::complete('Translate the following English text to French: "Hello, how are you?"', [
    'model' => 'text-davinci-003', // Specify the model you want to use
    'temperature' => 0.7,
    'max_tokens' => 100,
]);

print_r(\$response);
\`\`\`

## Customization

After publishing the configuration file, you can adjust the settings in the \`config/openai.php\` file according to your needs.

## Support

For issues, questions, or contributions, please submit a GitHub issue or pull request in the package repository.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
EOF

echo "README.md created in $PACKAGE_PATH"

# Navigate back to the Laravel project root
cd ../../../

# Run Composer require (Replace this with actual package name if published)
# composer require idmaintzain/openai

# Publish the package configuration (Optional)
# php artisan vendor:publish --provider="Idmaintzain\OpenAI\OpenAIServiceProvider" --tag=config

echo "Setup complete. Remember to manually run composer and artisan commands if your package is published."
