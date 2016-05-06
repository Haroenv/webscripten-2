# Installation My First Blog

# Vendors
```
composer install
```

# Make DB
*in /storage*
```
sqlite3 blog.db ""
```

## Migrate
*in /*
```
php artisan migrate
```

## Seed database
```
php artisan db:seed
```

