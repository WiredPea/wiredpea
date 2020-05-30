<?php
namespace Deployer;
require 'recipe/drupal8.php';

// Configuration

set('ssh_type', 'native');
set('ssh_multiplexing', true);

set('repository', 'git@github.com:WiredPea/wiredpea.git');

add('shared_files', ['sites/default/files', 'web/sites/default/settings.php']);
add('shared_dirs', ['web/sites/default/files']);

add('writable_dirs', []);

// Servers

host('wiredpea.com')
  ->user('noe')
  ->identityFile('~/.ssh/id_rsa')
  ->set('deploy_path', '/var/www/wiredpea');


// Tasks
desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
  // The user must have rights for restart service
  // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php7.0-fpm.service
  run('sudo systemctl restart php7.3-fpm.service');
});
before('deploy:symlink', 'deploy:vendors');
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
