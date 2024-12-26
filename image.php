<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php 
$imageName = $_GET['image'];
$title=$imageTitles[$imageName];
$image = $imageName;
$description = $imageDescriptions[$imageName];
?>

<section>
    <h2><?php echo $title ?></h2>
    <div class="imagecontainer">
        <img src="./images/<?php echo $image ?>" alt="<?php echo $title ?>" />
    </div>
    <p><?php echo $description ?></p>
</section>
<a href="./gallery.php">Back to gallery</a>

<?php include './views/footer.php'; ?>
