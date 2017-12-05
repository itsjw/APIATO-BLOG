<?php

/** @var Route $router */
$router->delete('blogs/{id}', [
    'as' => 'web_blog_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
