<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Utilisateur</title>
    <!-- Include the CSS files from the Dobby template -->
    <!-- Include your CSS files -->
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
    <!-- Inner Banner Section -->
    <!-- Your inner banner HTML code -->
    <div class="inner-banner bg-shape3 bg-color3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="inner-title text-center">
                        <h3>Formulaire d'Utilisateur</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>></li>
                            <li>Formulaire d'Utilisateur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Utilisateur Form Section -->
    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h3>Formulaire d'Utilisateur</h3>
                <div class="form-sing">

                    <?php
                    // Check if there is any registration error message
                    if (isset($_GET['reg_err'])) {
                        $reg_err = $_GET['reg_err'];
                        switch ($reg_err) {
                            case 'exists':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur:</strong> User already exists!
                                </div>
                                <?php
                                break;
                            case 'password_length':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur:</strong> Password must be at least 8 characters long!
                                </div>
                                <?php
                                break;
                            case 'password':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur:</strong> Passwords do not match!
                                </div>
                                <?php
                                break;
                            case 'missing_fields':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur:</strong> Please fill in all fields!
                                </div>
                                <?php
                                break;
                            case 'success':
                                ?>
                                <div class="alert alert-success">
                                    <strong>Succès:</strong> Registration successful! Please check your email to verify your account.
                                </div>
                                <?php
                                break;
                            default:
                                break;
                        }
                    }
                    ?>
                    <form action="../../Controller/userC/register.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                        placeholder="Prénom" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom"
                                        >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Adresse Email" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">Mot de Passe</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Mot de Passe" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password_retype">Retaper le Mot de Passe</label>
                                    <input type="password" class="form-control" name="password_retype"
                                        id="password_retype" placeholder="Retaper le Mot de Passe" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select class="form-control" name="genre" id="genre" >
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Féminin</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="numeroTelephone">Numéro de Téléphone</label>
                                    <input type="tel" class="form-control" name="numeroTelephone" id="numeroTelephone"
                                        placeholder="Numéro de Téléphone" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" name="adresse" id="adresse"
                                        placeholder="Adresse" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="profile_picture">Profile Picture:</label>
                                    <input type="file" id="profile_picture" name="profile_picture" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn1 btn-two">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <p>Vous avez déjà un compte? <a href="login.php">Connectez-vous</a></p>
            </div>
        </div>
    </div>


</body>

</html>