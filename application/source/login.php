<?php include 'access.php';

if (isset($_POST['ad_pseudo']) and isset($_POST['ad_pass'])) {
    // echo '<script>console.log("Well donne!");</script>';
    include "config.php";
    $ad_pseudo = strip_tags($_POST['ad_pseudo']);
    // $ad_pass = strip_tags($_POST['ad_pass']);

    $requete = $bdd->prepare('SELECT * FROM members WHERE pseudo= ?');
    $requete->execute(array($ad_pseudo));
    $donnees = $requete->fetch();
    // print_r($donnees);
    $isItValid = password_verify($_POST['ad_pass'], $donnees['pass']);
    if($isItValid){
        // echo 'Le mot de passe est valide !';

        $_SESSION['user'] = $ad_pseudo;
    }else{
        // echo 'Le mot de passe est invalide.';
        
    };
    // $insertUser = $bdd->prepare("INSERT INTO members (pseudo, pass) VALUES (?, ?)");

    // $ad_pass = password_hash($ad_pass, PASSWORD_DEFAULT);

    // $insertUser->execute(array($ad_pseudo,$ad_pass));

    // echo '<script>console.log("Well donne!");</script>';
}
?>

<main class="container spacer-main">
    <div class="row py-4">
        <div class="col-12 divider-top pb-4">
            <h1 class="text-center c-s-light">Admin Login</h1>
        </div>
    </div>
    <div class="container-sm">
        <div class="row d-flex justify-content-center">
            <form class="form-floating col-sm-8 col-md-6 col-lg-4 needs-validation shadow rounded bg-p-light p-4" action="#" method="post">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control border-3" name="ad_pseudo" id="ad_pseudo" autocomplete="off" required>
                    <!-- Add class  is-invalid if invalid    -->
                    <label for="ad_pseudo" class="form-label">Pseudo</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control border-3" name="ad_pass" id="ad_pass" autocomplete="off" required>
                    <label for="ad_pass" class="form-label">Password</label>
                </div>
                <div class="form-floating mt-5">
                    <button id="submit" class="col-12 btn bg-p-color b-s-light border-4 shadow py-3 c-s-light b_hover" type="submit">ENTER <i class="fas fa-unlock"></i></button>
                </div>
            </form>
        </div>
    </div>
</main>