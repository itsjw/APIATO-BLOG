<?php

/** @var Route $router */
$router->get('blogs', [
    'as' => 'web_blog_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
