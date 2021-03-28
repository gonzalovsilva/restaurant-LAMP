<?php include 'access.php';
include "config.php";
?>

<?php
if (isset($_POST['btn_logout'])) {
    // echo '<script>console.log("Hello!");</script>';
    $username = htmlspecialchars($_SESSION['user']);
    session_destroy();
?>
    <main class="container spacer-main">
        <div class="row py-4">
            <div class="col-12 divider-top pb-4">
                <h1 class="text-center c-s-light">Logged out</h1>
            </div>
        </div>
        <div class="container-sm">
            <div class="row d-flex justify-content-center">
                <form class="form-floating col-sm-8 col-md-6 col-lg-4 needs-validation shadow rounded bg-p-light p-4" action="admin.php" method="post">
                    <div class="form-floating mt-2">
                        <div class="text-center col-12 mb-3">See you later <?php echo $username; ?></div>
                        <button id="submit" class="col-12 btn bg-p-color b-s-light border-4 shadow py-3 c-s-light b_hover" type="submit">
                            LOG IN <i class="fas fa-lock"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php
} else {

    if (!isset($_SESSION['where'])) $_SESSION['where'] = '';
    if ($_SESSION['where'] == '' AND empty($_POST)) $_POST['msgs'] = '';
?>
    <main class="container spacer-main">
        <div class="row py-4">
            <div class="col-12 divider-top pb-4">
                <h1 class="text-center c-s-light">Admin Panel</h1>
            </div>
        </div>
        <div class="container-sm">
            <form class="row g-2 justify-content-end mb-3" method="post">
                <input type="submit" name="btn_logout" class="col-6 col-sm-3 col-md-2 col-lg-2 p-1 btn bg-p-color b-s-light shadow c-s-light b_hover" value="Log out" />
            </form>
            <div class="row g-3 d-flex justify-content-center">
                <div class="col-12 col-md-2">
                    <div class="shadow p-2 rounded bg-p-light overflow-hidden b-s-light" style="min-height: 50px">
                        <form method="post">
                            <input type="submit" name="msgs" class="col-12 mb-2 btn bg-p-color b-s-light border-4 shadow py-1 c-s-light b_hover" value="Messages" />
                            <input type="submit" name="gestbook" class="col-12 mb-2 btn bg-p-color b-s-light border-4 shadow py-1 c-s-light b_hover" value="Guest book" />
                            <input type="submit" name="gallery" class="col-12 mb-2 btn bg-p-color b-s-light border-4 shadow py-1 c-s-light b_hover" value="Gallery" />
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="shadow rounded bg-p-light overflow-hidden b-s-light" style="min-height: 300px">
                        <?php if (isset($_POST['msg_del'])) {
                            // var_dump($_POST['id']);
                            $requete = $bdd->prepare('DELETE FROM contact WHERE id= ?');
                            $requete->execute(array(strip_tags($_POST['id'])));
                        }
                        include 'adm_msg.php'; // MESSAGES PART

                        include 'adm_gb.php'; // GUEST BOOK PART

                        include 'adm_gallery.php'; // GUEST BOOK PART
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/actions_admin.js"></script>
    </main>

<?php
}
?>