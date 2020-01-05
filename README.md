# Basic Website with Laravel and Bootstrap

This is a basic website project using Laravel and Bootstrap 4.

## Installation

This is a Laravel project with Bootstrap 4 installed. The installation is similar to a new Laravel project.

### Clone or Download this Project from GitHub

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a 
local copy of this project on your computer.

### Install the Dependencies

The project uses Laravel 6.9, which has a requirement for **PHP 7.2** or higher. 
 Composer is highly recommended to install the dependencies.

From the root of the project run composer install from the command line:

```shell script
composer install
```

### Create an .env file

Create an `.env` file from `.env.example`

#### Linux / Mac

```shell script
cp .env.example .env
```

#### Windows

```shell script
copy .env.example .env
```

### Generate an APP_KEY

```shell script
php artisan key:generate
```

### Update the Database Settings

The majority of the website can be viewed without authentication. A database can be created for user accounts, but isn't
 required.

#### MySql

For MySql, create a database on your MySql server and add the settings to the
**.env** file:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

#### Sqlite

Alternatively create an empty sqlite database and configure Laravel to use Sqlite

##### Sqlite on Linux / Mac

```shell script
touch database/database.sqlite
```

##### Sqlite on Windows

```shell script
fsutil file createnew database/database.sqlite 0
```

##### Edit the .env file

Edit the **.env** file, add sqlite as the DB_CONNECTION and delete all the other DB\_\* keys.

```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1   }
DB_PORT=3306        }
DB_DATABASE=laravel } Delete
DB_USERNAME=root    }
DB_PASSWORD=        }
```

### Create the database

Run the following command to create the database.

```shell script
php artisan migrate
```

### Sqlite in Memory Testing Database

The `phpunit.xml` file has been configured for Sqlite in memory testing. This requires the pdo_sqlite extension to be 
 enabled in your `php.ini`. If there are any problems enabling the extension remove the following lines, PHPUnit
 will then to use the database configured in your `.env` file.

```xml
<php>
    <!-- other setings -->
    <server name="DB_CONNECTION" value="sqlite"/>
    <server name="DB_DATABASE" value=":memory:"/>
    <!-- other setings -->
</php>
```

### Run all tests

To make it easy to run all the PHPUnit tests a composer script has been created in composer.json. From the root of the
 projects, use `composer test` or `composer tests`

```shell script
composer test
```

### Serve the website

To use the php web server, run the following artisan command:

```shell script
php artisan serve
```

Or configure your local environment to use Apache or NGINX

### Open the website

See the message under the serve command for the website name and port, by default it is:

-   <http://127.0.0.1:8000>

**Research Demo** will display, with links to other pages using the navigation menu

* About Us
* Services
* Research
* Team
* Contact
* Login (an account will need to be created first, by manually navigating the the /register route)

## Helper scripts

To help in the development of this project several scripts can be run using **composer** to check and fix the code.

### `composer check-cs` and `composer fix-cs`

These commands will run Easy Coding Standard (ECS), they will check the code in the app and tests 
directory code and  either check it or fix it. See **ecs.yaml** in the root folder for details on which rules are run.

### `composer checkcode` and `composer fixcode`

These commands will run **squizlabs/PHP_CodeSniffer**, they will check the code in the app and tests directory code
 and either check it or fix it. The PSR-12 coding standard is used. Run these commands if preferred over ECS.

### `composer phpstan`

Will run static analysis using **phpstan/phpstan**, using the **phpstan.neon** rules in the root folder.

## Contributions

Feel free to leave comments for improvements. At this point this project is still in development, no contributions
 to the code is required. Feel free to fork or clone or copy for your own use.

## Contributing

Thank you for considering contributing to this project! As this is a personal project contributions are not expected,
but please feel free to fork for your own personal use.

## License

The this project and the Laravel framework is open-sourced software licensed under the 
[MIT license](https://opensource.org/licenses/MIT).
