<?php

require_once '../twig_setup.php';

$json = file_get_contents("vars.json");
$vars = json_decode($json, true);

echo $twig->render('homepage.html.twig', $vars);