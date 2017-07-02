<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Ana Karina Machado">

        <title>13 bits Admin - Home</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- My Custom CSS -->
        <link href="../dist/css/mycss.css" rel="stylesheet">

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
                        <h1 class="page-header"><i class="fa fa-tags fa-fw"></i>Serviços</h1>
                    </div>
                </div>

                <div class="row">
                    <!-- Form -->
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-plus-circle fa-fw"></i>Novo Serviço
                        </div>
                        <div class="panel-body">
                            
                            <form role="form">
                                <div class="col-lg-10 form-group" id="servicename">
                                    <label>Serviço </label>
                                    <input class="form-control" placeholder="Tipo de serviço">
                                </div>

                                <div class="col-lg-2 form-group" id="servicevalue">
                                    <label>Valor (R$) </label>
                                    <input class="form-control" placeholder="350,00">
                                </div>

                                <div class="col-lg-12 form-group">
                                    <label><p class="form-control-static">% desconto por plano</p></label>
                                </div>

                                <div class="col-lg-2 form-group" id="mensaldiscount">
                                    <label>Mensal (%) </label>
                                    <input class="form-control" placeholder="5">
                                </div>

                                <div class="col-lg-2 form-group" id="semestraldiscount">
                                    <label>Semestral (%) </label>
                                    <input class="form-control" placeholder="15">
                                </div>

                                <div class="col-lg-2 form-group" id="anualdiscount">
                                    <label>Anual (%) </label>
                                    <input class="form-control" placeholder="25">
                                </div>

                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-outline btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>        
                </div>

                <!-- Painel de Alertas -->
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