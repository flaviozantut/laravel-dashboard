<?php
Route::any('(:bundle)', function() {
    return Controller::call("thumburl::docs@index");
});

Route::any('(:bundle)/(:all?)', function($route = '') {
    $route= explode('/', $route);
    $method = isset($route[0])?$route[0]:'false';
    array_shift($route);

    return Controller::call("thumburl::thumburl@{$method}", $route);
});
