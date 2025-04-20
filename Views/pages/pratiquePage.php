<?php
$valeursAttendues = [
  'editor-exercise1' => '<button class="btn btn-primary">Clique ici</button>',
  'editor-exercise2' => 'Je suis un',
  'editor-exercise3' => 'Je suis un texte.',
  'editor-exercise4' => 'Lorem',
  'editor-exercise5' => 'Félicitations, tu as réussi !'
];

$exercices = [
  [
    'id' => 'exercise1',
    'title' => 'Exercice 1.0 : Couper, Copier, Coller',
    'instructions' => [
      'Entrez dans la zone d\'édition.',
      'Sélectionnez le texte dans l\'éditeur avec <kbd>Ctrl + A</kbd>.',
      'Coupez le texte avec <kbd>Ctrl + X</kbd>.',
      'Copiez cette ligne rouge : <code>&lt;button class="btn btn-primary"&gt;Clique ici&lt;/button&gt;</code> avec <kbd>Ctrl + C</kbd>.',
      'Collez-la dans la zone d\'édition avec <kbd>Ctrl + V</kbd>.'
    ],
    'textarea' => 'Je suis un texte',
    'button_text' => 'Commencer l\'exercice 2',
    'next_exercise' => '#exercise2'
  ],
  [
    'id' => 'exercise2',
    'title' => 'Exercice 1.1 : Annuler et Rétablir',
    'instructions' => [
      'Sélectionnez et supprimez le mot : <code>text</code> avec <kbd>BACKSPACE</kbd>.',
      'Utilisez <kbd>Ctrl + Z</kbd> pour <strong>annuler</strong> la suppression.',
      'Utilisez <kbd>Ctrl + Y</kbd> pour <strong>rétablir</strong> la suppression.'
    ],
    'textarea' => 'Je suis un texte',
    'button_text' => 'Commencer l\'exercice 3',
    'next_exercise' => '#exercise3'
  ],
  [
    'id' => 'exercise3',
    'title' => 'Exercice 1.2 : Naviguer et Sélectionner',
    'instructions' => [
      'Entrez dans la zone de texte.',
      'Utilisez <kbd>Ctrl + →</kbd> ou <kbd>←</kbd> pour déplacer le curseur d\'un mot à l\'autre.',
      'Utilisez <kbd>Shift + →</kbd> ou <kbd>←</kbd> pour sélectionner du texte.',
      'Supprimez un long paragraphe pour ne garder que la première phrase.'
    ],
    'textarea' => 'Je suis un texte. Mais pas que, je suis un ensemble lettres et de mots qui forme un texte.',
    'button_text' => 'Commencer l\'exercice 4',
    'next_exercise' => '#exercise4'
  ],
  [
    'id' => 'exercise4',
    'title' => 'Exercice 1.3 : Supprimer et Sélectionner',
    'instructions' => [
      'Entrez dans la zone de texte.',
      'Supprimez tout sauf le mot "Lorem".'
    ],
    'textarea' => 'Lorem ipsum dolor sit amet.',
    'button_text' => 'Commencer l\'exercice 5',
    'next_exercise' => '#exercise5'
  ],
  [
    'id' => 'exercise5',
    'title' => 'Exercice 1.4 : Nettoyer le Texte',
    'instructions' => [
      'Nettoyez la zone de texte pour qu\'elle contienne : <code>Félicitations, tu as réussi !</code>'
    ],
    'textarea' => 'tzu Daondez, czopyiexz ccettex liagne: "<butztonez czlass="btn pzimary">cliquex çi</butztone>", zxupprimezx rxeussxzxi une zxpartix dux Fzéoliciatxztionxs, texxte avzec! backsppzacezx, zxannulezx zxette aqs xpartx zavec ctrz+zz zx.',
    'button_text' => 'Terminer l\'exercice',
    'next_exercise' => '#exercise6'
  ]
];
?>

<!-- scroll snap stylee -->
<style>
  html,
  body {
    margin: 0;
    padding: 0;
    height: 100vh;
    overflow-y: hidden;
    scroll-snap-type: y mandatory;
  }
</style>

<!-- Écran d’introduction -->
<div class="fullscreen-slide" id="intro-slide">
  <div class="d-flex flex-column justify-content-center align-items-center h-100 p-4 text-center">
    <h1 class="mb-4">Pratique sur zone de texte</h1>
    <aside class="border rounded p-4 w-75 mb-3" style="background-color: #cccccc; font-weight: bold;">
      <strong>⚠️ Attention :</strong> La triche ne sert à rien ! Prenez le temps de suivre les étapes avec sérieux.
      Les raccourcis clavier que vous apprendrez ici sont essentiels dans le développement web. Il vous permet de gagnez un temp précieux. <br>
      Voici un exemple pour vous aidez a faire l'exercice. Appuyez sur Commencer l'exercice 1 quand vous serez prêt.
    </aside>
    <div class="mt-2">

      <img src="<?= ROOT ?>/Public/img/exempleExo.png " alt="">
    </div>
    <div class="d-flex align-items-center gap-3 mt-4">
      <button type="button" class="btn btn-primary btn-valider" data-scroll-target="#exercise1">Commencer l'exercice 1</button>
    </div>
  </div>
</div>

<!-- Affichage dynamique des exercices -->
<?php
foreach ($exercices as $exercice) {
  $editorId = 'editor-' . $exercice['id'];
  echo '<div class="fullscreen-slide" id="' . $exercice['id'] . '">
    <div class="card shadow p-4 mb-5">
      <h4 class="text-center">' . $exercice['title'] . '</h4>
      <div class="card-body">
        <div class="card-body shadow border border-dark rounded">
          <ol>';
  foreach ($exercice['instructions'] as $instruction) {
    echo '<li>' . $instruction . '</li>';
  }
  echo '</ol>
        </div>
        <div class="zone_edition mt-4">
          <label for="' . $editorId . '" class="form-label">🧪 Zone d\'édition</label>
          <textarea class="form-control shadow border border-dark editor h-50 mb-3" name="' . $editorId . '" id="' . $editorId . '">' . $exercice['textarea'] . '</textarea>
          <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-primary btn-valider" data-editor="' . $editorId . '">Valider</button>
            <div id="result-' . $exercice['id'] . '" class="fw-bold"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center gap-3 mt-5">
      <button type="button" class="btn btn-secondary btn-next text-center" data-scroll-target="' . $exercice['next_exercise'] . '" disabled>' . $exercice['button_text'] . '</button>
    </div>
  </div>';
}
?>

<!-- Chrono -->
<div class="chrono shadow border border-1 border-dark">
  <p id="time" class="fs-4">00:00:000</p>
  <button id="startPause" class="btn btn-primary" onclick="startPauseChrono()">
    <i class="fas fa-play"></i>
  </button>
  <button id="reset" class="btn btn-danger" onclick="resetChrono()">
    <i class="fas fa-sync"></i>
  </button>
</div>

<!-- Script JS -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const valeursAttendues = <?php echo json_encode($valeursAttendues); ?>;

    document.querySelectorAll('.btn-valider').forEach(function(btn) {
      btn.addEventListener('click', function() {
        const editorId = this.getAttribute('data-editor');
        const input = document.getElementById(editorId)?.value.trim();
        const attendu = valeursAttendues[editorId] ?? null;
        const resultDiv = document.getElementById('result-' + editorId.replace('editor-', ''));
        const slide = document.getElementById(editorId.replace('editor-', ''));
        const nextBtn = slide?.querySelector('.btn-next');

        // Vérification si l'exercice est correct
        if (attendu && input === attendu) {
          resultDiv.textContent = "Bonne réponse ✅";
          resultDiv.classList.remove('text-danger');
          resultDiv.classList.add('text-success');

          // Si c'est le dernier exercice (exercice 5)
          if (editorId === 'editor-exercise5') {
            // Ajouter l'attribut onclick pour rediriger vers outro
            const finishButton = slide.querySelector('.btn-next');
            finishButton.setAttribute('onclick', "window.location.href='navigation'");
          }

          // Activer le bouton suivant
          if (nextBtn) {
            nextBtn.disabled = false;
            nextBtn.classList.remove('bg-secondary');
            nextBtn.classList.add('bg-success');
          }
        } else {
          resultDiv.textContent = "Mauvaise réponse ❌";
          resultDiv.classList.remove('text-success');
          resultDiv.classList.add('text-danger');

          // Désactiver le bouton suivant si l'exercice est incorrect
          if (nextBtn) {
            nextBtn.disabled = true;
            nextBtn.classList.remove('bg-success');
            nextBtn.classList.add('bg-secondary');
          }
        }
      });
    });
  });


  document.querySelectorAll('[data-scroll-target]').forEach(btn => {
    btn.addEventListener('click', function() {
      const target = document.querySelector(this.getAttribute('data-scroll-target'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
</script>

<script src="<?= ROOT ?>/Public/js/chrono.js"></script>
<script src="<?= ROOT ?>/Public/js/keyDisabled.js"></script>