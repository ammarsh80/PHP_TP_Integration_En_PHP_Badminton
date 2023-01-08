<!DOCTYPE html>
<html lang="en">

<?php
include 'common/head.php';
?>

<body>

    <?php
    if (!isset($page) || (($page !== 'store') && ($page !== 'products') && ($page !== 'about') && ($page !== 'home'))) {
        include 'content/error.php';
        die;
    } else {
        include 'common/header.php';
        include 'common/navigation.php';
        include 'content/' . $page. '_content.php';
        include 'common/footer.php';
    }
    
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>