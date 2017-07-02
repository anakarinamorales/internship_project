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

            <!-- CONTEÃšDO -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-users fa-fw"></i>Cientes</h1>
                    </div>
                </div>

                <div class="row">
                    <!-- Flots -->
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Todos os Clientes
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="clientsTable">
                                    <thead>
                                        <tr>
                                            <th>Cliente</th>
                                            <th>Editar</th>
                                            <th>Deletar</th>
                                            <th>Detalhar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once("../../src/controller/clients.php");

                                            $clientController = new ClientController();
                                            $clientes = $clientController->getAllClients();
                                        
                                            for ($i=0; $i<sizeof($clientes); $i++) {
                                                $cliente = $clientes[$i];
                                                $evenOdd = $i%2==0 ? 'even' : 'odd';

                                                echo('<tr class="'.$evenOdd.' gradeX">');
                                                    echo('<td>'.$cliente->getFirstName().' '.$cliente->getSurname().'</td>');
                                                    echo('<td><i class="fa fa-plus-circle fa-fw"></i></td>');
                                                    echo('<td><i class="fa fa-minus-circle fa-fw"></i></td>');
                                                    echo('<td><i class="fa fa-arrow-right  fa-fw"></i></td>');
                                                echo('</tr>');
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications Panel -->
                    <?php include 'notifications.php'?>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#clientsTable').DataTable({
                responsive: true
            });
        });
        </script>
    </body>
</html>