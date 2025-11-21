<?php
session_start();

if (isset($_POST["reset"])) {
    session_destroy();
    header("Location: userinfo.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["reset"])) {
    $_SESSION = $_POST;
}
?>

<?php if (isset($_SESSION["name"])): ?>
    <h2>Information Summary</h2>
    <p><strong>Name:</strong> <?= $_SESSION["name"]; ?></p>
    <p><strong>Email:</strong> <?= $_SESSION["email"]; ?></p>
    <p><strong>Age:</strong> <?= $_SESSION["age"]; ?></p>
    <p><strong>Address:</strong> <?= $_SESSION["address"]; ?></p>
    <p><strong>Contact:</strong> <?= $_SESSION["contact"]; ?></p>

    <form method="POST">
        <button type="submit" name="reset">Start Over</button>
    </form>

<?php else: ?>
    <h2>User Information</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="number" name="age" placeholder="Age" required><br><br>
        <input type="text" name="address" placeholder="Address" required><br><br>
        <input type="text" name="contact" placeholder="Contact Number" required><br><br>
        <button type="submit">Submit</button>
    </form>
<?php endif; ?>