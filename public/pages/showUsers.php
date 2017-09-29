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
                    <h1 class="page-header"><i class="fa fa-users fa-fw"></i> Usuários</h1>
                </div>
            </div>

            <div class="row">
                 <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todos os Usuários
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="clientsTable">
                                <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Conta</th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <?php
                                        require_once("../../src/controller/users.php");

                                        $userController = new UserController();
                                        $users = $userController->getAllUsers();

                                        for ($i=0; $i<sizeof($users); $i++) {
                                            $user = $users[$i];
                                            $evenOdd = $i%2==0 ? 'even' : 'odd';
                                            $userId = $user->getId();

                                            echo('<tr class="'.$evenOdd.' gradeX">');
                                            echo('<td>'.$user->getId().'</td>');
                                            echo('<td>'.$user->getName().' '.$user->getSurname().'</td>');
                                            echo('<td>'.$user->getEmail().'</td>');
                                            echo('<td>'.$user->getAccountType().'</td>');

                                            echo('<td>
                                                <a href="../../src/controller/deleteUser.php?id='.$userId.'" style="" class="btn tip-top" title="Deletar usuário">
                                                    <i class="fa fa-times fa-fw"></i>
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