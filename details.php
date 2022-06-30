<?php
require_once "includes/config.php";
require_once "layout/header.php";
?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT `id`, `header`, `article`, `link`, `postedDate`,`country` FROM `articles` WHERE `id`='$id'");
$result = mysqli_fetch_array($sql);

?>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="row articleCard mb-3 p-3">
                <h2 class="header"><?php echo ($result['header']) ?></h2>
                <p class="article"><?php echo ($result['article']) ?></p>
                <p class="date row justify-content-between"><span class="col-5"><?php echo ($result['postedDate']) ?> </span> <span class="col-3 text-end"><?php echo ($result['country']) ?></span></p>
            </div>
            <a href="<?php echo ($result['link']) ?>" class="btn lordsBtn my-2 my-sm-0" type="submit">Go To Source →</a>
        </div>
        <div class="col-lg-3 col-sm-4">
            <?php require_once "layout/sidebar.php" ?>
        </div>
    </div>
</div>


<?php
require_once "layout/footer.php";
?>