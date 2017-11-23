<!DOCTYPE html>
<html>
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
            <?php include 'navigation.php';?>

            <!-- Content -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-tags fa-fw"></i>Serviços</h1>
                    </div>
                </div>

                <!-- Form -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <i class="fa fa-plus-circle fa-fw"></i> Novo Serviço
                        </div>

                        <div class="panel-body"> 
                            <form role="form" method="POST" action="../../src/controller/newService.php">
                                <div class="col-lg-10 form-group">
                                    <label for="serviceName">Serviço </label>
                                    <input class="form-control" placeholder="Tipo de serviço" id="serviceName" name="serviceName">
                                </div>

                                <div class="col-lg-2 form-group">
                                    <label for="serviceValue">Valor (R$) </label>
                                    <input class="form-control" placeholder="350,00"  id="serviceValue" name="serviceValue">
                                </div>

                                <div class="col-lg-12">
                                    <p>
                                        <label> Tipos de inscrição aceitas</label>
                                    </p>
                                </div>

                                <div class="form-check col-lg-12">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="1" id="mensalSubscription" name="mensalSubscription">
                                            Mensal
                                    </label>
                                </div>

                                <div class="form-check col-lg-12">
                                    <label class="form-check-label"> 
                                        <input class="form-check-input" type="checkbox" value="1" id="semestralSubscription" name="semestralSubscription">
                                            Semestral
                                    </label>
                                </div>

                                <div class="form-check col-lg-12">
                                    <label class="form-check-label"> 
                                        <input class="form-check-input" type="checkbox" value="1" id="anualSubscription" name="anualSubscription">
                                            Anual
                                    </label>
                                </div>
                    
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-outline btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>        
                </div>

                <!-- Painel de Alertas -->
                <?php include 'notifications.php';?>
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
    </body>
</html>