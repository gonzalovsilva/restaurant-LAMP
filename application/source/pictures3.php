<?php 
session_start();
define('getaccess', TRUE);
include 'header.php';
?>
    <!-- begin main title -->
    <main class="container spacer-main">
        <div class="row py-4">
            <div class="col-12 divider-top pb-4">
                <h1 class="text-center c-s-light">Pictures</h1>
            </div>
        </div>
        <div class="row p-3 row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-07.jpg" class="card-img-top" alt="Plate Photography Of Vegetable Salad On A Plate">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Bear Carty</h5>
                        <p class="card-text">Plate Photography Of Vegetable Salad On A Plate.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-08.jpg" class="card-img-top" alt="Food Cooked In A Stainless Steel Plate">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Sofia Beil</h5>
                        <p class="card-text">Food Cooked In A Stainless Steel Plate.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-09.jpg" class="card-img-top" alt="Crop Person Pouring Seasoning On Aperitifs">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Michelle Finnegan</h5>
                        <p class="card-text">Crop Person Pouring Seasoning On Aperitifs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-sm"></div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="pictures2.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="pictures.php">1</a></li>
                <li class="page-item"><a class="page-link" href="pictures2.php">2</a></li>
                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="pictures4.php">4</a></li>
                <li class="page-item">
                    <a class="page-link b-s-light bg-p-dark c-s-light" href="pictures4.php">Next</a>
                </li>
            </ul>
        </nav>
    </main>
<?php include 'footer.php'; ?>