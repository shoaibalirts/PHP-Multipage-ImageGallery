<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php foreach ($imageTitles as $image => $imageTitle) { ?>
    <div class="card">
        <h2><?php echo $imageTitle ?></h2>
        <a href="image=<?php echo $image ?>"><img src="./images/<?php echo rawurldecode($image) ?>" alt="<?php echo $imageTitle ?>" /> </a>

    </div>
<?php } ?>
<?php include './views/footer.php'; ?>