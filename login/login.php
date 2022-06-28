<!doctype html>
<html lang="nl">

<head>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php require_once '../header.php'; ?>
    <?php
    if(isset($_GET['msg']))
    {
        echo "<div class='msg'>" .$_GET['msg']. "</div>";
    }
    ?>
    <div class="container home">
        <form action="backend/loginController.php" method="POST">
        <div class="form-group">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord:</label>
            <input type="password" name="password"id="password">
        </div>

        <input type="submit" value="Login">
        </form>
        

    </div>
    <!-- <footer>require_once '../footer.php'?></footer> -->
</body>

</html>