# Interniship Project

This is a service manager system developed during my 2 months internship at college.
It uses PHP 7, Migrations, Phinx, Composer, MySQL, CSS3, Bootstrap 3 and MVC.


### Installing Composer

Enter the respective project folder and install Composer with the following commands:

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

### Installing the dependencies
```
$ php composer.phar install
```

### The test database
- Create a test database named `projeto_estagio` to be populated

- Configure the database access file (`projeto_estagio/config/db.php`)

### Running phinx migrations to create the tables
```
vendor/bin/phinx init
```

### Populating the database
```
db/seeds/seeds.sh
```
