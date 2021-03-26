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
                    <img src="images/photo-01.jpg" class="card-img-top" alt="Appetizing Meal Near A Cup Of Coffee">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Yara Fowler</h5>
                        <p class="card-text">Appetizing Meal Near A Cup Of Coffee</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-02.jpg" class="card-img-top" alt="A Dish On A Bowl">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Cathy Palacios</h5>
                        <p class="card-text">A Dish On A Bowl</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 b-s-color">
                    <img src="images/photo-03.jpg" class="card-img-top" alt="Healthy Breakfast Coffee Table">
                    <div class="card-body bg-p-light">
                        <h5 class="card-title"><span class="fst-italic">by</span> Harlen Morse</h5>
                        <p class="card-text">Healthy Breakfast Coffee Table</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-sm"></div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="pictures2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="pictures3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="pictures4.php">4</a></li>
                <li class="page-item">
                    <a class="page-link b-s-light bg-p-dark c-s-light" href="pictures2.php">Next</a>
                </li>
            </ul>
        </nav>
    </main>
<?php include 'footer.php'; ?>