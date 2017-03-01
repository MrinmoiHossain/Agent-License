<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;

DB::connect();
$register = new Registration(DB::$con);
$registers = $register->show();
?>

<?php
include_once('header.php');
?>

    <div class="container">
        <h1 style="margin-top: 15%;">Government Of The Peoples Republic Of Bangladesh <br/> Department Of Insurance</h1>

        <div style=" text-align: center;">
            <h3>LICENCE NO: <?php echo $registers[0]['LicenceNo']; ?></h3><br/>
            <h4>Mr./Mrs./Miss : <?php echo $registers[0]['Name']; ?></h4>
            <h4>S/o. W/o. D/o. : <?php echo $registers[0]['FatherName']; ?></h4>
            <h4 class="center-block">Village : <?php echo $registers[0]['Village']; ?></h4>
            <h4 class="center-block">Post Office : <?php echo $registers[0]['PostOffice']; ?></h4>
            <h4 class="center-block">Police Station : <?php echo $registers[0]['Station']; ?></h4>
            <h4 class="center-block">District : <?php echo $registers[0]['District']; ?></h4>
            <h2 class="center-block">Is hereby authorized to act as an Insurance Agent in respect of General Insurance Business for one year from Dhaka, date of <?php echo $registers[0]['Date']; ?> day to <?php echo $registers[0]['Date']; ?></h2>
        </div>

        <div class="form-group" style="margin-left: 35%;">
            <div class="col-md-12">
                <a target="_blank" class="btn btn-primary btn-lg active" style="text-align: center; padding-top: 17px; height: 54px;width: 132px;" href="pdf.php">Print Now</a>
                <a class="btn btn-primary btn-lg active" style="text-align: center; padding-top: 17px; height: 54px;width: 132px;" href="index.php">Again Submit</a>
            </div>
        </div>
    </div>

<?php
include_once('footer.php');
?>
