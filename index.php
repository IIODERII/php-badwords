<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="badwords.php" method="GET" class="p-4">
        <label for="text">La tua frase:</label>
        <br>
        <textarea name="text" cols="50" rows="10"></textarea>
        <br>
        <label for="badword">La parola da rimuovere:</label>
        <br>
        <input type="text" name="badword">
        <br>
        <input class="btn btn-success my-2 rounded-pill" type="submit">
    </form>
</body>

</html>