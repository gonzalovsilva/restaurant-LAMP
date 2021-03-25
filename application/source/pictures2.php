<?php define('getaccess', TRUE); ?>

<?php include 'header.php'; ?>
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
                    <img src="images/photo-04.jpg" class="card-img-top" alt="Best Thursday Lunch">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Benito Clarke</h5>
                        <p class="card-text">Best Thursday Lunch.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-05.jpg" class="card-img-top" alt="Strawberries And Blueberries On White Ceramic Plate">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Bree Finnegan</h5>
                        <p class="card-text">Strawberries And Blueberries On White Ceramic Plate.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-06.jpg" class="card-img-top" alt="Pizza On Brown Wooden Table">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Salahuddin Matthams</h5>
                        <p class="card-text">Pizza On Brown Wooden Table.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-sm"></div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="pictures.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="pictures.php">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="pictures3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="pictures4.php">4</a></li>
                <li class="page-item">
                    <a class="page-link b-s-light bg-p-dark c-s-light" href="pictures3.php">Next</a>
                </li>
            </ul>
        </nav>
    </main>
<?php include 'footer.php'; ?>