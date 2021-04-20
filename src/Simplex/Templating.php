<?php 
namespace Simplex;

class Templating {

  public function render(string $template, array $data){
    $template = mb_split('::', $template);
    $module = $template[0];
    $file = $template[1];
    $template = __DIR__."/../$module/ressources/views/$file";

    ob_start();
    include $template;

    return ob_get_clean();
  }
}