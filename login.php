<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header('location: ./');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="cardLogin">
        <h2>Login</h2>
        <input type="text" id="username">
        <input type="password" id="password">
        <button onclick="loginUser()">Entrar</button>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function loginUser() {
        var username = $('#username').val();
        var password = $('#password').val();

        alert(username);

    }
</script>