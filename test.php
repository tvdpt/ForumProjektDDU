<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular med PHP</title>
</head>
<body>
    <h1>Formular med PHP</h1>
    
    <form method="post" action="">
        Indtast dit navn: <input type="text" name="navn">
        <input type="submit" value="Send">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Indsamle og vise navn fra formularen
            $navn = $_POST["navn"];
            if (!empty($navn)) {
                echo "<p>Hej, $navn! Tak for at du udfyldte formularen.</p>";
            } else {
                echo "<p>Du glemte at indtaste dit navn!</p>";
            }
        }
    ?>
</body>
</html>
