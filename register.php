<?php
    include "config.php";

    if(isset($_POST['submit']))
    {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $checkpassword = password_hash($_POST['checkpassword'], PASSWORD_DEFAULT);
        $user_type = $_POST['user_type'];
     
        $sql = " SELECT * FROM user_form WHERE email = $email AND password = $password ";

        $query = $conn->prepare($sql);
        $query->execute();

        if(rowCount($query) > 0)
        {
            $_SESSION['erreur'] = "User already exist !";
        }
        else 
        {
            if($password !== $checkpassword)
            {
                $_SESSION['erreur'] = "Password not matched !";
            }
            else 
            {
                $insert = " INSERT INTO user_form (name, email, password, user_type) VALUES ($name, $email, $password, $user_type) ";
                $query = $conn->prepare($insert);
                $query->execute();
                header('Location: login.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Admin / User | Project</title>

    <!-- Stylesheet CSS File -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h1>Register A New Admin / User</h1>
            <?php 
                if(!empty($_SESSION['erreur'])) {
            ?>
                <div class="error-msg">
                    <?= $_SESSION['erreur']; ?>
                </div>
                <?= $_SESSION['erreur'] = ""; ?>
            <?php 
                }
            ?>
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <label for="checkpassword">Confirm Password</label>
            <input type="password" name="checkpassword" required>
            <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" name="submit" class="form-btn">Confirm</button>
        </form>
    </div>
</body>
</html>