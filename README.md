## 📝 Requirements
#### The project has been set up using these versions :

- PHP : 7.4
- MySql : 5.7
- Nginx 1.9 or Apache 2
- PHP Composer

Or: Docker + Docker compose

## 🖥 Project installation

### Getting started

* Use local Docker/Docker-compose [Click here!](/docs/install-local-docker.md)
* Use local [Click here!](/docs/install-local.md)

## 🔧 Maintenance

**Update WordPress :**

- Change version and file zip of source Wordpress on composer.json 
- Run: `composer update`

**Update Plugins :**

- Change version plugin on composer.json
- Run: `composer update`

**Add new a plugin :**

- `composer require wpackagist-plugin/slug-plugin`

## 🚀 Deployment

#### Export/Import database
Export using command line :
- Export : `mysql -u` USER `-p ` DB_NAME `> export-database.sql`

Import using command line :
- Import : `mysql -u` USER `-p ` DB_NAME `< export-database.sql`

#### Install WordPress files and plugins

- `composer install`

#### Configuration file

- Copy file : `cp wp-config-sample.php wp-config.php`
- Update database info

#### Update siteURL
- `php wp-cli.phar search-replace 'old_url' 'new_url' --all-tables`
- `php wp-cli.phar cache flush`
#### Update the permalink

Go to domain/wp-admin/options-permalink.php(user/pass) and click `Enregistrer les modifications`.

## 💥 Troubleshooting
[todo]