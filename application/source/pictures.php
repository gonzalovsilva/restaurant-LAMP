<?php
session_start();
define('getaccess', TRUE);
include 'header.php';

// On détermine sur quelle page on se trouve
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

include 'config.php'; // Adds PDO Config file

// On prépare la requête
$requete = $bdd->prepare('SELECT COUNT(*) AS nb_articles FROM gallery');
// On exécute
$requete->execute();
$result = $requete->fetch();
$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 3;
// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

// On prépare la requête
$requete = $bdd->prepare('SELECT * FROM gallery ORDER BY id DESC LIMIT :premier, :parpage');

$requete->bindValue(':premier', $premier, PDO::PARAM_INT);
$requete->bindValue(':parpage', $parPage, PDO::PARAM_INT);
// On exécute
$requete->execute();

$articles = $requete->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- begin main title -->
<main class="container spacer-main">
    <div class="row pt-4">
        <div class="col-12 divider-top pb-4">
            <h1 class="text-center c-s-light">Pictures</h1>
        </div>
    </div>
    <div class="row p-3 row-cols-1 row-cols-md-3 g-4">
        <?php
        foreach ($articles as $article) {
        ?>

            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="<?php echo $article['img_path'] ?>" class="card-img-top h-100" alt="<?php echo $article['img_text'] ?>" 
                    style="object-fit: cover; object-position: center;">

                    <div class="card-body bg-p-light">
                        <h5 class="card-title fst-italic">by: <?php echo  $article['img_by'] ?></h5>
                        <p class="card-text"><?php echo  $article['img_text'] ?></p>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <div class="spacer-sm"></div>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
            <li class="page-item <?php echo ($currentPage == 1) ? "disabled" : "" ?>">
                <a class="page-link" href="pictures.php?page=<?php echo  $currentPage - 1 ?>">Previous</a>
            </li>
            <?php for ($page = 1; $page <= $pages; $page++) : ?>
                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?php echo ($currentPage == $page) ? "active" : "" ?>">
                    <a href="pictures.php?page=<?php echo  $page ?>" class="page-link"><?php echo $page ?></a>
                </li>
            <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?php echo ($currentPage == $pages) ? "disabled" : "" ?>">
                <a class="page-link" href="pictures.php?page=<?php echo $currentPage + 1 ?>">Next</a>
            </li>
        </ul>
    </nav>
</main>
<?php include 'footer.php'; ?>