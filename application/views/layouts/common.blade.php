<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ Config::get('application.language') }}"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="{{ Config::get('application.language') }}"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="{{ Config::get('application.language') }}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ Config::get('application.language') }}"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">

    {{ HTML::style('basset/style.css') }}
    {{ Asset::styles() }}
    {{ HTML::script('js/libs/modernizr-2.5.3-respond-1.1.0.min.js') }}

</head>
<body>
    <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <div class="left-wrapper">
        <div class="left-logo-wrapper"></div>
    </div>
    <div class="right-wrapper">
        <div class="right-footer"></div>
    </div>
    <header>
        <div class="container">
            <div class="logo-wrapper">
                <a href="{{ URL::home() }}"> {{ HTML::image('img/bomtec-logo.png', 'bomtec') }} </a>
            </div>
            <nav>
                <div class="top-menu">
                    <a href="">{{ __('main.area_restrita') }}</a>
                    <a href="{{ \Toolbox\Url::switchUri('pt') }}"> {{ HTML::image('img/lang/pt.png', 'pt') }} </a>
                    <a href="{{ \Toolbox\Url::switchUri('en') }}"> {{ HTML::image('img/lang/en.png', 'en') }} </a>
                    <a href="{{ \Toolbox\Url::switchUri('es') }}"> {{ HTML::image('img/lang/es.png', 'es') }} </a>
                </div>
                <div class="main-menu">
                    <ul>
                        <li style="border-left:none">{{ HTML::link('', __('main.home')) }}</li>
                        <li>{{ HTML::link('a_bomtec',  __('main.a_bomtec')) }}</li>
                        <li>
                            <a href="">{{ __('main.produtos') }} <b>&or;</b></a>
                            <ul>
                                <li style="border-top:none">{{ HTML::link('', 'Capota') }}</li>
                                <li>{{ HTML::link('', 'Capota') }}</li>
                                <li style="border-bottom:none">{{ HTML::link('', 'lonas marítmas') }}</li>

                            </ul>
                        </li>

                        <li>{{ HTML::link('noticias', __('main.noticias')) }}</li>
                        <li>{{ HTML::link('representantes', __('main.representantes')) }}</li>
                        <li style="border-right:none">{{ HTML::link('contato', __('main.contato')) }}</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

  <!--<div class="container">
    <div class="row">
      <div class="span16">
        <h1>{{$title}}</h1>
        <hr>

        @if (Session::has('message'))
          <div class="alert-message success">
            <p>{{Session::get('message')}}</p>
          </div>
        @endif

        @if($errors->has())
          <div class="alert-message error">
            @foreach ($errors->all('<p>:message</p>') as $error) {{$error}}
            @endforeach
          </div>
        @endif
      </div>
      <div class="span16">
        {{$content}}
      </div>
    </div>
  </div>-->

      <footer>
        <div class="container">
            <div class="social"> a
            </div>
            <p>&copy; Company 2012</p>
        </div>

      </footer>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/libs/jquery-1.7.2.min.js') }}"><\/script>')</script>

{{ HTML::script('js/plugins.js') }}
{{ HTML::script('js/script.js') }}
{{ Asset::scripts() }}
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
