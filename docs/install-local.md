## 🚀 Local Project installation

#### Getting started
**Go to your project folder and clone this repo (or download as .zip) :**

```
git clone git@git.fidesio.com:fidesio/wordpress-starter.git wp-starter
cd wp-starter

# Copy wp-config file
cp wp-config.sample.php wp-config.php

#Install WordPress files and plugins
composer install
```

#### Update DNS Entries

Edit `/etc/hosts` file (on Linux/macOS) OR `C:\WINDOWS\system32\drivers\etc\hosts` (on Windows), add the following lines :
```
127.0.0.1 wp.fides.io
```

#### Web server configuration

- For Nginx, please refer to [nginx.conf](/nginx.conf)
- For Apache (HTTPD), please refer to [apache.conf](/apache.conf)



#### Import DB
Create a new database with COLLATE utf8mb4_unicode_ci.
Then update database information in `wp-config.php`

Import a db with default configuration, please use this command:

`mysql -u` USER `-p ` DB_NAME `< ./sql/wp_starter.sql`


Replace old URLS if necessary

```
php wp-cli.phar search-replace 'old_url' 'new_url' --all-tables

php wp-cli.phar cache flush
```

Or setup a new db by access the URL: http://wp.fides.io


#### Remove 'wp' on site URL

Please refer to [nginx.conf](/nginx.conf) or [.htaccess](/.htaccess) for rewriting URL

NGINX: 
```
if (!-e $request_filename) {
        rewrite /wp-admin$ $scheme://$host$uri/ permanent;
        rewrite ^(/[^/]+)?(/wp-.*) /wp$2 last;
        rewrite ^(/[^/]+)?(/.*\.php)$ /wp$2 last;
    }
```
APACHE

```
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) wp/$2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ wp/$2 [L]

```

#### Access links:
- FO: http://wp.fides.io
- BO: http://wp.fides.io/wp-admin (admin/123123)


