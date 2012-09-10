<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inputs to upload
    |--------------------------------------------------------------------------
    |
    |Define os campos das tabelas que deverão ser tratados como arquivos para upload
    |
    */

    'uploader' => array(
        'foto' ,
        'logo' ,
        'file' ,
    ),


     /*
    |--------------------------------------------------------------------------
    | upload_path
    |--------------------------------------------------------------------------
    |Local onde serão salvos os arquivos
    */

    'upload_path' => 'public/uploads',

    

    /*
    |--------------------------------------------------------------------------
    | Itens por página
    |--------------------------------------------------------------------------
    |Numero de itens a serem exibidos em paginações
    */

    'per_page' => 10,

);
