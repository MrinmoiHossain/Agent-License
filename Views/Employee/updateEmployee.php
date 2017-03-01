<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;

DB::connect();
$employee = new Employee(DB::$con);
$employees = $employee->show();

?>
<?php
include_once('header.php');
?>

        <div class="container tr-padding" style="color: #000;">
            <table class="table table-bordered" style="margin-top: 20%;">
                <tr>
                    <th class="active">No</th>
                    <th class="success">User Name</th>
                    <th class="warning">ID Number</th>
                    <th class="info">Contact Number</th>
                    <th class="danger">E-mail</th>
                    <th class="success">Edit</th>
                </tr>
                <?php
                foreach($employees as $employee){
                    ?>
                    <tr>
                        <td class="active"><?php echo $employee['ID']; ?></td>
                        <td class="active"><?php echo $employee['employeeName']; ?></td>
                        <td class="active"><?php echo $employee['employeeId']; ?></td>
                        <td class="active"><?php echo $employee['contactNumber']; ?></td>
                        <td class="active"><?php echo $employee['email']; ?></td>
                        <td class="active">
                            <a class="btn btn-primary" href="updateForm.php?id=<?php echo $employee['ID']; ?>">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
<?php
include_once('footer.php');
?>
