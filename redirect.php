<?php

$text = $_POST["paragrafo"];

$censored = $_POST["parola"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>

<body>
    <!-- stampo paragrafo e la sua lunghezza -->
    <h2>Il testo inserito contiene <?php echo strlen($text) ?> caratteri, ed è:</h2>
    <p><?php echo $text ?></p>
</body>

</html>