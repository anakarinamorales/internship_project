<?php
require_once("../../src/controller/services.php");
require_once("../../src/controller/subscriptionTypes.php");
require_once("../../src/controller/serviceClients.php");
require_once("../../src/controller/serviceSubscriptionTypes.php");

//controller de qual serviço prossui qual plano
$serviceSubscriptionTypesController = new ServiceSubscriptionTypesController();

//controller dos planos de assinatura
$subscriptionTypeController = new SubscriptionTypeController();

//controller dos planos de assinatura
$serviceClientController = new ServiceClientController();

//controller de serviços
$serviceController = new ServiceController();

//todos os serviços disponíveis
$services = $serviceController->getAllServices();

//id do cliente que veio pela url
$clientId = $_GET['id'];

for ($i=0; $i < sizeof($services); $i++) {
    $service = $services[$i];
    $serviceSubscriptionTypes = $serviceSubscriptionTypesController->getByServiceId($service->getId());
    $clientServices = $serviceClientController->getByClientId($clientId);

    $servicosCliente = array();

    //Cria um array associando SERVICE_ID=>SUBSCRIPTION_TYPE_ID para depois comparar os serviços que o cliente já tem
    for ($s=0;$s<sizeof($clientServices);$s++) {
        $servicosCliente[$clientServices[$s]->getService()] = $clientServices[$s]->getSubscriptionType();
    }

    //Lista apenas os serviços que tem pelo menos um tipo de inscrição
    if (!$serviceSubscriptionTypes[0]) {
        continue;
    }

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
                                <th>Plano (Período)</th>
                                <th>Desconto (%)</th>
                                <th>Valor (R$)</th>
                                <th>Contratar</th>
                            </tr>
                        </thead>
					
						<tbody>
							<?php
                                for ($x=0; $x<sizeof($serviceSubscriptionTypes); $x++) {
                                    $subscriptionTypeId = $serviceSubscriptionTypes[$x][0];
                                    $subscriptionType = $subscriptionTypeController->getById($subscriptionTypeId);
                                    $evenOdd = $x%2==0 ? 'even' : 'odd';

                                    echo('<tr class="'.$evenOdd.' gradeX">');
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

                                    $clientHasService = $servicosCliente[$service->getId()] == $subscriptionTypeId;

                                    echo('<td style="padding: 0;">
                                        <button href="#" class="btn btn-primary btn-block" style="border-radius: 0; font-size: 24px; line-height: 22px;" '.($clientHasService ? "disabled" : "").'>+</button>
                                    </td>');

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