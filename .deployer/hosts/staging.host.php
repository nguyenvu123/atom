<?php
namespace Deployer;

const REMOTE_HOST = '';
const REMOTE_USER = '';
const REMOTE_SSH_PORT = 22;
const REMOTE_PHP_BIN_PATH = '/usr/bin/php7.4';
const REMOTE_DEPLOYMENT_PATH = '';
const RSYNC_LOCAL_SRC = __DIR__ . '';

host('staging')
    ->setHostname(REMOTE_HOST)
    ->setRemoteUser(REMOTE_USER)
    ->setDeployPath(REMOTE_DEPLOYMENT_PATH)
    ->setPort(REMOTE_SSH_PORT)
    ->set('rsync_src', RSYNC_LOCAL_SRC)
    ->set('bin/php', REMOTE_PHP_BIN_PATH)
;
