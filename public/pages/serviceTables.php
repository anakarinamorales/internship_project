<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            E-mail
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Plano</th>
                            <th>Valor</th>
                            <th>Desconto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Mensal</td>
                            <td>R$20,99</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Semestral</td>
                            <td>R$20,99</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Anual</td>
                            <td>R$20,99</td>
                            <td>25%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Hospedagem
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Plano</th>
                            <th>Valor</th>
                            <th>Desconto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Mensal</td>
                            <td>R$33,99</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Semestral</td>
                            <td>R$33,99</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Anual</td>
                            <td>R$33,99</td>
                            <td>25%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Combo
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Plano</th>
                            <th>Valor</th>
                            <th>Desconto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../../src/controller/services.php");
                        require_once("../../src/controller/subscriptionTypes.php");

                        $serviceController = new ServiceController();
                        $service = $clientController->getServiceById(3);

                        $subscriptionTypeController = new SubscriptionTypeController();
                        $subscriptionType = $subscriptionTypeController->getAllSubscriptionTypes();

                        for ($i=0; $i<sizeof($clientes); $i++) {
                            $subscriptionType = $subscriptionType[$i];
                            $evenOdd = $i%2==0 ? 'even' : 'odd';

                            echo('<tr class="'.$evenOdd.' gradeX">');
                            echo('<td>'.$subscriptionType->getId()'</td>');
                            echo('<td>'.$subscriptionType->getDescription()'</td>');
                            echo('<td>'.$service->getValue()'</td>');
                            echo('<td>'.$subscriptionType->getDiscount()'</td>');
                            echo('</tr>');
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>