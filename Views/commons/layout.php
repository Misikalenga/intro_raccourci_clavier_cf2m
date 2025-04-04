<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=ROOT?>Public/css/style.css">

    <title><?= $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php require_once 'Views/commons/header.php'; ?>

    <main class="border border-2 border-black flex-grow-1 d-flex justify-content-center align-items-center">
        <?= $content ?>
    </main>

    <?php require_once 'Views/commons/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</body>

</html>