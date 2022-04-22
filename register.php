<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Admin | Project</title>

    <!-- Stylesheet CSS File -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post"></form>
            <h1>Register A New Admin / User</h1>
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
            <button type="submit" name="submit" value="Confirm" class="form-btn"></button>
        </form>
    </div>
</body>
</html>