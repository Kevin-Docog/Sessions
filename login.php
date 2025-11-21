<?php
session_start(); 

$valid_username = "admin";
$valid_password = "12345";

if (isset($_GET["logout"])) { 
    session_destroy();
    header("Location: login.php");
    exit;
}

if (isset($_POST["username"]) && isset($_POST["password"])) {

    if ($_POST["username"] === $valid_username && $_POST["password"] === $valid_password) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $valid_username;

    } else {
        $error = "Invalid username or password";
    }
}

if (isset($_SESSION["logged_in"])) {
    echo "<h2>Welcome, ".$_SESSION["username"]."!</h2>";
    echo "<p>You are logged in.</p>";


    echo "<a href='?logout=1'>Logout</a>";
    exit;
}
?>

<h2>Login</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<?php 
if(isset($error)) echo "<p>$error</p>"; 
?>
