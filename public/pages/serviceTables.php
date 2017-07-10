<?php
require_once("../../src/controller/services.php");
require_once("../../src/controller/subscriptionTypes.php");

$subscriptionTypeController = new SubscriptionTypeController();
$serviceController = new ServiceController();

$services = $serviceController->getAllServices();
$subscriptionTypes = $subscriptionTypeController->getAllSubscriptionTypes();

for ($i=0; $i < sizeof($services); $i++) {
    $service = $services[$i];

    ?>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $service->getDescription().' (R$ '.str_replace('.', ',', $service->getValue()).')' ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped  table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Plano (Período)</th>
                                    <th>Desconto (%)</th>
                                    <th>Valor (R$)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($x=0; $x<sizeof($subscriptionTypes); $x++) {
                                    $subscriptionType = $subscriptionTypes[$x];
                                    $evenOdd = $x%2==0 ? 'even' : 'odd';

                                    echo('<tr class="'.$evenOdd.' gradeX">');
                                        echo('<td>'.$subscriptionType->getId().'</td>');
                                        echo('<td>'.$subscriptionType->getDescription().'</td>');
                                        echo('<td>'.$subscriptionType->getDiscount().'</td>');
                                        
                                        $discount = $subscriptionType->getDiscount();
                                        $discount = $discount/100;
                                        $serviceValue = $service->getValue();
                                        $discount = $discount * $serviceValue;
                                        $total = $serviceValue - $discount;

                                        /* Formata a exibição do valor para duas casas decimais, arredondando os valores*/
                                        // $total = number_format($total, 2, '.', '');

                                        /* Formata a exibição do valor para até duas casas decimais, sem arredondamento */
                                        $total = substr($total, 0, strrpos($total, '.')+3);

                                        echo('<td>'.str_replace('.', ',', $total).'</td>');
                                    echo('</tr>');
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>