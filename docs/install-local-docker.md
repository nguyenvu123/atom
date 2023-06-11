## 🚀 Installation with Docker Composer
#### Getting started
```
git clone git@git.fidesio.com:fidesio/wordpress-starter.git wp-starter
cd wp-starter

# Copy .env.sample to .env
cp .env.sample .env

# Copy wp-config file
cp wp-config.sample.php wp-config.php

# Start Docker Containers
docker-compose up -d

# Connect php container
docker-compose exec php bash

# Install dependencies
composer install
```

#### Import database
Make sure you connected the `php` container:
```
# Connect php container
docker-compose exec php bash
```

```
# Import db if you want to have the default settings
mysql -hmariadb -uphp -pphp php < ./sql/wp_starter.sql

# Replace site url if necessary
php wp-cli.phar search-replace 'wp.fides.io' 'wp.fides.io:8887' --all-tables
php wp-cli.phar cache flush

```


#### Update DNS Entries

Edit `/etc/hosts` file (on Linux/macOS) OR `C:\WINDOWS\system32\drivers\etc\hosts` (on Windows), add the following lines :
```
127.0.0.1 wp.fides.io pma.wp.fides.io
```

#### Remove 'wp' on site URL

Please refer to [.htaccess](/.htaccess) for rewriting URL

APACHE

```
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) wp/$2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ wp/$2 [L]

```

#### Access links:

- FO: http://wp.fides.io:8887
- BO: http://wp.fides.io:8887 (admin/123123)
- PHPMyAdmin: http://pma.wp.fides.io:8887

