<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Employee\Employee;

DB::connect();
use Agent\Utility\Sanitize;

$data = Sanitize::sanitize($_POST);
$login = new Employee(DB::$con);
$login->login($data);