<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$twigPath = __DIR__ . '/templates';

$app = new Application();
$app->register(new TwigServiceProvider(), [
  'twig.path' => $twigPath,
	'twig.options' => [
		'cache' => __DIR__ . '/compilation_cache',
		'debug' => true,
	],
]);
$app['twig']->addExtension(new Twig_Extension_Debug());

// Find all index.html.twig files and create matching routes, e.g. ./templates/map/index.html.twig ⟼ /map/
$directory = new RecursiveDirectoryIterator($twigPath);
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '@^' . preg_quote($twigPath, '@') . '(/(?:.+/)?)index\.html\.twig$@i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $match) {
	$path = $match[1];
	// Create route.
	$app->get($path, function(Request $request) use($app) {
		try {
			// Find and render index.html.twig
			$templatePath = $request->getPathInfo() . 'index.html.twig';
			return $app['twig']->render($templatePath);
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	});
}

$app->run();
