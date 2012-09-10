<?php
Route::any('(:bundle)', function()
{
	return Controller::call("admin::admin@dashboard");
});

Route::any('(:bundle)/(:all?)', function($route = '')
{
	$route= explode('/', $route);
	$controller = isset($route[0])?$route[0]:'dashboard';
	array_shift($route);
	return Controller::call("admin::admin@{$controller}", $route);
});

