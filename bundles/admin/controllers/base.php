<?php

class Admin_Base_Controller extends Controller
{
    public $model, $table;

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string   $method
     * @param  array    $parameters
     * @return Response
     */
    public function __call($method, $parameters)
    {
        return Response::error('404');
    }


    public function __construct()
    {
        parent::__construct();
        $this->model =  strtolower(preg_replace("/s_Controller/", '', get_class($this)));
        $this->table =  strtolower(preg_replace("/_Controller/", '', get_class($this)));

    }




    public function get_show()
    {
        $model = $this->model;

        $this->admin['dashContent'] = 'admin::admin.list';
        $this->admin['columns'] = $model::columns();


        $this->admin['data'] = $model::paginate();
        $this->admin['modelKey'] = $model::key();

        return $this->admin;
    }


    public function get_add()
    {
        Asset::add('chosen', 'libs/chosen/chosen.jquery.min.js');
        Asset::add('chosen', 'libs/chosen/chosen.css');
        Asset::add('chosen_run', 'libs/chosen/run.js');

        $model = $this->model;
        $this->admin['model'] = $model;
        $this->admin['dashContent'] = 'admin::admin.form';
        $this->admin['columns'] = $model::columns();
        $this->admin['modelKey'] = $model::key();

        $obj =  $model::columns();
        $data = new StdClass();
        foreach ($obj as $key => $val) {
            $data->$key = false;
        }
        $this->admin['data'] = $data;

        if (preg_match("/" . $model::$type . "/i", "wysiwyg")) {
            Asset::add('redactor', 'libs/redactor/redactor/redactor.css');
            Asset::add('redactor', 'libs/redactor/redactor/redactor.js');
            Asset::add('redactor_lang', 'libs/redactor/redactor/pt_br.js');
            Asset::add('redactor_run', 'libs/redactor/redactor/run.js');
        }

        return $this->admin;
    }

    public function get_edit($id)
    {
        Asset::add('chosen', 'libs/chosen/chosen.jquery.min.js');
        Asset::add('chosen', 'libs/chosen/chosen.css');
        Asset::add('chosen_run', 'libs/chosen/run.js');

        $model = $this->model;

        $this->admin['modelKey'] = $model::key();

        if (!($this->admin['data'] = $model::find($id))) {
            return Response::error('404');
        }
        $this->admin['columns'] = $model::columns();

        if (preg_match("/" . $model::$type . "/i", "wysiwyg")) {

            Asset::add('redactor', 'libs/redactor/redactor/redactor.css');
            Asset::add('redactor', 'libs/redactor/redactor/redactor.js');
            Asset::add('redactor_lang', 'libs/redactor/redactor/pt_br.js');
            Asset::add('redactor_run', 'libs/redactor/redactor/run.js');
        }

        $this->admin['dashContent'] = 'admin::admin.form';

        return $this->admin;
    }

    public function post_save()
    {
        $model = $this->model;

        $input = Input::all();
        $new = false;
        $relationship = false;
        if (!( $data = $model::find($input[$model::$key]))) {
            $data = new $model();
            $new = true;
        }

        $validation = Validator::make($input, $model::rules());

        if ($validation->fails()) {
            $this->admin['error'] =  $validation->errors->all();
            Messages::add('error', $this->admin['error']);
        } else {
            //REFATORAR
            $fields = array();
            foreach (DB::query("SHOW FIELDS FROM {$data->table()}") as $field) {
                $fields[] = $field->field;
            }

            //Input::upload('picture', 'path/to/pictures', 'filename.ext');

         //var_dump( Config::get('admin::settings.uploader') ) ;
         //die();

            foreach ($input as $key => $value) {
                if($key == "csrf_token") continue;
                if (in_array($key, $fields)) {
                    if ( in_array($key, Config::get('admin::settings.uploader'))) {
                        $data->$key = \Dash\Upload::save($key);
                    } else {
                        $data->$key = $value;
                    }

                } else {
                    $relationship = true;
                }

            }

            $data->save();
            if ($relationship) {
                $lastId = $new?DB::connection('mysql')->pdo->lastInsertId():$input[$model::$key];
                $data = $model::find($lastId);
                //var_dump($input); die();
                foreach ($input as $key => $value) {
                    if($key == "csrf_token") continue;
                    if (!in_array($key, $fields)) {
                        //$data->$key = $value;
                        //$insert = ;
                        $data->$key()->sync(is_array($value)?$value:array($value));
                    }
                }
            }
            \Dash\Messages::add('info', 'Dados atualizados');
        }

        return Redirect::to(Request::referrer());
    }

     public function post_delete()
    {

        $model = $this->model;

        $input = Input::all();


        if (($data = $model::find($input[$model::$key]))) {

            $data->delete();
            \Dash\Messages::add('info', 'Registro deletado');

            return Redirect::to(Request::referrer());
        } else {
            \Dash\Messages::add('info', 'Erro ao deletar o registro');

            return Redirect::to(Request::referrer());
        }

    }

}
