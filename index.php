<?php

require_once 'twig_setup.php';

function is_example($entry) {
  $exclude_list = array('compilation_cache','templates', 'vendor');

  if(is_dir($entry) && mb_substr($entry, 0, 1) !== '.' && !in_array($entry, $exclude_list)) {
    return true;
  }

  return false;
}

if ($handle = opendir($doc_root)) {
  $navigation = array();

  while (false !== ($entry = readdir($handle))) {
    if(is_example($entry)) {
      $navigation[] = array('href' => $entry, 'caption' => $entry);
    }
   }

  closedir($handle);
}

$vars = array('navigation' => $navigation);

echo $twig->render('index.html.twig', $vars);