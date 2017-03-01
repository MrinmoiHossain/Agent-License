<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;
use Agent\Utility\Sanitize;


DB::connect();

$data = Sanitize::sanitize($_GET);
$employee = new Employee(DB::$con);
$employees = $employee->index($data['id']);

?>
<?php
include_once('header.php');
?>

        <div class="container" style="padding-top: 15%;">
            <form class="form-horizontal" action="update.php" method="post">
                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">No</label>
                    <div class="col-md-9">
                        <input name = "id" type="number" class="form-control" value="<?php echo $employees['ID']; ?>" placeholder="No">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Name</label>
                    <div class="col-md-9">
                        <input name = "name" type="text" class="form-control" value="<?php echo $employees['employeeName']; ?>" placeholder="Full Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">ID-Number</label>
                    <div class="col-md-9">
                        <input name = "idNum" type="text" class="form-control" value="<?php echo $employees['employeeId']; ?>" placeholder="Full ID Number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">E-mail</label>
                    <div class="col-md-9">
                        <input name = "email" type="email" class="form-control" value = "<?php echo $employees['email']; ?>" placeholder="ex: abcdefgh@xyz.com">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" style="line-height: 0px !important; margin-bottom: 25px; text-align: left;">Contact Number</label>
                    <div class="col-md-9">
                        <input name = "contact" type="number" class="form-control" value = "<?php echo $employees['contactNumber']; ?>" placeholder="Contact Number">
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
