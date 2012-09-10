<?php
/**
 * Products
 *
 */
class Produto extends Eloquent
{


    /**
     * special fields to form
     *
     * @var string
     */
    public static $type = 'wysiwyg';

     /**
     * table name
     *
     * @var string
     */
    //public static $table = 'produtos';


    /**
     * Indicates if the model has update and creation timestamps.
     *
     * @var bool
     */
    public static $timestamps = true;


    public function marca()
    {
          return $this->has_many_and_belongs_to('marca');
    }


    /**
     * fields to be used in the form
     *
     * @return array
     */
    public static function columns()
    {
        return array(
            'produtos.id' => array(
                'input' => function($val = '') {
                    return Form::hidden('id' , $val);
                },

            ),
            'produtos.cod as cod' => array(
                'name' => 'Codigo',
                 'label' =>  function() {
                    return Form::label('cod', 'Codigo', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::text('cod', $val, array('class'=>''));
                },
            ),

            'produtos.sku' => array(
                'name' => 'SKU',
                 'label' =>  function() {
                    return Form::label('sku', 'Sku', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::text('sku', $val, array('class'=>''));
                },
            ),

             'produtos.nome' => array(
                'name' => 'Nome',
                 'label' =>  function() {
                    return Form::label('nome', 'Nome', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::text('nome', $val, array('class'=>'x-large'));
                },
            ),

             'produtos.descricao' => array(
                'name' => 'Descrição',
                 'label' =>  function() {
                    return Form::label('descricao', 'Descrição', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::textarea('descricao', $val, array('class'=>'redactor x-large'));
                },
            ),

             'produtos.especificacoes' => array(
                'name' => 'Especificações',
                 'label' =>  function() {
                    return Form::label('especificacoes', 'Especificações', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {
                    return Form::textarea('especificacoes', $val, array('class'=>'redactor x-large'));
                },
            ),

             'marcas.nome as marca' => array(
                'name' => 'Marca',
                 'label' =>  function() {
                    return Form::label('marca', 'Marca', array( 'class' => 'large-label'));
                },
                'input' => function($val = '') {

                    //return Form::textarea('especificacoes', $val, array('class'=>'redactor x-large'));
                     $marcas = array();
                     foreach (marca::all() as $value) {
                         Log::write('info', $value->id . "  " . $value->nome);
                         $marcas[$value->id] = $value->nome;
                     }
                     
                    return Form::select('marca', $marcas, $val);
                },
            ),
        );
    }

    public static function paginate()
    {
        $items = array(
            "produtos.id",
            "produtos.cod as cod", 
            "produtos.sku" ,
            "produtos.nome" ,
            "produtos.descricao" ,
            "produtos.especificacoes" ,
            "marcas.nome as marca",
        );
        
        
        return DB::table('produtos')
            ->left_join('marca_produto', 'produtos' . '.id', '=', 'marca_produto.produto_id')
            ->left_join('marcas', 'marcas.id', '=', 'marca_produto.marca_id')
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
