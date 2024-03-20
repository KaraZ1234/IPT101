<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); 
        }, false); 
        function hideURLbar(){ 
            window.scrollTo(0,1); 
        } 
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>REGISTER NOW!</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="reg-index.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="uname" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control email" type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control w3lpass" type="password" name="cpass" placeholder="Confirm Password" required="">
                    </div>
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"></div>
                    </div>
                    <input type="submit" value="SIGNUP" class="btn btn-primary">
                </form>
                <p>Already have an Account? <a href="loginform.php"> Login Now!</a></p>
            </div>
        </div>
    </div>
    <!-- Inserted JavaScript code -->
    <script src="https://kit.fontawesome.com/4f96a637fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>