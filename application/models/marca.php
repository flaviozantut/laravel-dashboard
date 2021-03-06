<?php
/**
 * Marcas
 *
 */
class marca extends Eloquent
{

    /**
     * special fields to form
     *
     * @var string
     */
    public static $type = 'wysiwyg';

    /**
     * Indicates if the model has update and creation timestamps.
     *
     * @var bool
     */
    public static $timestamps = true;


    
    

    /**
     * fields to be used in the form
     *
     * @return array
     */
    public static function columns()
    {
        return array(
            'id' => array(
                'input' => function($val = '') {
                    return Form::hidden('id' , $val);
                },

            ),
            'cod' => array(
                'name' => 'Codigo',
                 'label' =>  function() {
                    return Form::label('cod', 'Codigo', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::text('cod', $val, array('class'=>''));
                },
            ),

            'logo' => array(
                'name' => 'logo',
                 'label' =>  function() {
                    return Form::label('logo', 'Logo', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    $str  = HTML::image(\Config::get('admin::settings.upload_path') . "/" . $val, '');
                    $str .= Form::hidden('logo' , $val);
                    $str .= '<br />';
                    $str .= Form::file('logo',  array('class'=>''));
                    return $str;
                },
            ),

             'nome' => array(
                'name' => 'Nome',
                 'label' =>  function() {
                    return Form::label('nome', 'Nome', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {

                    return Form::text('nome', $val, array('class'=>'x-large'));
                },
            ),
        );
    }

    public static function paginate()
    {
        $items = array(
            'id',
            'cod',
            'logo',
            'nome'
        );
        return DB::table('marcas')
            ->paginate(Config::get('application.per_page'), $items);
    }


    /**
     * validation rules of the form
     *
     * @return array
     */
    public static function rules()
    {
        return array(
            //'title' => 'required' ,
            //'text' => 'required' ,
        );
    }

}
