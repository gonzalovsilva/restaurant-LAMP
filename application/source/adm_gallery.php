<?php include 'access.php'; ?>
<!-- GALLERY PART -->
<?php if (isset($_POST['gal_del'])) {

    $toDel = strip_tags($_POST['id']);

    $requete = $bdd->prepare('SELECT img_path FROM gallery WHERE id= ?');
    $requete->execute(array($toDel));
    $donnees = $requete->fetch();
    array_map('unlink', glob($donnees[0]));

    $requete = $bdd->prepare('DELETE FROM gallery WHERE id= ?');
    $requete->execute(array(strip_tags($_POST['id'])));
}
?>

<?php
//## BEGIN IMAGE UPLOAD SETUP ##
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imgToUp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["upload"])) {
    $msg = "";

    $check = getimagesize($_FILES["imgToUp"]["tmp_name"]);
    if ($check !== false) {
        $msg = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg = "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["imgToUp"]["size"] > 500000) { // IF GREATER THAN 500Kb
        $msg = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["imgToUp"]["tmp_name"], $target_file)) {
            $msg = "The file " . htmlspecialchars(basename($_FILES["imgToUp"]["name"])) . " has been uploaded.";

            $requete = $bdd->prepare('INSERT INTO gallery(img_path, img_by, img_text, img_name) 
            VALUES (:img_path, :img_by, :img_text, :img_name)');

            // Execute query
            $requete->execute(array(
                'img_path' => strip_tags($target_file),
                'img_by' => strip_tags($_POST["img_by"]),
                'img_text' => strip_tags($_POST["img_text"]),
                'img_name' => strip_tags(basename($_FILES["imgToUp"]["name"])),
            ));
        } else {
            $msg = "Sorry, there was an error uploading your file.";
        }
    }
    if (!isset($_SESSION['upload'])) {
        $_SESSION['upload'] = $msg;
    }
}
//## END IMAGE UPLOAD SETUP ##
?>

<?php if (isset($_POST['gallery']) or isset($_POST['gal_del']) or isset($_SESSION['upload'])) {
    $reponse = $bdd->query('SELECT * FROM gallery ORDER BY id DESC');
    $_SESSION['where'] = '';
?>
    <h2 class="p-3 c-s-light text-center bg-p3">Gallery</h2>
    <!-- UPLOAD FORM -->
    <form class="row p-2 shadow-sm mb-1 p-0 mx-2 rounded-3" action="" method="post" enctype="multipart/form-data">
        <input class="col-5" type="file" name="imgToUp" id="imgToUp" required>
        <input class="col-2" type="submit" value="Upload Image" name="upload">
        <label class="col-1 form-label text-end" for="img_by">by:</label>
        <input type="text" class="col-4" name="img_by" id="img_by" autocomplete="off" required>
        <label class="col-2 mt-3 form-label text-end" for="img_text">phrase:</label>
        <input type="text" class="col-10 mt-3" name="img_text" id="img_text" autocomplete="off" required>
        <!-- <input class="col-4" type="text" name="img_text"> -->
        <label class="col-2 mt-3 form-label text-end" for="output">output:</label>
        <div class="col-10 bg-s-color px-3 rounded-3" style="padding-top: 15px;" name="output"><?php echo $_SESSION['upload'] ?></div>
        <?php unset($_SESSION['upload']) ?>
    </form>
    <!-- END UPLOAD FORM -->
    <div class="row p-2 shadow-sm mb-1 p-0 mx-2 rounded-3">
        <div class="col-2 ">Date</div>
        <div class="col-2 ">Name</div>
        <div class="col-6 ">Path</div>
        <div class="col-1 ">See</div>
        <div class="col-1 ">DEL.</div>
    </div>
    <?php
    while ($donnees = $reponse->fetch()) { ?>
        <form class="row p-1 gx-2 shadow-sm mb-1 bg-s-color" method="post">
            <div id="date_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-2 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo htmlspecialchars($donnees['img_date']); ?>
                </div>
            </div>
            <div id="name_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-2 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo htmlspecialchars($donnees['img_name']); ?>
                </div>
            </div>
            <div id="msg_<?php echo htmlspecialchars($donnees['id']); ?>" class="col-6 ellipsis">
                <div class="p-1 rounded-3" style="background-color: white;">
                    <?php echo htmlspecialchars($donnees['img_path']); ?>
                </div>
            </div>
            <button type="button" class="col-1 btn bg-p-color b-s-light shadow c-s-light b_hover" data-bs-toggle="modal" 
            data-bs-placement="left" data-bs-target="#modal_<?php echo htmlspecialchars($donnees['id']); ?>">
                <i class="fas fa-search-plus"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="modal_<?php echo htmlspecialchars($donnees['id']); ?>" tabindex="-1" 
            aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo htmlspecialchars($donnees['img_name']); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body rounded mx-auto d-block">
                            <img src="<?php echo htmlspecialchars($donnees['img_path']); ?>" style="max-width: 460px;"/>
                            <p class="fst-italic">By: <?php echo htmlspecialchars($donnees['img_by']); ?></p>
                            <p class="m-0"><?php echo htmlspecialchars($donnees['img_text']); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo htmlspecialchars($donnees['id']); ?>">
            <input type="submit" name="gal_del" class="col-1 btn p-0 bg-p-color b-s-light shadow c-s-light b_hover" value="X" />
        </form>
    <?php } ?>
<?php
}
?>