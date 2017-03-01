<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;
use Agent\Utility\Sanitize;

DB::connect();

$data = Sanitize::sanitize($_POST);
$employee = new Employee(DB::$con);
$employee->update($data);