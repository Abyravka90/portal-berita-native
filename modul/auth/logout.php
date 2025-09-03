<?php
session_start();
include('../../config/setup.php');
session_destroy();
header("Location: ".$server."/modul/auth");
exit();