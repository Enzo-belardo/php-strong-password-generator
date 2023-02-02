
<?php
include_once __DIR__ . '/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generate</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <input type="number" name="password" id="">
        <button type="submit">Genera la tua password</button>
    </form>


    <p>
    <?php
        $password = $_GET['password'];
        echo getRandomPass($password);
        ?>
    </p>
</body>
</html>