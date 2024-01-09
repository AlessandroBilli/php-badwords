<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['paragrafo']) && isset($_POST['parola_censurata'])) {
            $paragrafo = $_POST['paragrafo'];
            $parolaCensurata = $_POST['parola_censurata'];

            $paragrafoCensurato = str_ireplace($parolaCensurata, '***', $paragrafo);

            echo "<h2>Paragrafo originale:</h2>";
            echo "<p>$paragrafo</p>";
            echo "<h2>Paragrafo censurato:</h2>";
            echo "<p>$paragrafoCensurato</p>";
        } else {
            echo "<p>Assicurati di compilare tutti i campi del form.</p>";
        }
    }
    ?>
</body>
</html>
