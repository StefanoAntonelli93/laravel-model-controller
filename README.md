# nome repo: laravel-model-controller

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

1 - Create un nuovo progetto Laravel
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## BONUS:

Stilare il layout nei dettagli con Sass

# Laravel Template

Questa repo template contiene una versione modificata del pacchetto laravel/laravel. Tale versione differisce nei seguenti punti:

    PostCSS è stato rimosso
    È stato installato SASS
    È stato installato Bootstrap
    La cartella resources/css è stata rimossa
    È stata aggiunta la cartella resources/scss contenente il file app.scss
    Il file vite.config.js è stato modificato al fine di includere i file resources/scss/app.scss e resources/js/app.js nella compilazione. Sono stati inoltre aggiunti gli alias per le cartelle /resources/ e node_modules/bootstrap
    Nella view welcome:
        Sono stati inclusi gli asset tramite direttiva @vite
        È stato rimosso lo stile preesistente
        È stato modificato il contenuto

Passi da effettuare per RIPRODURRE questo template
Eseguire il comando npm remove postcss per rimuovere PostCSS
Eseguire il comando npm i per installare tutti i pacchetti di NPM (comprese le versioni aggiornate di vite e laravel-vite-plugin)
Eseguire il comando npm i --save-dev sass per installare SASS
Rinominare la cartella css che si trova nella cartella resources/ in scss
Rinominare il file app.css che si trova nella nuova cartella resources/scss in app.scss
Modificare il file vite.config.js:

    Cambiare la sezione laravel(...) in:

    laravel({
        input: [
            'resources/scss/app.scss',
            'resources/js/app.js'
        ],
        refresh: true
    })

per includere i file resources/scss/app.scss e resources/js/app.js nella compilazione (npm run dev/build)

    Aggiungere la sezione:

    resolve: {
        alias: {
            '~resources': '/resources/',
        }
    },

dopo la sezione plugins: [...] per creare un alias della cartella /resources/ (evitandoci di doverla richiamare in questo modo tutte le volte)
Aggiungere la riga import '~resources/scss/app.scss'; nel file resources/js/app.js per importare tramite JS il file SCSS principale
Aggiungere la direttiva @vite('resources/js/app.js') nella sezione <head> del file resources/views/welcome.blade.php per includere gli asset nella view
Aggiungere le righe:

    import.meta.glob([
        '../img/**'
    ]);

    nel file resources/js/app.js per istruire Vite e Blade affinché processino correttamente i nostri asset
    Aggiungere la riga package-lock.json nel file .gitignore che si trova nella root del progetto per evitare di pubblicarlo nella repo (è un file che viene generato ed aggiornato automaticamente dopo l'esecuzione del comando npm i)
    Installare Bootstrap:
        Eseguire il comando npm i --save bootstrap @popperjs/core per installare sia la parte CSS che la parte JS di Bootstrap
        Aggiungere la riga import path from path nel file vite.config.js
        Aggiungere la riga '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap') nell'oggetto resolve.alias nel file vite.config.js
        Aggiungere la riga @import "~bootstrap/scss/bootstrap"; in alto nel file resources/scss/app.scss per importare la parte CSS di Bootstrap
        Aggiungere la riga import * as bootstrap from 'bootstrap'; nel file resources/js/app.js per importare la parte JS di Bootstrap

Passi da effettuare per UTILIZZARE questo template

    Aprire questa repository su github e cliccare sul pulsante Use this template > Create a new repository
    Clonare la repository appena creata su VS Code
    Aprire il terminale
    Copiare il file .env.example e rinominarlo in .env
    Eseguire il comando composer install
    Eseguire il comando php artisan key:generate
    Eseguire il comando npm i o npm install
    Aprire un secondo terminale
    In uno dei due terminali, eseguire il comando php artisan serve. Nell'altro, npm run dev

Creare una template repository

    Aprire la repo su github
    Cliccare su Settings
    Spuntare la casella Template repository
