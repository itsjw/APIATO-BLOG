<?php

/** @var Route $router */
$router->get('blogs/{id}/edit', [
    'as' => 'web_blog_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
