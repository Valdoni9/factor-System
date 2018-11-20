<?php
session_start();

if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "logar.php?erro=1";
    </script>
    <?php
} else {
    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>Factoring</title>

        <link rel="shortcut icon" href="img/titulo.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />      
        <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>


    <body>
        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            
                        </div>
                    </div>
                </div>
                
            </div> 
            
            <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="img/carrito-compra-ecommerce-abandono.png" alt="" />
                        </div>
                        <div id="Menu_Principal" class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Emprestimos</h4>
                            <p class="group inner list-group-item-text">
                                Aqui menu do emprestimo de pessoa fisica e pessoa juridica</p>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="formulario_pessoa_fisica.php">Pessoa Fisica</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="formulario_pessoa_juridica.php">Pessoa Juridica</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            

                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="img/transf-financiamento-2.jpg" alt="" width="350" height="175"/> 
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading"> 
                                Administração</h4>
                            <p class="group inner list-group-item-text">
                                É o ato de administrar ou gerenciar negócios, pessoas ou recursos.</p>

                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a class="btn btn-success" href="crud_usuarios.php">Criar/Editar Usuário</a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="img/secure-me-1200x500-1.jpg" alt="" width="350" height="175"/> 
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading"> 
                                Gerente</h4>
                            <p class="group inner list-group-item-text">
                                Gerente é o indivíduo responsável pelo planejamento e controle da execução de seus subordinados.</p>

                            <hr>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="crud_pessoa_fisica.php">Pessoa Física</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="crud_pessoa_juridica.php">Pessoa Jurídica</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
            
            </div>
            <a class="btn btn-danger" href="?acao=sair">Logout</a>
        </div>
        
        

        <script type="text/javascript">
        var MenuBar1 = new Spry.Widget.MenuBar("Menu_Principal", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
        </script>

  


        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="jquery-2.1.4.min.js"></script>

    </body>
</html>

    <?php
}

if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "logar.php?erro=2";
        </script>
        <?php
    }
}
?>