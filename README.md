# Secure Password Generator

## Overview

This app generates secure passwords according to your specific requirements. It is built using Laravel 11 and offers a range of customizable options to ensure your passwords meet your security standards.

## Features

- **Customizable Length**: Specify the desired length of the password.
- **Add Characters**: Include special characters in the password.
- **Allow Spaces**: Option to include spaces in the password.
- **Add Numbers**: Include numerical digits in the password.
- **Easy to Use**: Simple and intuitive interface for generating passwords.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/secure-password-generator.git
    ```

2. Navigate to the project directory:
    ```bash
    cd secure-password-generator
    ```

3. Install dependencies:
    ```bash
    composer install
    ```

4. Set up your `.env` file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

1. Open your browser and go to `http://localhost:8000`.
2. Use the interface to specify your password requirements.
3. Click "Generate" to create a secure password based on your criteria.

## Future Enhancements

- **Single Page Application (SPA)**: We plan to enhance this application by converting it into a Single Page Application (SPA) using Livewire or Vue.js. This will provide a more dynamic and seamless user experience.

## Contributing

We welcome contributions to improve this app! Please fork the repository and create a pull request with your changes.

## Author

- [@Shahzaib](https://github.com/Shahzaib-943)
