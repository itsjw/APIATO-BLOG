<?php

/** @var Route $router */
$router->post('blogs/store', [
    'as' => 'web_blog_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
