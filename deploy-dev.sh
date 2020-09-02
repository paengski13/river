# Pull the latest changes from the git repository
git pull origin master

# Install/update composer dependecies
composer install

# Run database migrations
php artisan migrate --force

# Run db seed
php artisan db:seed

# Clear caches
php artisan cache:clear

# Clear views
php artisan view:clear

# Clear expired password reset tokens
php artisan auth:clear-resets

# Clear and cache routes
php artisan route:clear

# Clear and cache config
php artisan config:clear

# Install node modules
npm install

# Build assets using Laravel Mix
npm run development
