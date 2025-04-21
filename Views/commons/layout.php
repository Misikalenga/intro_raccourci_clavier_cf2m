<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Lora:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>Public/css/style.css">
    <title><?= $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php require_once 'Views/commons/header.php'; ?>
    <span style="cursor: pointer; position: fixed; top: 1.8%; font-size: 1.5rem; right: 2.3%;" class="toggleDarkMode rounded-circle  mx-3">🌙</span>
    <main class="flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <?= $content ?>
    </main>

    <?php require_once 'Views/commons/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>

    <script src="<?= ROOT ?>Public/js/modeNuit.js"></script>

</body>

</html>