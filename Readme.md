Bonjour, je suis Woirin Alex, j'ai suivi la formation de la 3wa à Strasbourg

Voici mon projet pro, réalisé pour un ancien collègue, qui est en ligne à cette URL -> www.2aaz-design.fr

Le projet suivant est réalisé sous le framework Laravel, j'utilise donc l'orm de laravel ( Eloquent )


    1/ Lorsque vous clonerez le fichier il faudrait vous rendre avec la console dans le dossier à la racine puis taper cette commande : 'composer install'
        Pour que toutes les dépendances de laravel soit installeées car GitHub évite de prendre les dossiers de framework par soucis de place sur les serveurs.
        Je ne sais pas si c'est autorisé mais si jamais ça l'est voici mon email pour toutes questions: woirin.alex@gmail.com
        

A la Racine vous trouverez un fichier .env qui permet de lier la base de données, d'indiquer l'url du site et d'utiliser ou non plusieurs options de laravel

Je fournis un export de la base de données avec le dossier, pour la partie sql du projet j'utilise donc l'orm de laravel
Si un problème survient avec l'export de la base de données, voici une solution ->

        2/  Créer la base de données '2aaz' en utf8mb4_general_ci
            lier la base de données dans le fichier .env à la racine
            Dans la console aller dans le dossier racine du projet taper les lignes de commande suivante : 'php artisan migrate --seed'
            Après la migration normalement la bdd devrait être en place
            Pour activer le serveur de laravel au dossier racine taper cette commande : 'php artisan serv' il vous fournira un url pour accèder au serv où le site est
            Vous pouvez vous connecter au site avec cet identifiant : "admin@admin.com" et le mdp: "adminadmin"
            Pour vous connecter au site soit taper l'url de votre serveur puis mettre "/login" soit par l'icone boite à outils dans le footer en bas à droite

La suite du readme indiquera les dossiers ou fichiers que j'ai créé tout au long de mon projet

--- Contenu du dossier app ---

Pour accéder aux controllers -> app/Http/Controllers 

Dans le dossier controllers mis à part controller.php ainsi que le dossier Auth, le reste est écrit par moi-même

--- Contenu du dossier database ---

Dans le dossier database vous retrouverez les migrations pour la base de données, ainsi que les seed qui mon permit de créer des comptes admin pour effectuer les tests de connection, sécurité ainsi que des droits

Migrations -> Créer les différentes tables dans la base de données lorsqu'on utilise les lignes de commande pour la migration
              Les Fichiers dans migrations sont générés avec une ligne de commande mais il faut ensuite modifier les fichiers pour créer les différentes tables que l'on souhaite avoir dans la base de données donc l'intégralité des fichiers dans le dossier migration ont été modifiés pour créer les tables de la base de données
              
Seed -> UsersTableSeeder.php -> Me permet de créer des utilisateurs et les injecter dans la base de données directement lors de la migration des seeds

INJECTION SQL -> L'orm Eloquent empêche les injections sql lors de l'utilisation de la save à l'envoie des données en BDD ( exemple: $contact->save(); FormController ligne 63 )
FAILLE XSS -> Idem pour les failles xss, laravel utilise la protection CSRF, pour nous prémunir des failles xss il suffit de mettre '@csrf' en début de formulaire, laravel s'occupe de la protection automatiquement

--- Contenu du dossier public ---

Dans le dossier public nous retrouverons tout le code que les utilisateurs pourront voir (html, css, js)

Dossiers css avec fichiers créés par moi-même : form, home, legal, products, ainsi que le fichier layout.css

Dossiers importés pour le projet : animation, normalize, fonts, owlCarousel

Dossier js créé par moi-même : public/js/ajax

Favicon.ico contient le favicon du site

--- Contenu du dossier ressource ---

Toutes les pages html du site sont contenues ici resources/views

Toutes les views ont été créées par moi-même

--- Contenu du dossier route ---

Dans le fichier routes/web.php vous retrouverez toutes les routes que j'ai créé pour accéder aux différentes views du site ou bien controllers utilisés, dans les fichiers html nous utilisons {{ route('nom de la route') }} pour utiliser les routes mise en place dans le fichier web.php

--- Laravel Option ---

J'ai installé plusieurs outils sur le projet

    Debugbar: permet de voir toutes les infos utiles pour le développement: requête, compte connecté, views utilisée etc..
    tightenco/ziggy: permet l'utilisation des routes dans les fichiers JS avec l'utilisation de @route dans le fichier html généré
    
    
Merci pour la lecture du Readme, j'espère avoir fait un fichier efficace pour vous faciliter un maximum le travail
Merci d'avance pour votre travail aussi.

Woirin Alex





