# Member App


## initial Setup Instructions

```
// copy the .env file
cp .env.example .env

// edit the .env file with the server settings

// generate app key
php artisan key:generate
```

### Development Instructions

Migrate the database
```
php artisan migrate
```

## Local Development Setup Instructions
 
- `composer install` - install dependencies
- `php artisan migrate` - Migrate database
- `npm install` - Install NPM packages. Check if Node.js is installed with `npm -v`
- `npm run dev` - Compile and build. If you get first time error, run it again.
- `php artisan serve` - Run the local test server