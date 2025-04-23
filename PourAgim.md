# Salut, Agim

## Je viens de rentrer et j'ai regardé ton site. J'aime le style et l'idée.

## Voici quelques petites remarques :

- Pour le copyright dans le pied de page, utilise soit 'copyright' soit &copy;. C'est redondant d'avoir les deux.
- Pendant la pratique, si on rafraîchit la page, on revient à l'introduction des questions. Utilise `localStorage` (JS) ou `$_SESSION` (PHP) pour garder la page sur la question en cours.
- Sur la Q2, tu as 'text' dans les instructions et 'texte' dans la boîte. Pour la cohérence, il faudrait changer l'instruction :-)
- Si on donne une mauvaise réponse, le site nous le signale mais n'explique pas la raison de l'erreur. (je n'ai pas encore régarder ton code mais tu peux facilement indiqué le problème avec JS....Je reviens sur ce point dès que j'ai régarder ton code).


## Maintenant, je vais regarder le code

# Alors, tout de suite je vois une erreur grave. Ne mets jamais ton `config.php` sur GitHub, même dans un dépôt privé ! Je vois que tu as aussi un `config.prod.php` qui n’est pas sur GitHub, mais le `dev.php` contient tes paramètres de connexion actuels.

## Voici d'autres remarques au fur et à mesure que je les vois :

- Ton `index.php` contient ton switch de routage. Crée un fichier `Controllers/RouteController.php` et déplace tout ce code dedans.
- J’ai regardé les fichiers `*.php` dans `Views`. Ton code est très propre, bravo ! Est-ce entièrement de toi ou as-tu eu de l’aide d'une IA ?
- Ton JS pour le mode sombre est nickel !
- Dans ton `chrono.js`, tu peux améliorer ton utilisation de `getElement...`. Tel que c’est fait, chaque fois que l’utilisateur clique sur un bouton, le script recherche l’élément dans le DOM.
- Ce n’est pas très grave pour les inputs utilisateur, mais tu utilises la même méthode à chaque milliseconde dans la fonction `updateTime`.
- En règle générale, si tu n’as besoin d’un objet qu’une seule fois, ce n’est pas gênant. Mais dès que tu vas le réutiliser, mieux vaut faire :

```js
const time = document.getElementById('time');
```
- Comme ça, le DOM n’est interrogé qu’une seule fois. C’est beaucoup plus efficace.

## Models

- Dans ton `PdoModel.php`, tu as redéclaré les constantes de connexion à ta base de données.
- Déjà, ce n’est pas idéal d’avoir ce type d’informations visibles dans le code.
- Deuxièmement, puisqu’elles sont déjà présentes dans ton `config.php`, ajoute un `require_once` dans ton `index.php`, et elles seront disponibles globalement.
- Si tu préfères, tu peux aussi ajouter le `require_once("config.php")` dans ton `CrudModel` (avant le `require` de `PdoModel`).
- Peut-être que vous n’avez pas encore vu les déclarations de type dans le cours, mais cette fonction (et d’autres similaires) :

```php
function registerNewUserDB($pdo, $user, $password)
```

- serait mieux écrite ainsi :

```php
function registerNewUserDB(PDO $pdo, string $user, string $password): bool
```

- Le code sera plus clair et plus sûr avec ces déclarations. Cela empêche aussi, par exemple, l’utilisation d’un entier là où une chaîne est attendue.
- À part cela, ton utilisation de `prepare` et `query` est parfaite (tu utilises bien `query` uniquement sans saisie utilisateur).
- Petite bête noire concernant les fonctions `getShortcut...` : elles mériteraient leur propre `Model`, car elles n’ont rien à faire dans le `CRUD` 🙂
- De plus, je ne vois pas de fonctions pour ajouter des raccourcis ou modifier ceux déjà présents dans la base.
- Personnellement, je me crée toujours une interface pour pouvoir ajouter ou modifier des éléments sans devoir passer par phpMyAdmin.
- Tu as des fonctions pour créer un utilisateur, mais pas encore pour la connexion (j’imagine que c’est en cours).
- Crée un `Models/AdminModel` et fais-toi une interface d’administration (n’oublie pas de t’assurer que personne d’autre n’y a accès) :

```php
if ($_SESSION["user_role"] !== "ROLE_ADMIN") {
    header("Location: ?route=home");
    die();
}
```

- Ajoute un champ `roles` dans ta table `Users`, contenant des valeurs comme `['ROLE_ADMIN']` ou `['ROLE_USER']`.
- Et lors de la connexion d’un utilisateur :

```php
$_SESSION["user_role"] = $req["user_roles"];
```

## Controllers

- Ton `Utilities.php` est génial. Tu vas adorer Twig !
- Même chose pour ton `pagesController.php`.
- Comme déjà dit, ton `crudController` va grandir. Ce serait un plaisir de le voir évoluer 🙂


En tout cas, bravo pour ton travail. J'espère que mes petites remarques t'aident un peu