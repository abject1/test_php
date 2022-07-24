<?php

// variable du formulaire //
$value = $_POST['value'] ?? '';

// variable de connection BDD //
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_php";

// Reponse selon la valeur de la variable $value //
if ($value === '') {
    $phrase = '<h2>Aucune valeur na etait donné</h2>';
} elseif ($value > 10) {
    $phrase = '<h2>Je suis supérieur a 10</h2>';
} elseif ($value < 10) {
    $phrase = '<h2>Je suis inférieur a 10</h2>';
} elseif ($value == 10) {
    $phrase = '<h2>Je suis égale a 10</h2>';
}

// connection //
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //définir le mode exception d'erreur PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `visiteurs`(`name`,`age`)
    VALUES('$_POST[name]','$_POST[age]')
    ";
    //utiliser la fonction exec() car aucun résultat n'est renvoyé //
    $conn->exec($sql);
    echo "Nouveaux enregistrement ajoutés avec sucéés";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


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
    <?php echo $phrase  ?>
    <form action="http://localhost:80/test_php/index.php" method="POST">
        <label for="name" id="name">Name</label>
        <input type="text" name="name" id="name_input">
        <label for="age" id="age">Age</label>
        <input type="text" name="age" id="age_input">
        <label for="value" id="value">Votre valeur</label>
        <input type="text" name="value" id="value_input">
        <input type="submit">
    </form>

    <script src="index.js"></script>
</body>

</html>