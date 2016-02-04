<?php

Filter::add('shield:path', function($path) {
    if(Config::get('page_type') === '404') {
        return __DIR__ . DS . 'workers' . DS . '404.php';
    }
    return $path;
});