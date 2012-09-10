<?php

class Categorias_Controller extends Base_Controller
{
    /**
     * The layout being used by the controller.
     *
     * @var string
     */
    public $layout = 'layouts.common';

    /**
     * Indicates if the controller uses RESTful routing.
     *
     * @var bool
     */
    public $restful = true;

    public $admin = array(
        'title' =>'Produtos - Categorias',
        'navTabs' => array(
            'admin/produtos' => 'Produtos',
            'admin/marcas' => 'Marcas',
            'admin/categorias' => 'Categorias',
        )
    );

}
