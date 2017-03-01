<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;
use Agent\Utility\Sanitize;

DB::connect();

$data = Sanitize::sanitize($_GET);
$employee = new Employee(DB::$con);
if(array_key_exists('id', $data)){
    $employee->delete($data['id']);
}