# iamcode
A project for the iamthecode and booking.com 

## Requirements

  You must have the following installed on your system:
 * php 5.x
 * composer

## Setting up project

 1. Clone the repository

  > In your terminal, make sure you are on the root folder of the project.

 2. Create a .env file:

 ```
 copy .env.example .env
 ```
 OR
  ```
 cp .env.example .env
 ```
 Update the `.env` file with your system settings. (database details etc.)

 3. Install dependencies:

 ```
 composer install
 ```

 4. Run migration (Create database and tables):

```
   php artisan migrate
```

 6. Serve the project
  
 ```
  php -S localhost:9090 -t publlic
 ```

 Or

 ```
  php artisan serve
 ```

 ## What next? :full_moon_with_face:

 * Relax 🛏️.

 * Grab a coffee 🍷.

 * Contribute to the project :fire: :fire:.

