# laravel-vue-blog
Ce projet est conçu avec Laravel, Vite et Vue.js.
J'ai choisi d'utiliser des fichiers TypeScript plutôt que JavaScript pour le typage.
Les appels API se font via Axios.

## Back-end (Laravel)
Pour démarrer le projet : se rendre dans le sous-dossier **app-back-end** et lancer la commande **php artisan serve** après avoir lancé Laragon, XAMPP ou autre. 
Adresse locale : http://127.0.0.1:8000/
API de test -> `http://127.0.0.1:8000/api/articles/`, `http://127.0.0.1:8000/api/articles/{id}`

Pour lancer les tests et lancer la factory pour générer un article, lancer la commande **php artisan test**.

## Front-end (Vue.js)
Cette application utilise Vue Router pour les routes et la Composition API pour l'écriture des fichiers.
Pour démarrer le projet : aller dans le sous-dossier **my-project** et lancer la commande **npm run dev**. 
Adresse locale pour visualiser l'application : http://localhost:5173/
