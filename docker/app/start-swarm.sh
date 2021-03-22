#!/bin/bash

export SYMFONY_ENV=prod

# Clear cache and create assets
php bin/console cache:clear
php bin/console cache:clear --env=prod
php bin/console assetic:dump
php bin/console assets:install --symlink web

echo "Building compressed static files..."

# Minify (GZIP and Brotli) static resources (CSS, JS and SVGs)
for x in `find /var/www/web/assets/front/css/ -type f -iname '*.css'`
  do brotli --force --input ${x} --output ${x}.br && gzip -9 < ${x} > ${x}.gz
done
for x in `find /var/www/web/assets/front/js/ -type f -iname '*.js'`
  do brotli --force --input ${x} --output ${x}.br && gzip -9 < ${x} > ${x}.gz
done
for x in `find /var/www/web/assets/front/images/ -type f -iname '*.svg'`
  do brotli --force --input ${x} --output ${x}.br && gzip -9 < ${x} > ${x}.gz
done

chmod -R 755 /var/www/web/assets/front

echo "Starting database migration..."

# Clear database cache before migrations
php bin/console doctrine:cache:clear-result
php bin/console doctrine:cache:clear-query
php bin/console doctrine:cache:clear-metadata

# Migrate the database
php bin/console --no-interaction doctrine:migrations:migrate

# Clear metadata cache after migrations, in case a column was removed
php bin/console doctrine:cache:clear-metadata

# Own the var folder
chown -R www-data:www-data /var/www/var

# Remove app_dev if we're in production
if [ "$APP_ENV" = "production" ]; then
  rm /var/www/web/app_dev.php
fi

echo "Starting webserver..."

# Start up
php-fpm7.2 && nginx -g 'daemon off;'
