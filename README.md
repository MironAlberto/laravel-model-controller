<!-- # Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve -->

Oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.

1 - Create un nuovo progetto Laravel 10
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller Guest/PageController
7 - All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

BONUS:
Stilare il layout nei dettagli con Sass
