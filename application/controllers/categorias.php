<?php

class Categorias_Controller extends  Admin_Base_Controller
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
        'title' =>'Produtos - Categorias' ,

        'navTabs' => array(
            'admin/produtos' => 'Produtos' ,
            'admin/fotos' => 'Fotos' ,
            'admin/marcas' => 'Marcas' ,
            'admin/categorias' => 'Categorias' ,
            'admin/subcategorias' => 'Subcategorias'

        ) ,
        'addTabs' => array(
            'admin/produtos/add' => 'Produto' ,
            'admin/fotos/add' => 'Fotos' ,
            'admin/marcas/add' => 'Marcas' ,
            'admin/categorias/add' => 'Categorias' ,
            'admin/subcategorias/add' => 'Subcategorias' , 
        ) ,
    );

}
