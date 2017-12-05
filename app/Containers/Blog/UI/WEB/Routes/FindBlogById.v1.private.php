<?php

/** @var Route $router */
$router->get('blogs/{id}', [
    'as' => 'web_blog_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
