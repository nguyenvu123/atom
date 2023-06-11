<?php
namespace Deployer;

set('writable_mode', 'chmod');
set('keep_releases', 3);

set('shared_files', [
    '.env',
    'wp-config.php'
]);

set('shared_dirs', [
    'app/languages',
    'wp-content/uploads',
    'app/uploads',
]);
add('writable_dirs', [
    'app/languages',
    'wp-content/uploads',
    'app/uploads',
]);
