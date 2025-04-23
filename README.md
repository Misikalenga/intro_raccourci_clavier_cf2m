## Retour de Lee

## Voici quelques petites remarques :

- Pendant la pratique, si on rafraîchit la page, on revient à l'introduction des questions. Utilise `localStorage` (JS) ou `$_SESSION` (PHP) pour garder la page sur la question en cours.
- Si on donne une mauvaise réponse, le site nous le signale mais n'explique pas la raison de l'erreur. (je n'ai pas encore régarder ton code mais tu peux facilement indiqué le problème avec JS....Je reviens sur ce point dès que j'ai régarder ton code).

# Alors, tout de suite je vois une erreur grave. Ne mets jamais ton `config.php` sur GitHub, même dans un dépôt privé ! Je vois que tu as aussi un `config.prod.php` qui n’est pas sur GitHub, mais le `dev.php` contient tes paramètres de connexion actuels.

- Ton `index.php` contient ton switch de routage. Crée un fichier `Controllers/RouteController.php` et déplace tout ce code dedans.
- Dans ton `chrono.js`, tu peux améliorer ton utilisation de `getElement...`. Tel que c’est fait, chaque fois que l’utilisateur clique sur un bouton, le script recherche l’élément dans le DOM.
- Ce n’est pas très grave pour les inputs utilisateur, mais tu utilises la même méthode à chaque milliseconde dans la fonction `updateTime`.
```js
const time = document.getElementById('time');
```
- Comme ça, le DOM n’est interrogé qu’une seule fois. C’est beaucoup plus efficace.

## Models

- Dans ton `PdoModel.php`, tu as redéclaré les constantes de connexion à ta base de données.

- Petite bête noire concernant les fonctions `getShortcut...` : elles mériteraient leur propre `Model`, car elles n’ont rien à faire dans le `CRUD` 🙂
- De plus, je ne vois pas de fonctions pour ajouter des raccourcis ou modifier ceux déjà présents dans la base.
- Personnellement, je me crée toujours une interface pour pouvoir ajouter ou modifier des éléments sans devoir passer par phpMyAdmin.
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


## Retour de marie

## pratique page
changer le <code>BACKSPACE</code> par la vrai touche backspace -> pratiquePage -> exo2

## navigation page
difficuler a interagir avec exercice -> navigationPage -> all (creation systeme dexercice comme pratique et vscode)
préciser de faire f5 sur un nouvel onglet

## vscode page
minute trop grand (non responsiv)

mise en avant du chrono -> si on appuye sur le start du chrono, tu peu commencer les exercice
la possibilité de creer des espace ne fonctionne plus -> pratiquePage -> all -> editors (ctrl tab non intuitif)
ajouter ctrl + 0 pour reinitialisé le zoom
