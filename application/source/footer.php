<?php
if (!defined('getaccess')) die('Direct access not permitted');
?>
<!-- end main title -->
    <!-- begin footer -->
    <div class="spacer"></div>
    <footer class="footer fixed-bottom py-3 bg-black">
        <div class="container">
            <span class="text-muted">Website made by Gonçalo Silva | Belgium - 2021</span>
        </div>
    </footer>
    <!-- end footer -->
    <!--begin Bootstrap 5 script -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- end Bootstrap 5 script -->
    <?php 
    if($curPage == 'restaurants.php') echo '<script src="js/actions_resto.js"></script>';
    
    ?>
</body>

</html>