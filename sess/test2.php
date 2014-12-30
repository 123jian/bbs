<?php
ini_set('session.save_handler','memcache');
ini_set('session.save_path','192.168.1.219:11211');
session_start();
echo $_SESSION['hot'];
?>