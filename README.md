#Projeto Est�gio

Projeto de est�gio de Ana Karina Morales Machado.

CASO TENHA UMA VERS�O, EXECUTAR PRIMEIRO O ROLLBACK
	$ vendor/bin/phinx rollback -e development -t 0

CRIANDO AS TABELAS DO BANCO
	$ vendor/bin/phinx migrate
	
POPULANDO O BANCO
	$ db/seeds/seeds.sh 