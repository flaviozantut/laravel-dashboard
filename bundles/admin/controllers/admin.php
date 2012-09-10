<?php

class Admin_Admin_Controller extends Admin_Base_Controller
{
    /**
     * The layout being used by the controller.
     *
     * @var string
     */
    public $layout = 'admin::layouts.admin';

    /**
     * Indicates if the controller uses RESTful routing.
     *
     * @var bool
     */
    public $restful = true;

    /**
     * Dados que serão enviados a view
     *
     * @var array
     */
    public $data = array();

    /**
     * Construtor do  controller
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->filter('before', 'auth')->except(array('auth', 'test'));

    }

    /**
    * Load method from controller
    */
    public function __call($controller, $parameters)
    {
        $patterns = array('/^action_/', '/^get_/', '/^post_/');
        $controller =  preg_replace($patterns, '', $controller);

        if (!isset($parameters[0])) {
            $method = 'show';
        } else {
            $method = $parameters[0];
            unset($parameters[0]);
        }

        if ($controller != 'admin') {

            $call = Controller::call("{$controller}@{$method}" , $parameters);

            if (!$call->content) {
                return  $call;
            } elseif (isset($call->content->view) and $call->content->view == "error.404") {
                 return Response::error('404');
            }

            $call = $call->content;
            $call['controller'] = $controller;
            $call['method'] = $method;
            $this->layout->title   = "Dashboard | " . $call['title'];
            $this->layout->navbar = View::make('admin::admin.navbar')->with($call);
            $this->layout->content = View::make('admin::admin.dashboard')->with($call)->nest('dashContent', $call['dashContent'] , $call);
        } else {
           return Response::error('404');
        }

    }

    /**
     * Redirect for login
     *
     * @return redirect
     */
    public function get_index()
    {
        return Redirect::to_action("admin@auth");
    }

    /**
     * Form Login
     *
     * Exibe o formulário de login ou redireciona para tela
     * inicial do admin caso o usuário já esteja logado
     *
     * @return mixed
     */
    public function get_auth()
    {
        Asset::add('form', 'basset/admin/login.css');

        $this->layout->title   = 'Dashboard Login';
        $this->data = array(
            'title' => $this->layout->title,
        );

        if (Sentry::check()) {
            Messages::add('info','Você já está logado');

            return Redirect::to('admin/dashboard');
        }
         $this->layout->navbar = '';
        $this->layout->content = View::make('admin.login')->with($this->data);
    }

    /**
     * Login User
     *
     * @return redirect
     */
    public function post_auth()
    {
        /*******************************
        Usuário de testes
        user: flaviozantut@gmail.com
        pass: 123456
        *******************************/
        $input = Input::all();
        if ($input['csrf_token'] == Session::token()) {
            try {
                $valid_login = Sentry::login($input['username'], $input['password'], true);
                if ($valid_login) {
                    Messages::add('sucess','Logado!');
                } else {
                    Messages::add('error','Erro!');
                }
            } catch (Sentry\SentryException $e) {
                Messages::add('error',$e->getMessage());
            }
        } else {
            Messages::add('error','token ERROR');
        }

        return Redirect::to('admin/auth')->with_input();
    }

    /**
     * Logout User
     *
     * @return redirect
     */
    public function get_logout()
    {
        Sentry::logout();
        Messages::add('info','A sessão foi destruida');

        return Redirect::to('admin/auth');
    }

    /**
     * Dashbord Home Page
     *
     * @return view
     */
    public function get_dashboard()
    {
        //Asset::add('form', 'basset/admin/login.css');

        $this->layout->title   = 'Dashboard Login';
        $this->data = array(
            'title' => $this->layout->title,
        );
        $this->data = $admin = array(
        'title' =>'Produtos',
        'dashContent' => 'admin',
        'navTabs' => array()
    );
        $this->layout->navbar = View::make('admin::admin.navbar')->with($this->data);
        $this->layout->content = View::make('admin::admin.dashboard')->with($this->data);
    }

}
