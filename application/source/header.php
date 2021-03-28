<?php
include 'access.php';
$curPage = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */

switch ($curPage) {
    case 'index.php':
        $titleMsg = "- Welcome";
        break;
    case 'menu.php':
        $titleMsg = "- Our Menu";
        break;
    case 'pictures.php':
        $titleMsg = "- Gallery";
        break;
    case 'restaurants.php':
        $titleMsg = "- About Us";
        break;
    case 'contact.php':
        $titleMsg = "- Contact Us";
        break;
    case 'admin.php':
        $titleMsg = "- Admin";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <?php echo "<title>Quiet Break " . $titleMsg . "</title>"; ?>
</head>

<body class="bg-p-color bg-tex">
    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-black-70">
            <div class="container">
                <a class="navbar-brand p-2" href="<?php echo $curPage == "index.php" ? "#" : "index.php"; ?>">
                    <img id="logo" src="images/logo_white.png" alt="white logo Quiet Break" srcset="images/logo_white.svg" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <ul class="navbar-nav text-end">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li class="nav-item">
                                <a class=<?php echo $curPage == "admin.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='admin.php' " ?>>Admin</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class=<?php echo $curPage == "index.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='index.php' " ?>>Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class=<?php echo $curPage == "menu.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='menu.php' " ?>>Menu</a>
                        </li>
                        <li class=" nav-item">
                            <a class=<?php echo $curPage == "pictures.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='pictures.php' " ?>>Pictures</a>
                        </li>
                        <li class="nav-item">
                            <a class=<?php echo $curPage == "restaurants.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='restaurants.php' " ?>>Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class=<?php echo $curPage == "contact.php" ? "'nav-link active'" . "aria-current='page' href='#' " : "'nav-link'" . "href='contact.php' " ?>>Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>