<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>13 bits Admin</title>

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
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="glyphicon glyphicon-link"></i> Vincular serviço</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">

                            <!-- Inserir aqui nome e id do cliente -->
                            <div class="panel-heading">
                            </div>

                            <div class="panel-body" style="background-color:grey;">
                                <div class="col-lg-12" style="background-color:blue;">
                                    <div class="col-lg-10" id="pesquisarServiço">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Pesquisar serviço">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>     
                                <div style="background-color:orange;" id="listarServiços">
                                    <a href="#">Listar todos os serviços</a>
                                </div>

                                <div style="background-color:green">
                                    <Pphp include 'serviceSearch.php'?>
                                </div>
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

            <!-- Custom JavaScript -->
            <script src="../js/custom.js"></script>
        </div>
    </body>
</html>
