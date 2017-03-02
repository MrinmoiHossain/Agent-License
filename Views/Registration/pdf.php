<?php
include_once('header.php');
?>
<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;

DB::connect();
$register = new Registration(DB::$con);
$registers = $register->show();

$content1 = <<<first
    <div class="center-block">
        <h2 style="text-align: center;">Government Of The Peoples Republic Of Bangladesh Department Of Insurance</h2>

        <div style=" text-align: center;">
            <h3>LICENCE NO: 
first;
$content2 = $registers[0]['LicenceNo'];

$content3 = <<<second
    </h3><br/>
    <h4>Mr./Mrs./Miss : 
second;
$content4 = $registers[0]['Name'];

$content5 = <<<third
    </h4>
    <h4>S/o. W/o. D/o. : 
third;
$content6 = $registers[0]['FatherName'];

$content7 = <<<forth
    </h4>
    <h4 class="center-block">Village : 
forth;
$content8 = $registers[0]['Village'];

$content9 = <<<fifth
    </h4>
    <h4 class="center-block">Post Office : 
fifth;
$content10 = $registers[0]['PostOffice'];

$content11 = <<<six
    </h4>
    <h4 class="center-block">Police Station : 
six;
$content12 = $registers[0]['Station'];

$content13 = <<<seven
    </h4>
    <h4 class="center-block">District : 
seven;
$content14 = $registers[0]['District'];

$content15 = <<<eight
    </h4>
    <h2 class="center-block">Is hereby authorized to act as an Insurance Agent in respect of General Insurance Business for one year from Dhaka, date of 
eight;
$content16 = $registers[0]['TodayDate'];

$content17 = <<<nin
     day to 
nin;
$content18 = $registers[0]['ExpDate'];

$content19 = <<<ten
        <div class="last-part center-block" style="margin-top: 10%;">
            <h4 class="center-block sig" style="margin-bottom: -20px:">Signature of</h4><br/>
            <h4 class="center-block chair">Chairman</h4>
            <h4 class="chair">Insurance Development & Regulatory Authority</h4>
            <h4 class="chair">(IDRA)</h4>
            <h4 class="chair">Authorised Officer in this</h4>
            <h4 class="chair">Behalf</h4>
        </div>
ten;

$content20 = "</div>";

$mpdf = new mPDF();
$mpdf->WriteHTML($content1.$content2.$content3.$content4.$content5.$content6.$content7.$content8.$content9.$content10.$content11.$content12.$content13.$content14.$content15.$content16.$content17.$content18.$content19.$content20);
$mpdf->Output();
?>
<?php
include_once('footer.php');
?>
