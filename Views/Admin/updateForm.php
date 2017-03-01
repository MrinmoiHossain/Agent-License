<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Admin\Admin;
use Agent\Utility\Sanitize;


DB::connect();

$data = Sanitize::sanitize($_GET);
$admin = new Admin(DB::$con);
$admins = $admin->index($data['id']);

?>

<?php
include_once('header.php');
?>

    <div class="container" style="padding-top: 15%;">
        <form class="form-horizontal" action="update.php" method="post">
            <div class="form-group">
                <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">No</label>
                <div class="col-md-9">
                    <input name = "id" type="number" class="form-control" value="<?php echo $admins['id']; ?>" placeholder="No">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Name</label>
                <div class="col-md-9">
                    <input name = "name" type="text" class="form-control" value="<?php echo $admins['userName']; ?>" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">New Password</label>
                <div class="col-md-9">
                    <input name = "pass" type="password" class="form-control" placeholder="Enter New Password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Verify Password</label>
                <div class="col-md-9">
                    <input name = "pass" type="password" class="form-control" placeholder="Re-type New Password">
                </div>
            </div>


            <br/>
            <br/>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg active" style="height: 54px;width: 132px;">Submit</button>
                    <button type="reset" class="btn btn-primary btn-lg active" style="height: 54px;width: 132px;">Reset</button>
                </div>
            </div>

        </form>
    </div>
<?php
include_once('footer.php');
?>