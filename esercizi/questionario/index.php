<?php
session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) 
{
    header("Location: index.php");
    exit;
}

if (!isset($_SESSION['login_attempts'])) 
{
    $_SESSION['login_attempts'] = 0;
}

$attemptsLimit = 3;
if ($_SESSION['login_attempts'] >= $attemptsLimit) 
{
    echo "Limite di tentativi superato. Riprova più tardi.";
    session_unset();
    session_destroy();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $password = "info2023";
    $attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

    if ($attemptedPassword === $password)
     {

        $_SESSION['authenticated'] = true;
        $_SESSION['login_attempts'] = 0; 
        header("Location: dati.php");
        exit;
    } else 
    {
        $_SESSION['login_attempts']++;
        echo "Password errata. Tentativi rimasti: " . ($attemptsLimit - $_SESSION['login_attempts']);
    }
}
?>
<!DOCTYPE html>

<html lang="en">

</html>