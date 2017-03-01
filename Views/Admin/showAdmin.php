<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Admin\Admin;

DB::connect();
$admin = new Admin(DB::$con);
$admins = $admin->show();

?>

<?php
include_once('header.php');
?>

<div class="container tr-padding" style="color: #000;">
    <table class="table table-bordered" style="margin-top: 20%;">
        <tr>
            <th class="active">No</th>
            <th class="success">Name</th>
            <th class="warning">Password</th>
        </tr>
        <?php
        foreach($admins as $admin){
            ?>
            <tr>
                <td class="active"><?php echo $admin['id']; ?></td>
                <td class="active"><?php echo $admin['userName']; ?></td>
                <td class="active"><?php echo $admin['pass']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<?php
include_once('footer.php');
?>
