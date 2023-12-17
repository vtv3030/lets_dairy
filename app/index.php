<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href=".\asset\css\styles.css">
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-2"></div> <!-- Empty column for centering -->
            <div class="col-lg-4 col-md-6 col-sm-8 center-container">
                <div class="login-form">
                    <div class="image-container">
                        <img src=".\asset\img\logo.png">
                    </div><br>
                    <h2 class="text-center ">Login</h2>
                    <form action="..\views\api\v1\auth" method="post">
                        <div class="form-group">
                            <input type="tel" class="form-control" id="number" placeholder="Enter your mobile number" maxlength="10" pattern="[0-9]{10}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login with Password</button>
                        <button type="submit" class="btn btn-primary btn-block" disabled>Login with OTP</button>
                        <br>
                        <a href="reset.php" style="float:left">Reset Password?</a> <a href="register.php" style="float:right">New User?</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2"></div> <!-- Empty column for centering -->
        </div>
    </div>

    <!-- Add Bootstrap JS CDN link (jQuery and Popper.js are required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function isNumber(event) {
        let allowed = "";
            if (event.target.value.includes(".")) {
                allowed = "0123456789";
            } else {
                allowed = "0123456789";
            }
            if (!allowed.includes(event.key)) {
                event.preventDefault();
            }
        }
      document.getElementById('number').addEventListener('keypress',isNumber);
    </script>

<?php

?>
<br><br>
</body>
</html>
