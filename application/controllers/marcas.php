<?php

class Marcas_Controller extends Admin_Base_Controller
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
        'title' =>'Produtos - Marcas',
        'navTabs' => array(
            'admin/produtos/show' => 'Produtos',
            'admin/marcas/show' => 'Marcas',
            'admin/categorias/show' => 'Categorias',
        )
    );

}
