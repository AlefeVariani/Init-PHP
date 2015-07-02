
PHP + PHP = :)
==============

PHP a linguagem de programação mais usada para desenvolvimento web.

Conheça alguns dos recursos que o PHP lhe oferece 


Tópicos:
--------

- Iniciando
- Variáveis
- Estruturas de Controle
- Criando e usando Funções
- Formularios
- Banco de dados
- Arquivos


Obs.:
-----

Se você realmente pretende iniciar com PHP, inicie pelo começo :)

- http://php.net/manual/pt_BR/history.php


Para depois:
------------

- http://php.net/manual/pt_BR/index.php
- http://br.phptherightway.com/

Leia e Pratique





Instalação e Utilização do PHP Code Sniffer
-------------------------------------------

Para aplicação das PSR1 e PSR2

## Instalação

```
curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
```

## Utilização


Verifica no projeto se a aplicação das PSR são seguidas corretamente

```
php phpcbf.phar --standard=PSR1,PSR2 meuprojeto/
```

Verifica no projeto e traz um relatorio dos arquivos com a quantidade de ERROR ou WARNING

```
php phpcbf.phar --standard=PSR1,PSR2 --report=summary meuprojeto/
```
