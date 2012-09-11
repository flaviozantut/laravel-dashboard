<?php namespace Dash;

class form extends \Laravel\Form
{
    /**
     * Cria um form conforme os dados recebidos
     *
     * @param  array  $description columns from model
     * @param  string $data        data to input valua
     * @return string
     */
    public static function build($description, $data)
    {
        $edit = property_exists($data , 'attributes');
        $form = '';
        $val = false;
        $form .= Form::token();
        foreach ($description as $column => $espec) {
            $column = preg_replace("/^(.*\.)|(.*as )/", '', $column);

            if (property_exists($data , $column) or $edit) {
                if (gettype($data->{$column})  == 'array') {
                    //$val = isset($data->find($data->{$data::$key})->{$column}[0]->{$column::$key})?$data->find($data->{$data::$key})->{$column}[0]->{$column::$key}:false;
                    
                    $val = array();
                    foreach ($data->find($data->{$data::$key})->{$column}()->get() as $value) {
                        $val[] = $value->{$column::$key};
                    }

                   
                } else {
                    $val = $data->{preg_replace("/^(.*\.)|(.*as )/", '', $column)};
                }
            } else {
                $val =false;
            }

            $form .= '<div class="control-group" >';
            $form .= isset($espec['label'])?$espec['label']():'';
            $form .= isset($espec['input'])?$espec['input']($val):'';
            $form .= '</div>';
        }

        return $form;

    }

}
