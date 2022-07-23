<?php

$value = $_POST['value'] ?? '';

if ($value < 10) {
    $phrase1 = '<h2>Je suis inférieur a 10</h2>';
} elseif ($test > 10) {
    $phrase2 = '<h2>Je suis supérieur a 10</h2>';
}

$bdd = new PDO('mysql:host=localhost;dbname=test_php;charset=utf8', 'root', '');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PHP & SQL</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <?php echo '<h1>Bonjour le monde</h1>' ?>
    <?php print_r('' ?? $phrase1 ?? $phrase2)  ?>
    <form action="http://localhost:80/test_php/index.php" method="POST">
        <label for="name" id="name">Name</label>
        <input type="text" name="name" id="name_input">
        <label for="age" id="age">Age</label>
        <input type="text" name="age" id="age_input">
        <label for="value" id="value">Votre valeur</label>
        <input type="text" name="value" id="value_input">
        <input type="submit">
    </form>
</body>

</html>