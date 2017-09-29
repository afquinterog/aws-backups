<?php
require_once('snapshots.php');

$suffix = 'MkitDigital2 Automatic Backup';
$volumes = array(
   //'vol-0daffa881c2f70b4d' => array('snapshots' => 7, 'interval' => '1 hour', 'description' => 'ProdUi Automatic Backup'),
   //'vol-321bg96c' => array('snapshots' => 4, 'interval' => '1 week', 'description' => 'image server'),
   //
  
  //Amanda server
  'vol-5fa54eea' => array('snapshots' => 2, 'interval' => '1 month', 'description' => 'Amanda Server ' . $suffix ), 

  //Backups server
  'vol-0a57f01a' => array('snapshots' => 2, 'interval' => '8 day', 'description' => 'Backup Server ' . $suffix ),

  //Dev Server
  'vol-0610a7e6f1d0024ee' => array('snapshots' => 1, 'interval' => '1 month', 'description' => 'DevInt Server ' . $suffix ),

  // Insites Server
  'vol-d8e8d92d' => array('snapshots' => 2, 'interval' => '1 week', 'description' => 'Insites ' . $suffix ),

  // Mkit server
  'vol-bae717aa' => array('snapshots' => 1, 'interval' => '2 weeks', 'description' => 'Mkit ' . $suffix ),

  // ISGP Live / Wordpress live server
  'vol-82ca7690' => array('snapshots' => 7, 'interval' => '1 day', 'description' => 'ISGP Live ' . $suffix ),

  // Nginx Static Server
  'vol-77dbf2ff' => array('snapshots' => 1, 'interval' => '2 weeks', 'description' => 'Nginx Static Server ' . $suffix ),

  // Server Status App 2
  'vol-049c1f34ccedf3b5d' => array('snapshots' => 2, 'interval' => '1 week', 'description' => 'Server Status App2 ' . $suffix ),

  // Founding makers Api-Database
  'vol-9a335212' => array('snapshots' => 15, 'interval' => '1 day', 'description' => 'Founding Makers DB/API ' . $suffix ),

  // WonClient Production
  'vol-0f622a31af7f591f5' => array('snapshots' => 2, 'interval' => '1 week', 'description' => 'WonClient Production' . $suffix ),
  
 

);
$snapshots = new snapshots($volumes);
$snapshots->run();