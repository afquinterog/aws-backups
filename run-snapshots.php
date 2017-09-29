<?php
require_once('snapshots.php');
$volumes = array(
   //'vol-0daffa881c2f70b4d' => array('snapshots' => 7, 'interval' => '1 hour', 'description' => 'ProdUi Automatic Backup'),
   //'vol-321bg96c' => array('snapshots' => 4, 'interval' => '1 week', 'description' => 'image server'),
   'vol-0a57f01a' => array('snapshots' => 2, 'interval' => '1 hour', 'description' => 'ProdUi Australia Automatic Backup'),
);
$snapshots = new snapshots($volumes);
$snapshots->run();