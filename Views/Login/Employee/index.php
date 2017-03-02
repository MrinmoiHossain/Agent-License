<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;
use Kilte\Pagination\Pagination;

DB::connect();

$registration = new Registration(DB::$con);
$registers = $registration->display();

$totalItems = count($registers);
if(!isset($_GET['page'])){
    $currentPage = 1;
}
else{
    $currentPage = is_numeric($_GET['page']) ? $_GET['page'] : 1;
}

$itemsPerPage = 5;
$neighbours = 4;

$pagination = new Pagination($totalItems, $currentPage, $itemsPerPage, $neighbours);
$offset = $pagination->offset();
$limit = $pagination->limit();
$pages = $pagination->build();

?>
<?php
include_once('header.php');
?>

        <div class="container tr-padding" style="color: #000;">
            <form action="search.php" method="post">
                <input class="col-md-10" style="margin-top: 15%; margin-bottom: -176px;" name="name" placeholder="Search" autofocus>
                <button type="submit" class="col-md-2" style="background-color: grey; margin-top: 169px; height: 45px; font-size: 25px; margin-bottom: -176px;">Search</button>
            </form>
            <table class="table table-bordered" style="margin-top: 20%;">
                <tr>
                    <th class="active">No</th>
                    <th class="success">Company Name</th>
                    <th class="warning">Licence Number</th>
                    <th class="info">Name</th>
                    <th class="danger">Father Name</th>
                </tr>
                <?php
                for($counter = $offset; $counter < ($offset + $limit); $counter++){
                    if(!array_key_exists($counter, $registers)){
                        break;
                    }
                    ?>
                    <tr>
                        <td class="active"><?php echo $registers[$counter]['Id']; ?></td>
                        <td class="active"><?php echo $registers[$counter]['CompanyName']; ?></td>
                        <td class="active"><?php echo $registers[$counter]['LicenceNo']; ?></td>
                        <td class="active"><?php echo $registers[$counter]['Name']; ?></td>
                        <td class="active"><?php echo $registers[$counter]['FatherName']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <ul style="margin-top: 4%;">
                <?php
                foreach($pages as $p=>$t){
                    if($p == $currentPage){
                        echo "<li class='page'>" . $p . "</li>";
                    }
                    else{
                        echo "<li class='page'><a href='index.php?page=" . $p ."'>" . $p . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>

<?php
include_once('footer.php');
?>
