<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../pagina_inicial.php");
} else {
    echo "";
}
?>

<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="brainzer_icon.ico" TYPE="image/x-icon">
        <meta name="description" content="">
        <meta name="author" content="">
         <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

        <title>BrainZer</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #008DCE; padding-top: 10px;">
                <div class="navbar-header">

                    <a class="navbar-brand" style="background-color: #008DCE; color: #fff; height: auto !important; font-family: 'Pacifico',cursive; font-size: 34px !important; margin-left: 10px; margin-top: -8px;" href="index.php">BrainZer</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a style="background-color: #008DCE;" data-toggle="dropdown" href="#">
                            <img src="../images/lista.png" widht="20px" height="20px" style="margin-top: -8px;">
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Frutas</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Animais</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Mentalizando Objetos</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Quantos</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Caça-palavras</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Ver todos os jogos</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a style="background-color: #008DCE;" data-toggle="dropdown" href="#">
                            <img src="../images/usuario.png" widht="20px" height="20px" style="margin-top: -8px;">
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu" style="font-size: 20px; ">
                            <li>
                                <a style="color: #008DCE;" href="#"><img src="../images/ranking.png" widht="25px" height="25px"> Ranking</a>
                            </li>


                            <li>
                                <a style="color: #008DCE;" href="nivel.php?jogo=1"><img src="../images/mentalizando-azul.png" widht="25px" height="25px"> Mentalizando</a>
                            </li>
                            <li>
                                <a style="color: #008DCE;" href="nivel.php?jogo=2"><img src="../images/numbers-azul.png" widht="25px" height="25px"> Quantos?</a>
                            </li>
                            <li>
                                <a style="color: #008DCE;" href="nivel.php?jogo=3"><img src="../images/memory-azul.png" widht="25px" height="25px"> Jogo da Memória</a>
                            </li>
                            <li>
                                <a style="color: #008DCE;" href="nivel.php?jogo=2"><img src="../images/caca-palavras-azul.png" widht="25px" height="25px"> Caça-Palavras</a>
                            </li>
                            <li>
                                <a style="color: #008DCE;" href="logout.php"><img src="../images/logout.png" widht="25px" height="25px"> Sair</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 80px;">

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">1</div>
                                        <div>Muito fácil</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <?php
                                    if ($_GET["jogo"] == 1) {
                                        echo "<a class='pull-left' href='../../mentalizando_animais.php'> Nível 1 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 2) {
                                        echo "<a class='pull-left' href='../../quantos.php'> Nível 1 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 3) {
                                        echo "<a class='pull-left' href='../../jogo_memoria_frutas.php'> Nível 1 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 4) {
                                        echo "<a class='pull-left' href='../../cacapalavras.php'> Nível 1 </a></br>";
                                    }
                                    ?>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">2</div>
                                        <div>Fácil</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <?php
                                    if ($_GET["jogo"] == 1) {
                                        echo "<a class='pull-left' href='../../mentalizando_frutas.php'> Nível 2 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 2) {
                                        echo "<a class='pull-left' href='../../quantos_nivel2.php'> Nível 2 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 3) {
                                        echo "<a class='pull-left' href='../../jogo_memoria_animais.php'> Nível 2 </a></br>";
                                    }
                                    if ($_GET["jogo"] == 4) {
                                        echo "<a class='pull-left' href='../../cacapalavras.php'> Nível 2 </a></br>";
                                    }
                                    ?>
                                </span></a>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Médio</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <?php
                                if ($_GET["jogo"] == 1) {
                                    echo "<a class='pull-left' href='../../mentalizando_objetos.php'> Nível 3 </a></br>";
                                }
                                if ($_GET["jogo"] == 2) {
                                    echo "<a class='pull-left' href='../../quantos_nivel3.php'> Nível 3 </a></br>";
                                }
                                if ($_GET["jogo"] == 3) {
                                    echo "<a class='pull-left' href='../../jogo_memoria_objetos.php'> Nível 3 </a></br>";
                                }
                                if ($_GET["jogo"] == 4) {
                                    echo "<a class='pull-left' href='../../cacapalavras.php'> Nível 3 </a></br>";
                                }
                                ?> 
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Difícil</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <?php
                                if ($_GET["jogo"] == 1) {
                                    echo "<a class='pull-left' href='../../mentalizando_comida.php'> Nível 4 </a></br>";
                                }
                                if ($_GET["jogo"] == 2) {
                                    echo "<a class='pull-left' href='../../quantos_nivel4.php'> Nível 4 </a></br>";
                                }
                                if ($_GET["jogo"] == 3) {
                                    echo "<a class='pull-left' href='../../jogo_memoria_comida.php'> Nível 4 </a></br>";
                                }
                                if ($_GET["jogo"] == 4) {
                                    echo "<a class='pull-left' href='../../cacapalavras.php'> Nível 4 </a></br>";
                                }
                                ?> 
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
