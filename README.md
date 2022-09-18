1-Install Laravel 
Create  a new Project type  the command on the command prompt  . I create the project name students_neo4j

composer create-project --prefer-dist laravel/laravel students_neo4j

2-Database setup

1-Run composer require vinelab/neoeloquent

Or add the package to your composer.json and run composer update.

{
    "require": {
        "vinelab/neoeloquent": "1.8.*"
    }
}
2-Add the service provider in app/config/app.php:

Vinelab\NeoEloquent\NeoEloquentServiceProvider::class,

3-Configuration

in app/config/database.php  make neo4j your default connection:

'default' => 'neo4j',

Add the connection defaults:

'connections' => [
    'neo4j' => [
        'driver' => 'neo4j',
        'host'   => 'localhost',
        'port'   => 7687,
        'username' => 'username',
        'password' => 'password',
    ]
]

4-Change .env File
