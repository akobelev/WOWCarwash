<?php

require 'recipe/laravel.php';

// Set configurations
set('repository', 'git@github.com:akobelev/WOWCarwash.git');
set('shared_files', ['.env']);
set('shared_dirs', [
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);
set('writable_dirs', ['bootstrap/cache', 'storage']);

// Configure servers
server('localhost', 'localhost')
    ->user('garf')
    ->password('135421')
    ->env('deploy_path', '/var/www/wowproject.dev/files');

/**
 * Restart php-fpm on success deploy.
 */
task('php-fpm:restart', function () {
    run('sudo service php7.0-fpm restart');
})->desc('Restart PHP-FPM service');

after('success', 'php-fpm:restart');
