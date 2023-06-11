<?php
namespace Deployer;

set('rsync', [
    'exclude'      => [
        '.env',
        '.git',
        'deploy.php',
        'deploy',
    ],
    'exclude-file' => false,
    'include'      => [],
    'include-file' => false,
    'filter'       => [],
    'filter-file'  => false,
    'filter-perdir'=> false,
    'flags'        => 'az', // Recursive, with compress
    'options'      => ['delete'],
    'timeout'      => 60,
]);
