<?php
require_once "includes/config.php";
require_once "layout/header.php";
?>
<?php
function createArticles($con)
{
    $country = $_GET['country'];
    $sql = mysqli_query($con, "SELECT `id`, `header`, `article`, `link`, `postedDate`,`country` FROM `articles` WHERE `country`='$country'");
    while ($result = mysqli_fetch_array($sql)) {
        createOneCard($result['header'], $result['article'], $result['postedDate'], $result['id'], $result['country']);
    }
}
?>
<?php
function createOneCard($header, $article, $date, $id,$country)
{
    include "includes/View_post.php";
}
?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-7">
            <?php createArticles($con) ?>
        </div>
        <div class="col-lg-3 col-sm-4">
            <?php require_once "layout/sidebar.php" ?>
        </div>
    </div>
</div>


<?php
require_once "layout/footer.php";
?>