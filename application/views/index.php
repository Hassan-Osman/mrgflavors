<?php include 'layout/header.php'; ?>
<?php include 'layout/nav_bar.php'; ?>
<?= (isset($content) && $content != '') ? $content : 'No Content Found' ?>
<?php include 'layout/footer.php'; ?>
