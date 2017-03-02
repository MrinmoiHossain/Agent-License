<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;

DB::connect();
$registration = new Registration(DB::$con);
$registers = $registration->display();


?>

<?php
include_once('header.php');
?>
        
        <div class="container tr-padding" style="color: #000;">
            <input class="glyphicon-search col-md-10" style="margin-top: 15%; margin-bottom: -176px;" placeholder="Search">
            <input class="col-md-2" style="background-color: grey; margin-top: 15%; margin-bottom: -176px;" type="button" value="Search">
            <table class="table table-bordered" style="margin-top: 20%;">
                <tr>
                    <th class="active">No</th>
                    <th class="success">Company Name</th>
                    <th class="warning">Licence Number</th>
                    <th class="info">Name</th>
                    <th class="danger">Father Name</th>
                </tr>
                <?php
                foreach($registers as $reg){
                    ?>
                    <tr>
                        <td class="active"><?php echo $reg['Id']; ?></td>
                        <td class="active"><?php echo $reg['CompanyName']; ?></td>
                        <td class="active"><?php echo $reg['LicenceNo']; ?></td>
                        <td class="active"><?php echo $reg['Name']; ?></td>
                        <td class="active"><?php echo $reg['FatherName']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>

<?php
include_once('footer.php');
?>
