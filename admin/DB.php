<?php
//api url filter
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "modpakp9_vip", "lsS(O&)GAaoz", "modpakp9_wake");
if($conn->connect_error != null){
    die($conn->connect_error);
}


