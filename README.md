# Stud Trust

Projet créé par l'équipe Koloso.

## Installer et lancer le projet

### Les prérequits

Pour démarrer une installation minimale des logiciel suivant est nécéssaire :

- La suite LAMP (pour linux). Avec une base de donné MySql.
- Composer pour pouvoire télécharger les dépendence de base du projet.

### Installation

1 - Exportez le dump de base de la base de donné dans votre base Mysql.

2 - Créez une copie du fichié .env.example nommé .env, et reportez y votre
les identifiants de votre base Mysql. (variable DB_USERNAME DB_PASSWORD)

3 - Suivre les commandes suivante :

> git clone https://github.com/lolegrand/KolosoStudTrust.git \
> composer install \
> php artisant serv 

Puis ouvrez votre navigateur à l'addresse indiqué (exemple: localhost:8000).
