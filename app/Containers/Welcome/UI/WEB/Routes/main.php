<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);
$router->get('/about', [
    'uses' => 'Controller@sayAbout',
]);

//$router->get('/about', [
//    'as' =>  'get_main_about_page',
//    'user' => 'Controller@sayAbout'
//]);
