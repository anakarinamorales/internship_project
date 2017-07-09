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
                        <?php
                        require_once("../../src/controller/services.php");
                        require_once("../../src/controller/subscriptionTypes.php");

                        $emailServiceController = new ServiceController();
                        $emailService = $emailServiceController->getServiceById(2);

                        $emailSubscriptionTypeController = new SubscriptionTypeController();
                        $emailSubscriptionTypes = $emailSubscriptionTypeController->getAllSubscriptionTypes();

                        for ($i=0; $i<sizeof($emailSubscriptionTypes); $i++) {
                            $emailSubscriptionType = $emailSubscriptionTypes[$i];
                            $evenOdd = $i%2==0 ? 'even' : 'odd';

                            echo('<tr class="'.$evenOdd.' gradeX">');
                                echo('<td>'.$emailSubscriptionType->getId().'</td>');
                                echo('<td>'.$emailSubscriptionType->getDescription().'</td>');
                                echo('<td>'.$emailService->getValue().'</td>');
                                echo('<td>'.$emailSubscriptionType->getDiscount().'%'.'</td>');
                            echo('</tr>');
                        }
                        ?>
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
                        <?php
                        require_once("../../src/controller/services.php");
                        require_once("../../src/controller/subscriptionTypes.php");

                        $hostServiceController = new ServiceController();
                        $hostService = $hostServiceController->getServiceById(2);

                        $hostSubscriptionTypeController = new SubscriptionTypeController();
                        $hostSubscriptionTypes = $hostSubscriptionTypeController->getAllSubscriptionTypes();

                        for ($i=0; $i<sizeof($hostSubscriptionTypes); $i++) {
                            $hostSubscriptionType = $hostSubscriptionTypes[$i];
                            $evenOdd = $i%2==0 ? 'even' : 'odd';

                            echo('<tr class="'.$evenOdd.' gradeX">');
                                echo('<td>'.$hostSubscriptionType->getId().'</td>');
                                echo('<td>'.$hostSubscriptionType->getDescription().'</td>');
                                echo('<td>'.$hostService->getValue().'</td>');
                                echo('<td>'.$hostSubscriptionType->getDiscount().'%'.'</td>');
                            echo('</tr>');
                        }
                        ?>
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

                        $comboServiceController = new ServiceController();
                        $comboService = $comboServiceController->getServiceById(3);

                        $comboSubscriptionTypeController = new SubscriptionTypeController();
                        $comboSubscriptionTypes = $comboSubscriptionTypeController->getAllSubscriptionTypes();

                        for ($i=0; $i<sizeof($comboSubscriptionTypes); $i++) {
                            $comboSubscriptionType = $comboSubscriptionTypes[$i];
                            $evenOdd = $i%2==0 ? 'even' : 'odd';

                            echo('<tr class="'.$evenOdd.' gradeX">');
                                echo('<td>'.$comboSubscriptionType->getId().'</td>');
                                echo('<td>'.$comboSubscriptionType->getDescription().'</td>');
                                echo('<td>'.$comboService->getValue().'</td>');
                                echo('<td>'.$comboSubscriptionType->getDiscount().'%'.'</td>');
                            echo('</tr>');
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>