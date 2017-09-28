php vendor/bin/phinx seed:run -s AddressesSeeder
sleep 1
php vendor/bin/phinx seed:run -s ResponsiblesSeeder
sleep 1
php vendor/bin/phinx seed:run -s ClientsSeeder
sleep 1
php vendor/bin/phinx seed:run -s BillsSeeder
sleep 1
php vendor/bin/phinx seed:run -s ServicesSeeder
sleep 1
php vendor/bin/phinx seed:run -s BillAlertsSeeder
sleep 1
php vendor/bin/phinx seed:run -s SubscriptionTypesSeeder
sleep 1
php vendor/bin/phinx seed:run -s PaymentMethodsSeeder
sleep 1
php vendor/bin/phinx seed:run -s ServicesClientsSeeder
sleep 1
php vendor/bin/phinx seed:run -s UserSeeder
sleep 1
php vendor/bin/phinx seed:run -s ServicesSubscriptionTypesSeeder
sleep 1