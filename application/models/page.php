<?php

class page extends Eloquent
{
    /**
     * table key
     *
     * @var string
     */
    public static $key = 'slug';

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
            'slug' => array(
                'label' =>  function() {
                    return false;
                },
                'input' => function($val = '') {
                    return Form::hidden('slug' , $val);
                },
            ),
            'title'  => array(
                'name' => 'Titulo',
                'label' =>  function() {
                    return Form::label('title', 'Titulo', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::text('title' , $val , array('class'=>'x-large'));
                },
            ),
            'text'  => array(
                'name' => 'Text',
                'label' =>  function() {
                    return Form::label('text', 'Texto', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::textarea('text', $val, array('class'=>'redactor x-large'));
                },
            ),
        );
    }


    public static function paginate()
    {
        $items = array(
            'slug',
            'title',
            'text'
        );
        return DB::table('pages')
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
            'title' => 'required' ,
            'text' => 'required' ,
        );
    }

}
