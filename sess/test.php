<?php
ini_set('session.save_handler','memcache');
ini_set('session.save_path','127.0.0.1:11211');
session_start();
$hot=123;
$_SESSION['hot']=$hot;
//var_dump(session_id());
?>