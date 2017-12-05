<?php

/** @var Route $router */
$router->patch('blogs/{id}', [
    'as' => 'web_blog_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
