<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>13 Bits - Gerenciador</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Social Buttons CSS -->
        <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="background-color: #2d4373;">
                    <h1 class="login-title">13 Bits <br/> Gerenciador</h1>
                
                    <div class="login-panel panel panel-default" style="margin-top: 30%">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-user"></span>
                                <p>Login</p>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="../../src/controller/login.php" method="POST">
                                    <fieldset>
                                        <!-- Login normal -->
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                            </label>
                                        </div>

                                        <button class="btn btn-lg btn-primary btn-block">Login</button>

                                        <div class="col-md-offset-3">
                                            <label>
                                                <a href=""><br>Esqueceu sua senha?</a>
                                            </label>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script src="../dist/js/custom.js"></script>
    </body>
</html>