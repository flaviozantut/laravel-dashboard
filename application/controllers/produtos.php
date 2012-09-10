<?php

class Produtos_Controller extends Admin_Base_Controller
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
        'title' =>'Produtos' ,

        'navTabs' => array(
            'admin/produtos' => 'Produtos' ,
            'admin/fotos' => 'Fotos' ,
            'admin/marcas' => 'Marcas' ,
            'admin/categorias' => 'Categorias' ,

        ) ,
        'addTabs' => array(
            'admin/produtos/add' => 'Produto' ,
            'admin/fotos/add' => 'Fotos' ,
            'admin/marcas/add' => 'Marcas' ,
            'admin/categorias' => 'Categorias' ,
        ) ,
    );

}
