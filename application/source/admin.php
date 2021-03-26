<?php 
session_start();
define('getaccess', TRUE);
include 'header.php';

if (!isset($_SESSION['user'])) {
    include 'login.php';
}else{

    include 'admin_panel.php';

}
?>

<?php include 'footer.php'; ?>