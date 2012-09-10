<?php

class Pages_Controller extends Base_Controller
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
        'title' =>'Institucional',
        'model' => 'Page',
        'inputs' => array(
        ),
        /*'navTabs' => array(
            'admin/pages/edit/sobre-a-emresa' => 'Sobre a Empresa',
            'admin/pages/edit/informacoes-de-entrega' => 'Informações de Entrega',
            'admin/pages/edit/politica-de-privacidade' => 'Politica de Privacidade',
            'admin/pages/edit/termos-e-condicoes' => 'Termos e Condições',
        ),*/
        'addTabs' => array(),
    );
}
