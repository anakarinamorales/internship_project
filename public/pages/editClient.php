<?php
require_once("../../src/controller/clients.php");

$host = getallheaders()['Host'];
session_start();

//id do cliente que veio pela url
$clientId = $_GET['id'];

//cast pra int do id do cliente
$clientId = (int)$clientId;

//controller do cliente
$clientController = new ClientController();

//pega as informações do cliente
$client = $clientController->getClientById($clientId);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>13 Bits Admin - Edição de Cliente</title>

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
</head>

<body>
    <!-- Navigation -->
     <?php include 'navigation.php';?>

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
                        <i class="glyphicon glyphicon-pencil"></i>Editar Cliente
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="../../src/controller/editClient.php">

                            <input id="id" name="id" class="form-control" type="hidden" value="<?= $client['id'] ?>" />

                            <div class="col-lg-6 form-group">
                                <label for="firstName">Nome</label>
                                <input id="firstName" name="firstName" class="form-control" value="<?= $client['first_name'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="surname">Sobrenome </label>
                                <input id="surname" name="surname" class="form-control" <input value="<?= $client['surname'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="phone">Telefone </label>
                                <input id="phone" name="phone" class="form-control" <input value="<?= $client['phone'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="email">E-mail </label>
                                <input id="email" name="email" class="form-control" <input value="<?= $client['email'] ?>" />
                            </div>


                            <div class="col-lg-8 form-group">
                                <label for="street">Rua </label>
                                <input id="street" name="street" class="form-control" <input value="<?= $client['street'] ?>" />
                            </div>

                            <div class="col-lg-2 form-group">
                                <label for="number">N° </label>
                                <input id="number" name="number" class="form-control" <input value="<?= $client['number'] ?>" />
                            </div>

                            <div class="col-lg-2 form-group">
                                <label for="others">Complemento </label>
                                <input id="others" name="others" class="form-control" <input value="<?= $client['others'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="neighborhood">Bairro </label>
                                <input id="neighborhood" name="neighborhood" class="form-control" value="<?= $client['neighborhood'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="postalCode">CEP</label>
                                <input id="postalCode" name="postalCode" class="form-control" value="<?= $client['postal_code'] ?>" />
                            </div>

                            <div class="col-lg-8 form-group">
                                <label for="city">Cidade </label>
                                <input id="city" name="city" class="form-control" value="<?= $client['city'] ?>" />
                            </div>

                            <div class="col-lg-2 form-group">
                                <label for="state">UF </label>
                                <input id="state" name="state" class="form-control" value="<?= $client['state'] ?>" />
                            </div>

                            <div class="col-lg-2">
                                <label for="country">País </label>
                                <input id="country" name="country" class="form-control" value="<?= $client['country'] ?>" />
                            </div>

                            <div class="col-lg-12 form-group">
                                <label><p class="form-control-static">Dados do Responsável</p></label>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="responsibleName">Nome </label>
                                <input id="responsibleName" name="responsibleName" class="form-control" value="<?= $client['responsible_name'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="responsibleSurname">Sobrenome </label>
                                <input id="responsibleSurname" name="responsibleSurname" class="form-control" value="<?= $client['responsible_surname'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="responsiblePhone">Telefone </label>
                                <input id="responsiblePhone" name="responsiblePhone" class="form-control" value="<?= $client['responsible_phone'] ?>" />
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="responsibleEmail">E-mail </label>
                                <input id="responsibleEmail" name="responsibleEmail" class="form-control" value="<?= $client['responsible_email'] ?>" />
                            </div>

                            <div class="col-lg-8">
                                <button class="btn btn-outline btn-primary" type="submit">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Notifications Panel -->
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
