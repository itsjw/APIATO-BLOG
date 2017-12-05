<?php

/** @var Route $router */
$router->get('blogs/create', [
    'as' => 'web_blog_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
