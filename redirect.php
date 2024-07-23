<?php

$text = $_POST["paragrafo"];

$censored = $_POST["parola"];

$censoredText = str_replace($censored, "***", $text);

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

    <!-- stampo paragrafo, la sua lunghezza e sostituisco con *** la parola inserita dall'utente -->
    <h2>Il testo censurato contiene <?php echo strlen($censoredText) ?> caratteri, ed è:</h2>
    <p><?php echo $censoredText ?></p>
</body>

</html>