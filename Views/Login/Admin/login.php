<?php
include_once('../../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Admin\Admin;

DB::connect();
use Agent\Utility\Sanitize;

$data = Sanitize::sanitize($_POST);
$login = new Admin(DB::$con);
$login->login($data);