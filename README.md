# Babillard Numerique
    
    Notre Projet de fin de soutenance Licence 3 est un Babillard Numerique

# description de la procedure a suivre
#### PRESENTATION OF THE DATABASE
1. Table Documents
2. Table utilisateurs
3. Table roles
4. Table permissions
6. Table Images

#### PACKAGES INSTALL

        Aucun package a installer


#### HOW TO RUN THE App
1. Cloner le projet sur github vers sa machine Local
2. L'installation des packages est necessaire grace a la commande : `$ composer install` ou `$ composer update `
3. Creer le fichier .env  grace a la commande :`$ cp .env.example .env`
4. Generer la cle de l'application grace a la commande: `$ php artisan key:generate`
5. Faire migrer les tables vers La base de donnee: `$ php artisan migrate`
6. Executer L'application: `$ php artisan serve` et acceder a l'application grace a L'URL 
7. Profiter !!!



