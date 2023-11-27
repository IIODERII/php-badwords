<?php
$testo = $_GET["text"];
$parola = $_GET["badword"];

$fixedText = str_replace(strtolower($parola), "***", strtolower($testo));
$textLength = strlen($fixedText);
$numOfWords = substr_count($fixedText, " ") + 1;
$censuredWords = substr_count($fixedText, "***");
$fixedText = ucfirst(str_replace(strtolower($parola), "<strong class='text-danger'>***</strong>", strtolower($testo)));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <div class="container p-4">
        <h1>Ecco il tuo testo senza la parola:
            <?php echo $parola ?>
        </h1>
        <p class="fs-3">
            <?php echo $fixedText ?>
        </p>

        <p>Lunghezza testo:
            <?php echo $textLength ?>
        </p>
        <p>Numero di parole nella frase:
            <?php echo $numOfWords ?>
        </p>
        <p>Numero di parole censurate:
            <?php echo $censuredWords ?>
        </p>
    </div>
</body>

</html>