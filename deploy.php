<?php
namespace Deployer;

require 'recipe/common.php';
require 'contrib/rsync.php';

require_once '.deployer/index.php';

after('deploy:failed', 'deploy:unlock');
