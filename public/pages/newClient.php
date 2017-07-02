<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>13 Bits Admin - Cadastro de Cliente</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
            <?php include 'navigation.php'?>

            <!-- CONTEÚDO -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                </div>

                <div class="row">
                    <!-- Form -->
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-plus-circle fa-fw"></i>Novo Cliente
                        </div>
                        <div class="panel-body">
                            
                                <form role="form">
                                    <div class="col-lg-6 form-group" id="name">
                                        <label>Nome </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-6 form-group" id="surname">
                                        <label>Sobrenome </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-6 form-group" id="phone">
                                        <label>Telefone </label>
                                        <input class="form-control" placeholder="(99)99999-9999">
                                    </div>

                                    <div class="col-lg-6 form-group" id="email">
                                        <label>E-mail </label>
                                        <input class="form-control" placeholder="email@email.com">
                                    </div>


                                    <div class="col-lg-8 form-group" id="street">
                                        <label>Rua </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-2 form-group" id="number">
                                        <label>N° </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-2 form-group" id="others">
                                        <label>Complemento </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-6 form-group" id="neighborhood">
                                        <label>Bairro </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>
                                    
                                    <div class="col-lg-6 form-group" id="postalcode">
                                        <label>CEP</label>
                                        <input class="form-control" placeholder="99999-999">
                                    </div>

                                    <div class="col-lg-8 form-group" id="city">
                                        <label>Cidade </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-2 form-group" id="state">
                                        <label>UF </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-2" id="country">
                                        <label>País </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-12 form-group">
                                        <label><p class="form-control-static">Dados do Responsável</p></label>
                                    </div>

                                    <div class="col-lg-6 form-group" id="responsiblename">
                                        <label>Nome </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-6 form-group" id="responsiblesurname">
                                        <label>Sobrenome </label>
                                        <input class="form-control" placeholder="aaa">
                                    </div>

                                    <div class="col-lg-6 form-group" id="responsiblephone">
                                        <label>Telefone </label>
                                        <input class="form-control" placeholder="(99)99999-9999">
                                    </div>

                                    <div class="col-lg-6 form-group" id="responsibleemail">
                                        <label>E-mail </label>
                                        <input class="form-control" placeholder="email@email.com">
                                    </div>

                                    <div class="col-lg-8">
                                        <button class="btn btn-outline btn-primary" type="submit">Cadastrar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- Notifications Panel -->
                <?php include 'notifications.php'?>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
    </body>
</html>