<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions_test</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['id'])){
            echo "Benvenuto nella pagina nascosta ".$_SESSION['id']."<br>";
            ?>
            <form action="logout.php" method="POST">
                <input type="submit" value="Logout" />
            </form>

            <?php
        }
        else{
            echo "Non hai accesso a questa pagina<br>";
            ?>
            <form action="login.php" method="POST">
                <input type="submit" value="Login"/>
            </form>
            <?php
        }
    ?>

</body>
</html>