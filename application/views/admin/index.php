<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'side_bar.php'; ?>
<?= (isset($content) && $content != '') ? $content : 'No Content Found' ?>
<?php include 'footer.php'; ?>
