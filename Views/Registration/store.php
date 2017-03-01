<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Registration\Registration;
use Agent\Utility\Sanitize;

DB::connect();

$data = Sanitize::sanitize($_POST);
$registration = new Registration(DB::$con);
$registration->store($data);