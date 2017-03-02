<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;
use Agent\Utility\Sanitize;

DB::connect();


$data = Sanitize::sanitize($_POST);
$login = new Employee(DB::$con);
$login->login($data);