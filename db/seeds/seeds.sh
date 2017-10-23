php vendor/bin/phinx seed:run -s AddressesSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s ResponsiblesSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s ClientsSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s BillsSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s ServicesSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s BillAlertsSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s SubscriptionTypesSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s PaymentMethodsSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s ServicesClientsSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s UserSeeder
sleep 0.5
php vendor/bin/phinx seed:run -s ServicesSubscriptionTypesSeeder
sleep 0.5