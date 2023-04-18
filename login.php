<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="login">
        <form action="loginsystem.php" method="POST" class="form">
            <input type="text" name="nume" placeholder="Nume Complet" class="simpleinp"><br>
            <input type="text" name="username" placeholder="Username" class="simpleinp"><br>
            <input type="text" name="email" placeholder="Email" class="simpleinp"><br>
            <input type="password" name="parola" placeholder="Password" class="simpleinp"><br>
            <input type="submit" name="trimite" value="TRIMITE" class="submit-btn"><br>
        </form>
    </section>
</body>
</html>