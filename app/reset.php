<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS CDN link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                    <h2 class="text-center ">Reset Password</h2>
                        <?php if($_SERVER["REQUEST_METHOD"] == "POST"){ ?>
                        <form action="reset.php" method="POST">
                        <div class="form-group">
                            <input type="tel" class="form-control" id="number" placeholder="Enter your mobile number" maxlength="10" pattern="[0-9]{10}" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="text" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="text" placeholder="Confirm Password" required>
                        </div>
                        <?php }else{ ?>
                        <form action="reset.php" method="POST">
                        <div class="form-group">
                            <input type="tel" class="form-control" id="number" placeholder="Enter your mobile number" maxlength="10" pattern="[0-9]{10}" required>
                        </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        <br>
                        <a href="index.php" style="float:left">Back to Login</a>
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
</body>
</html>
