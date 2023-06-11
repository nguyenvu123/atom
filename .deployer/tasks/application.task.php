<?php
namespace Deployer;

task('application:deploy', [
    'deploy:unlock',
    'deploy:setup',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:shared',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'deploy:cleanup',
])->desc("Livraison sur l'environnement");


task('application:fix-permissions', function () {
    run("cd {{deploy_path}}/releases && find . -wholename *web/sites/default -print -exec chmod 755 {} \;");
});

before('deploy:cleanup', 'application:fix-permissions');
