<?php

require_once 'vendor/autoload.php';

$doc_root = $_SERVER['DOCUMENT_ROOT'];

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($doc_root.'/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => $doc_root.'/compilation_cache',
  'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());