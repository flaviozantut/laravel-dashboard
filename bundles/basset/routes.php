<?php

Basset::styles('style', function($basset)
{
	$basset->add('style', 'style.css');
	$basset->add('style-less', 'style.less');
});


Basset::styles('admin', function($basset)
{
	$basset->add('admin', 'admin/css/style.less');
});


Basset::styles('admin/login', function($basset)
{
	$basset->add('admin', 'admin/css/login.less');
});