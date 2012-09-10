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
    <script>
        var asset = function  (file) {
            return '{{asset('')}}' + file;
        };
    </script>
    {{ Asset::container('bootstrapper')->styles(); }}
    {{ HTML::script('js/libs/modernizr-2.5.3-respond-1.1.0.min.js') }}
    {{ HTML::style('basset/admin.css') }}
    {{ Asset::styles() }}
</head>
<body>
    <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        {{ $navbar }}
        {{ $content }}
      <footer>
        <p>Powered by <a href="http://ezoom.com.br" target="_bank">ezoom</a> 2012 </p>
      </footer>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/libs/jquery-1.7.2.min.js') }}"><\/script>')</script>

{{ Asset::container('bootstrapper')->scripts(); }}
{{ Asset::scripts() }}

{{ HTML::script('admin/js/app.js') }}

</body>
</html>
