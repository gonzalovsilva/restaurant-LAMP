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
                    <img src="images/photo-10.jpg" class="card-img-top" alt="Salad On A Plate">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Humairaa Ferrell</h5>
                        <p class="card-text">Salad On A Plate.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-11.jpg" class="card-img-top" alt="Rice With Zucchini, Boiled Egg And Parsley In A Green Ceramic Plate">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Reginald Cassidy</h5>
                        <p class="card-text">Rice With Zucchini.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-12.jpg" class="card-img-top" alt="Monday Salad">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Lexi-Mai Luna</h5>
                        <p class="card-text">Monday Salad.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-sm"></div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="pictures3.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="pictures.php">1</a></li>
                <li class="page-item"><a class="page-link" href="pictures2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="pictures3.php">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item disabled">
                    <a class="page-link b-s-light bg-p-dark c-s-light" href="#" aria-disabled="true">Next</a>
                </li>
            </ul>
        </nav>
    </main>
<?php include 'footer.php'; ?>