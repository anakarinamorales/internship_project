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
        <?php include 'navigation.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-users fa-fw"></i>Clientes</h1>
                </div>
            </div>

            <div class="row">
                 <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Clientes cadastrados no sistema
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="clientsTable">
                                <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th>Cliente</th>
                                        <th>CPF/CNPJ</th>
                                        <th>Telefone</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <?php
                                        require_once("../../src/controller/clients.php");

                                        $clientController = new ClientController();
                                        $clients = $clientController->getAllClients();

                                        for ($i=0; $i<sizeof($clients); $i++) {
                                            $client = $clients[$i];
                                            $evenOdd = $i%2==0 ? 'even' : 'odd';
                                            $clientId = $client->getId();

                                            echo('<tr class="'.$evenOdd.' gradeX">');
                                            echo('<td>'.$client->getId().'</td>');
                                            echo('<td>'.$client->getFirstName().' '.$client->getSurname().'</td>');
                                            echo('<td>NULL</td>');
                                            echo('<td>'.$client->getPhone().'</td>');

											
                                            echo('<td>
                                               <a href="linkService.php?id='.$clientId.'"style="" class="btn tip-top" title="Vincular serviço">
                                                    <i class="glyphicon glyphicon-link"></i>
                                               </a>
                                               <a href="editClient.php?id='.$clientId.'" style="" class="btn tip-top" title="Editar cliente">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </a>
                                                <a href="../../src/controller/deleteClient.php?id='.$clientId.'" style="" class="btn tip-top" title="Deletar cliente">
                                                    <i class="fa fa-times fa-fw"></i>
                                                </a>
                                                <a href="detailedClient.php?id='.$clientId.'" style="" class="btn tip-top" title="Ver mais detalhes">
                                                    <i class="fa fa-arrow-right  fa-fw"></i>
                                                </a>
                                            </td>');
                                            echo('</tr>');
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Notifications Panel -->
                <?php include 'notifications.php';?>
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

    <!-- Custom JavaScript -->
    <script src="../js/custom.js"></script>

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
