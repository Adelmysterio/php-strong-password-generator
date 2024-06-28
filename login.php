<?php
session_start();

require_once __DIR__ . '/passwords.php';

$username = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

$isLogged = false;

foreach ($users as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
        $_SESSION['username'] = $_GET['username'];
        $isLogged = true;
        break;
    }
}
if ($isLogged) {
    header('Location: ./index.php');
    exit;
}
var_dump("$username $password");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<?php if ($isLogged == false) { ?>

    <body>
        <main>
            <form action="./login.php" method="get">
                <input type="text" name="username" id="username" required>
                <input type="password" name="password" id="password" required>
                <button type="submit">Login</button>
            </form>
        </main>
    </body>
<?php } ?>

</html>