<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <div class="inner-banner bg-shape3 bg-color3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="inner-title text-center">
                        <h3>Reset Password</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>></li>
                            <li>Reset Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h3>Reset Password</h3>
                <div class="form-sing">
                <?php
                    // Check if there is any new password error message
                    if (isset($_GET['err'])) {
                        $err = $_GET['err'];
                        switch ($err) {
                            case 'invalid_PasswordResetToken':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Error:</strong> Invalid password reset token!
                                </div>
                                <?php
                                break;
                            case 'password_mismatch':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Error:</strong> Passwords do not match or password is less than 8 characters!
                                </div>
                                <?php
                                break;
                            default:
                                break;
                        }
                    }
                ?>
                    <form action="../../Controller/userC/newpassword.php" method="POST">
                    <input type="hidden" name="PasswordResetToken" value="<?php echo isset($_GET['PasswordResetToken']) ? $_GET['PasswordResetToken'] : ''; ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="repeat_password">Repeat New Password</label>
                                    <input type="password" class="form-control" name="repeat_password" id="repeat_password"
                                        placeholder="Repeat New Password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn1 btn-two">Reset Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>