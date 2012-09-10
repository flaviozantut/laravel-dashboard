<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>

            {{ HTML::link('admin', 'dashboard', array('class' => 'brand')) }}
            <div class="nav-collapse">
                <ul class="nav">

                    <li class="{{ URI::is('*admin/dashboard*')?'active':'' }}">{{ HTML::link('admin', 'Home') }}</li>
                   
                    <li class="{{ URI::is('*admin/produtos*')?'active':'' }}">{{ HTML::link('admin/produtos', 'Produtos') }}</li>
                    <li class="{{ URI::is('*admin/pedidos*')?'active':'' }}">{{ HTML::link('admin/pedidos', 'Pedidos') }}</li>
                    
                    <li class="{{ URI::is('*admin/users*')?'active':'' }}">{{ HTML::link('admin/users', 'Usuários') }}</li>
                    <li class="{{ URI::is('*admin/pages*')?'active':'' }}">{{ HTML::link('admin/pages', 'Institucional') }}</li>
                    <?php /*<li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Sobre a Empresa</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Informações de Entrega</a></li>
                            <li><a href="#">Politica de Privacidade</a></li>
                            <li><a href="#">Termos e Condições</a></li>
                        </ul>
                    </li>*/ ?>


                </ul>

                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://avatars.io/auto/flaviozantut" style="height:34px; width:34px;  border:solid 1px #EB5F3A; margin-right:3px"  /></a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>-->
                            <li>{{ HTML::link('admin/logout', 'Sair') }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
