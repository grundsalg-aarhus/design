<?php

require_once 'twig_setup.php';

function is_example($entry) {
  $exclude_list = array('compilation_cache','templates', 'vendor');

  if(is_dir($entry) && mb_substr($entry, 0, 1) !== '.' && !in_array($entry, $exclude_list)) {
    return true;
  }

  return false;
}

echo $twig->render('index.html.twig');
