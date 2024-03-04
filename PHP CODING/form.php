<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <label>Name</label>
        <input type="text" name="uname" required>
        <label>Password</label>
        <input type="password" name="psw" required>
        <label>Email</label>
        <input type="email" name="mail" required>        
        <input type="submit">
    </form>

    <?php
        if($_GET)
        {
            echo print_r($_GET);
        }
        elseif($_POST)
        {
            echo print_r($_POST);
        }
        else
        {
            echo "";
        }
    ?>
</body>
</html>