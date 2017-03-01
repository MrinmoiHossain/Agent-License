<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Admin\Admin;
use Agent\Utility\Sanitize;

DB::connect();

$data = Sanitize::sanitize($_POST);
$admin = new Admin(DB::$con);
$admin->update($data);