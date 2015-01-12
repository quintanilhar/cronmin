<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../app/view',
));

$app->get('/admin/jobs', function() use ($app) { 
    return $app['twig']->render(
        'jobs/index.html',
        array(
            'jobs' => ['job 1', 'job 2'],
        )
    );
}); 

$app->run(); 
