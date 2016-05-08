<?php

class Router extends \Leno\Routing\Router
{
    protected $rules = [
        'app/${1}' => 'index/${1}',
        'app' => 'index',
    ];
}
