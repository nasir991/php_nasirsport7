<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: dashboard.php"); // Redirect to dashboard jika sudah login
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proses login (misalnya email dan password dapat ditambah verifikasi)
    if ($email == 'nasir@gmail.com' && $password == '123') {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: dashboard.php"); // Redirect ke dashboard
        exit;
    } else {
        $error_message = "Email atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to nasirsport 7</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExbWJrcmw1OWJmY3AweDJtOXhwYmt2Y25wOHlkcXpxd2JmY2tsNHB5ZCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Va6MuZFI95flfYNMNs/giphy.webp') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.7);
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.3);
            color: white;
        }
        .login-box input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background-color: rgb(0, 17, 173);
        }
        .error-message {
            color: #f44336;
            font-size: 14px;
        }
        .register-link {
            color: rgb(54, 0, 250);
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-box">
        <h2>Login to nasirsport7</h2>

        <?php
        if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }
        ?>

        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>

    </div>
</div>

</body>
</html>
