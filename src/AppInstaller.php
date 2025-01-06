<?php

namespace Perigi\Installer;

class AppInstaller extends BaseInstaller
{

  protected $locations = [
    'module' => 'app/modules/{$name}',
    'theme-frontend' => 'app/themes/frontend/{$name}',
    'theme-admin' => 'app/themes/admin/{$name}',
    'theme' => 'app/themes/{$name}',
  ];

  public function inflectPackageVars(array $vars): array
  {
    $type = str_replace('perigiweb-', '', $vars['type']);
    if (str_starts_with($vars['name'], $type)) {
      $vars['name'] = substr($vars['name'], mb_strlen($type) + 1);
    }

    return $vars;
  }
}
