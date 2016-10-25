<?php

require_once '../twig_setup.php';

$faker = Faker\Factory::create('da_DK');
$faker->addProvider(new Faker\Provider\da_DK\Person($faker));

$users = array();

for($i=0; $i < 5; $i++) {
  $user = array();
  $user['firstname'] = $faker->firstName;
  $user['lastname'] = $faker->lastName;
  $user['cpr'] = $faker->cpr;
  $user['bio'] = $faker->text;

  $users[] = $user;
}

$vars['users'] = $users;
echo $twig->render('fakerpage/fakerpage.html.twig', $vars);