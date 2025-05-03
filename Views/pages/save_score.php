<?php
// Filtrer les scores qui ne sont pas vides
$scoresValides = array_filter($scores, function ($score) {
    return !empty($score['score']); // Vérifie si le score n'est pas vide
});

?>

<?php if (empty($scoresValides)): ?>
    <h3>Vous n'avez pas encore de score</h3>
<?php else: ?>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Historique des Scores</h2>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scoresValides as $score): ?>
                    <tr>
                        <td><?= htmlspecialchars($score['score']); ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
