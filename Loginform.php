<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<form action="index.php" method="post">
    <div class="login-form">
        <div class="text">
            <h3>LOGIN</h3>
        </div>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="text" name="uname" placeholder="Email or Phone">
        </div>
        <div class="field">
            <div class="fas fa-lock"></div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">LOGIN</button>
        <div class="link"> Not a member?
            <a href="reg.php">Signup now</a>
        </div>
    </div>
</form>
</body>
</html>