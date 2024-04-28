<!doctype html>
<?php
session_start();
if (empty($_SESSION['user_id'])) {

    header('Location: index.php');
}
?>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <title>Dobby - Swimming & Scuba Diving HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>
    <?php
    include '../../Controller/userC/utilisateursC.php';
    require_once '../../config.php';
    $utilisateursC = new UtilisateurC();
    $data = $utilisateursC->GetUSER($_SESSION['user_id']);
    require ('menu.php');
    ?>


    <div class="inner-banner bg-shape2 bg-color5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="conatiner">
                    <div class="inner-title text-center">
                        <h3>Details</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                Details
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h3>Formulaire d'Utilisateur</h3>
                <div class="form-sing">
                    <?php
                    if (isset($_GET['reg_err'])) {
                        $err = htmlspecialchars($_GET['reg_err']);

                        switch ($err) {
                            case 'success':
                                ?>
                                <div class="alert alert-success">
                                    <strong>Succès</strong> modification succès.
                                </div>
                                <?php
                                break;

                            case 'password':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Les mots de passe ne correspondent pas ou sont trop courts.
                                </div>
                                <?php
                                break;

                            case 'email':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> L'adresse email n'est pas valide.
                                </div>
                                <?php
                                break;

                            case 'no_updates':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Aucune information n'a été fournie pour mettre à jour le profil.
                                </div>
                                <?php
                                break;
                        }
                    }
                    ?>

                    <form action="../../Controller/userC/modification.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                        placeholder="Prénom" value="<?php echo $data['prenom']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom"
                                        value="<?php echo $data['nom']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Adresse Email" value="<?php echo $data['email']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">Mot de Passe</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Mot de Passe">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password_retype">Retaper le Mot de Passe</label>
                                    <input type="password" class="form-control" name="password_retype"
                                        id="password_retype" placeholder="Retaper le Mot de Passe">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select class="form-control" name="genre" id="genre">
                                        <option value="Masculin" <?php if ($data['genre'] == 'Masculin')
                                            echo 'selected'; ?>>Masculin</option>
                                        <option value="Féminin" <?php if ($data['genre'] == 'Féminin')
                                            echo 'selected'; ?>>
                                            Féminin</option>
                                        <option value="Autre" <?php if ($data['genre'] == 'Autre')
                                            echo 'selected'; ?>>
                                            Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="numeroTelephone">Numéro de Téléphone</label>
                                    <input type="tel" class="form-control" name="numeroTelephone" id="numeroTelephone"
                                        placeholder="Numéro de Téléphone"
                                        value="<?php echo $data['numeroTelephone']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" name="adresse" id="adresse"
                                        placeholder="Adresse" value="<?php echo $data['adresse']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn1 btn-two">Modifier</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <?php
    require ('footer.php');
    ?>

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, "usermodif.php");

        }

    </script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 11:06:58 GMT -->

</html>