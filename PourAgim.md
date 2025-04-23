# Salut, Agim

## Je viens de rentrer et j'ai regardé ton site. J'aime le style et l'idée.

## Voici quelques petites remarques :

- Pour le copyright dans le pied de page, utilise soit 'copyright' soit &copy;. C'est redondant d'avoir les deux.
- Pendant la pratique, si on rafraîchit la page, on revient à l'introduction des questions. Utilise `localStorage` (JS) ou `$_SESSION` (PHP) pour garder la page sur la question en cours.
- Sur la Q2, tu as 'text' dans les instructions et 'texte' dans la boîte. Pour la cohérence, il faudrait changer l'instruction :-)
- Si on donne une mauvaise réponse, le site nous le signale mais n'explique pas la raison de l'erreur. (je n'ai pas encore régarder ton code mais tu peux facilement indiqué le problème avec JS....Je reviens sur ce point dès que j'ai régarder ton code).


## Maintenant, je vais regarder le code

# Alors, tout de suite je vois un grave erreur. Ne mets jamais ton config.php sur Github. Même sur un repositoire privé! Je vois que t'as aussi un config.prod.php qui n'est pas mis sur Github mais le dev.php contient tes paramètres de connexion actuels

## Voici des autres rémarques dès que je les vois :

- Ton index.php contient ton routing switch. Crée un Controllers/RouteController.php et mettre tout là
- J'ai regardé les *.php dans Views. Très propre ton code, bravo. Est-il tout à toi ou a t'eu de l'aide AI?
- Ton JS pour le darkmode est nickel!
- Dans ton chrono.js, tu peux améliorer tes utilisation of getElement. Comme il est, chaque fois l'utilisateur clique sur un bouton, le script doit chercher l'objet dans DOM
- Pas trop grave pour l'input d'utilisateur mais tu utilise la même facon chaque millisecond dans function updateTime.
- En regle general, si tu n'as besoin d'un objet qu'une seule fois, c'est pas grave mais dès que tu vas réutiliser l'objet mieux faire : 

```JS
const time = document.getElementById('time');
```
- Comme ça, il ne cherche le DOM qu'une fois. Beaucoup plus éfficace
