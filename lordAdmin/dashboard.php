<?php
session_start();
require_once "../includes/config.php";
if ($_SESSION['id'] == null) {
    header("location: index.php");
}

$uniquecountQ = mysqli_query($con, "SELECT COUNT(id),COUNT(DISTINCT ip),COUNT(DISTINCT country) FROM `viewer_data`  WHERE ip != '156.208.176.29'");
$result = mysqli_fetch_array($uniquecountQ);
$TuniqueV = $result['COUNT(DISTINCT ip)'];
$Tvisits = $result['COUNT(id)'];
$activecountries = $result['COUNT(DISTINCT country)'];
//$countries = $result['DISTINCT country'];

$UNcontries= mysqli_query($con, "SELECT DISTINCT country FROM `viewer_data`");
$result = mysqli_fetch_array($uniquecountQ);
$countriesNames = $result['DISTINCT country'];

$dataQ = mysqli_query($con, "SELECT * FROM `viewer_data`  WHERE ip != '156.208.176.29'");
function createRow($id, $ip, $country, $region, $location, $refereal, $date,$visitedPage)
{
?>
    <tr>
        <th scope="row"><?php echo ($id) ?></th>
        <td class="col"><?php echo ($ip) ?></td>
        <td class="col"><?php echo ($country) ?></td>
        <td class="col"><?php echo ($region) ?></td>
        <td class="col"><?php echo ($location) ?></td>
        <td class="col"><?php echo ($visitedPage) ?></td>
        <td class="col"><?php echo ($date) ?></td>
        <td class="col"><?php echo ($refereal) ?></td>
    </tr>
<?php
}
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

<style>
    .datacard i{
        font-size:150px;
    }
    
</style>

<div class="container-fluid bg-secondary">
    <div class="row"> <p class="text-white">hello : <?php echo($_SESSION['username']) ?>, account id : <?php echo($_SESSION['id']) ?></p> </div>
</div>

<div class="container">
    
    <div class="row justify-content-between mt-2">
        <p class="col-12">Data of site's lifetime</p>
        <div class="datacard col-3 rounded bg-warning text-center d-flex flex-column p-4"><i class="fas fa-solid fa-users"></i><br><p>Visitors : <?php echo ($TuniqueV); ?></p></div>
        <div class="datacard col-3 rounded bg-warning text-center d-flex flex-column p-4"><i class="fas fa-solid fa-file"></i><br><p>Visits : <?php echo ($Tvisits); ?></p></div>
        <div class="datacard col-3 rounded bg-warning text-center d-flex flex-column p-4"><i class="fas fa-solid fa-globe"></i><br><p>active countries : <?php echo ($activecountries); ?></p></div>
    </div>
    <div class="row">
        <p><?php echo($countriesNames) ?></p>
    </div>
    <div class="row mt-2">
        <button class="col-1 btn btn-primary" onclick="window.location.reload();"> Refresh </button>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">IP</th>
                <th scope="col">Country</th>
                <th scope="col">Region</th>
                <th scope="col">Geo location</th>
                <th scope="col">Visited page</th>
                <th scope="col">Date</th>
                <th scope="col">Refereal</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($result = mysqli_fetch_array($dataQ)) {
                createRow($result['id'], $result['ip'], $result['country'], $result['region'], $result['location'], $result['referal_link'], $result['date'],$result['visited_page']);
            }
            ?>
        </tbody>
    </table>


</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>