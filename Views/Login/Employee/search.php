<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;

DB::connect();

$data = $_POST['name'];
$result = new Registration(DB::$con);
$find = $result->search($data);

?>

<?php
include_once('header.php');
?>
<div class="container tr-padding" style="color: #000;">
    <table class="table table-bordered" style="margin-top: 20%;">
        <?php
        if(!is_null($find['Id'])){
            ?>
            <tr >
                <th class="active" > No</th >
                <th class="success" > Company Name </th >
                <th class="warning" > Licence Number </th >
                <th class="info" > Name</th >
                <th class="danger" > Father Name </th >
            </tr >
            <tr >
                <td class="active" ><?php echo $find['Id']; ?></td>
            <td class="active"><?php echo $find['CompanyName']; ?></td>
            <td class="active"><?php echo $find['LicenceNo']; ?></td>
            <td class="active"><?php echo $find['Name']; ?></td>
            <td class="active"><?php echo $find['FatherName']; ?></td>
            </tr>
            <?php
        }
        else {
            ?>
            <h3>No Data Found</h3>
            <?php
        }
        ?>
    </table>
</div>
<?php
include_once('footer.php');
?>
