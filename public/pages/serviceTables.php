<?php
require_once("../../src/controller/services.php");
require_once("../../src/controller/subscriptionTypes.php");
require_once("../../src/controller/serviceSubscriptionTypes.php");


//controller de qual serviço prossui qual plano
$serviceSubscriptionTypesController = new ServiceSubscriptionTypesController();

//controller dos planos de assinatura
$subscriptionTypeController = new SubscriptionTypeController();

//controller de serviços
$serviceController = new ServiceController();

//todos os serviços disponíveis
$services = $serviceController->getAllServices();

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
								$serviceId = $service->getId();
								$serviceSubscriptionTypes = $serviceSubscriptionTypesController->getServiceSubscriptionTypes($serviceId);

								for ($x=0; $x<sizeof($serviceSubscriptionTypes)-1; $x++) {
									$evenOdd = $x%2==0 ? 'even' : 'odd';

                                    echo('<tr class="'.$evenOdd.' gradeX">');
                                        echo('<td>'.$serviceSubscriptionTypes->getDescription().'</td>');
                                        echo('<td>'.$serviceSubscriptionTypes->getDiscount().'</td>');
                                        
                                        $discount = $serviceSubscriptionTypes->getDiscount();
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