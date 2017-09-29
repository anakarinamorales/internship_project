#Projeto Estágio

Projeto de estágio de Ana Karina Morales Machado.

CASO TENHA UMA VERSÂO, EXECUTAR PRIMEIRO O ROLLBACK
	$ vendor/bin/phinx rollback -e development -t 0

CRIANDO AS TABELAS DO BANCO
	$ vendor/bin/phinx migrate
	
POPULANDO O BANCO
	$ db/seeds/seeds.sh 