﻿<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jogo do Bicho</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <!-- Menu de cima -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Jogo do Bicho </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Conta
                                <i class="icon-user"></i>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Seu perfil</a></li>
                                    <li><a href="#">Editar seu perfil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /fim do menu de cima (NAVBAR) -->


        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!-- Inicio do menu lateral -->
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="#"><i class="menu-icon icon-home"></i>Inicio</a></li>
                                <li><a href="#"><i class="menu-icon icon-plus"></i>Criar Jogo</a></li>
                                <li><a href="#"><i class="menu-icon icon-inbox"></i>Gerenciar jogos</a></li>
                                
                                <li><a href="#"><i class="menu-icon icon-th-list"></i>Ver finalizados
                                    <b class="label green pull-right">NºDEJOGOS</b>
                                </a></li>

                            </ul>
                        <!-- Fim da primeira parte do menu lateral -->
                            
                        <!-- Segunda parte do menu lateral / ADMIN AREA -->    
                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"><i class="menu-icon icon-group"></i>Gerenciar Usuários </a></li>
                                <li><a href="#"><i class="menu-icon icon-money"></i>Gerenciar Pagamentos</a></li>
                                <li><a href="#"><i class="menu-icon icon-trophy"></i>Ver ganhadores</a></li>
                            </ul>
                        <!--/ ADMIN AREA -->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.FIM MENU LATERAL-->
                    </div>
                    <!--/.FIM MENU LATERAL-->
                    <!-- AQUI FICA O TEMPLATE -->    

                    <!--Inicio da PAGE HOME-->
                    <!-- 3 primeiros buttons, visualização de status -->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                                        <p class="text-muted">
                                            Usuários cadastrados</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65 jogos</b>
                                        <p class="text-muted">
                                            Jogos em Andamento</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-money"></i><b>R$ 15,152</b>
                                        <p class="text-muted">
                                            Acumulado do Mês</p>
                                    </a>
                                </div>
                    <!-- FIM DOS 3 primeiros BUTTOS VISU STATUS -->
                    
                                <!-- Ícones de centro -->
                                <div class="btn-box-row row-fluid">
                                    <div class="span12">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-plus"></i><b>Criar Jogo</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-inbox"></i><b>Gerenciar Jogos</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-th-list"></i><b>Ver Jogos Finalizados</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Gerenciar Usuários</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-money"></i><b>Gerenciar Pagamentos</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-trophy"></i><b>Ver Ganhadores</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Fim dos ícones da HOME CENTRO     -->
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <!-- footer do template -->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2020 - AllureDevelopment / Base in EDMIN </b><br>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
</html>
