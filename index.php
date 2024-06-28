<?php session_start();
include __DIR__ . '/login.php';
var_dump($isLogged)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./login.php">Login</a>
    <?php if ($isLogged) { ?>
        <h2>Benvenuto <?php echo $_SESSION['username'] ?></h2>
    <?php } else {
        echo 'Utente non loggato esegui Login!!';
    } ?>

</body>

</html>