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
            <?php include 'navigation.php';?>

            <!-- CONTEÚDO -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                        </h1>
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
                                <form role="form" method="POST" action="../../src/controller/newClient.php">
                                    <div class="col-lg-6 form-group">
                                        <label for="name">Nome</label>
                                        <input id="name" name="name" class="form-control" placeholder="ex.: João" required>
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="surname">Sobrenome</label>
                                        <input id="surname" name="surname" class="form-control" placeholder="ex.: Silva" required>
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="surname">CPF/CNPJ</label>
                                        <input id="cpf_cnpj" name="cpf_cnpj" class="form-control" placeholder="ex.: 02361854906" required>
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="phone">Telefone</label>
                                        <input id="phone" name="phone" class="form-control" placeholder="ex.: (99)99999-9999" required>
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" name="email" class="form-control" placeholder="ex.: email@email.com" required>
                                    </div>
                                    
                                     <div class="col-lg-12 form-group">
                                        <label>
                                            <br>
                                            <p class="form-control-static">
                                                Endereço
                                            </p>
                                       </label>
                                    </div>

                                    <div class="col-lg-8 form-group">
                                        <label for="street">Rua</label>
                                        <input id="street" name="street" class="form-control" placeholder="ex.: Avenida Brasil">
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <label for="number">N°</label>
                                        <input id="number" name="number" class="form-control" placeholder="ex.: 42">
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <label for="others">Complemento</label>
                                        <input id="others" name="others" class="form-control" placeholder="ex.: ap 102">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="neighborhood">Bairro</label>
                                        <input id="neighborhood" name="neighborhood" class="form-control" placeholder="ex.: Centro">
                                    </div>
                                    
                                    <div class="col-lg-6 form-group">
                                        <label for="postalCode">CEP</label>
                                        <input id="postalCode" name="postalCode" class="form-control" placeholder="ex.: 99999-999">
                                    </div>

                                    <div class="col-lg-8 form-group">
                                        <label for="city">Cidade</label>
                                        <input id="city" name="city" class="form-control" placeholder="ex.: Porto Alegre">
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <label for="state">UF</label>
                                        <input id="state" name="state" class="form-control" placeholder="ex.: Rio Grande Do Sul">
                                    </div>

                                    <div class="col-lg-2">
                                        <label for="country">País</label>
                                        <input id="country" name="country" class="form-control" placeholder="ex.: Brasil">
                                    </div>

                                    <div class="col-lg-12 form-group">
                                        <label>
                                            <br>
                                            <p class="form-control-static">
                                            Dados do Responsável
                                            </p>
                                       </label>
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="responsibleName">Nome</label>
                                        <input id="responsibleName" name="responsibleName" class="form-control" placeholder="ex.: Maria">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="responsibleSurname">Sobrenome</label>
                                        <input id="responsibleSurname" name="responsibleSurname" class="form-control" placeholder="ex.: Pereira">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="responsiblePhone">Telefone</label>
                                        <input id="responsiblePhone" name="responsiblePhone" class="form-control" placeholder="ex.: (99)99999-9999">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="responsibleEmail">E-mail</label>
                                        <input id="responsibleEmail" name="responsibleEmail" class="form-control" placeholder="ex.: email@email.com">
                                    </div>

                                    <div class="col-lg-12">
                                        <br>
                                        <button class="btn btn-outline btn-primary btn-group-justified" type="submit">Cadastrar</button>
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