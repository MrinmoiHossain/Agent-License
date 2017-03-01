<?php
include_once('../../vendor/autoload.php');

use Agent\DB\DB;
use Agent\Admin\Admin;
use Agent\Utility\Sanitize;

DB::connect();

$data = Sanitize::sanitize($_GET);
$admin = new Admin(DB::$con);
if(array_key_exists('id', $data)){
    $admin->delete($data['id']);
}