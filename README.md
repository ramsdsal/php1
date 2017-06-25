exercicio test
===========

Summary
----------------------------

We hebben twee soorten entiteiten: groepen en items. Een groep heeft een naam en kan zitten in een andere groep. Een item heeft een naam en kan zitten in een groep. Maak een overzicht dat deze opzet weerspiegelt. Zorg daarbij dat de naam van een item doorlinkt naar een detailpagina waarop enkel de naam van het item wordt getoond.
 
Bied onder het overzicht enerzijds de mogelijkheid om een nieuwe groep toe te voegen, anderzijds om een nieuw item toe te voegen. Houdt hierbij rekening met de hiërarchische positie waarbinnen het nieuwe object toegevoegd moet worden.
Zorg voor een rudimentaire opmaak die aansluit op de bovenstaande structuur. De opmaak moet enigszins toonbaar zijn en bruikbaar genoeg om in toekomst verder te kunnen stijlen (bijvoorbeeld door een designer).
 
Stuur je oplossing op als pull request in de repository https://bitbucket.org/hvmpprojects/rdelgado/. Na afronding van de sollicitatie zullen we de repository privé maken, dan wel verwijderen.
 
Belangrijk: hou het simpel en overzichtelijk. Allerlei libraries/frameworks zijn niet nodig, het gaat puur om een stuk basis PHP. Liever enkele schoonheidsfoutjes dan het gebruik van overtollige code..
We vermoeden dat je naar aanleiding van deze uitleg nog wel wat vragen zal hebben. Geef het aan, dan sturen we zo spoedig mogelijk een reactie.


Configuracao
----------------------------

Vamos usar a pasta config para armazenar todos os detalhes de configuracao.Por exemplo, no ficheiro /config/database.php iremos ter dados de accesso de base de dados.

Pre-requitos
----------------------------

This script was tested on the LAMP server running:

    PHP 5.6
    mysql pdo
    composer
    GIT

Instalation
----------------------------

Estando na pasta do projecto, vais executar o commando:
```
composer install
```

Test
----------------------------

Estando na pasta do projecto, vais executar o commando:
```
vendor/bin/phpunit
```

Este comando ira correr todos os testes da nossa aplicacao.


## Repo owner / admin ##
*Felis Horta (betohorta@gmail.com)

*Ramiro Delgado