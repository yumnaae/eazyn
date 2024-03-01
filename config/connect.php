<?php

$username = "root"; //membuat variabel
$password = "";
$host = "localhost";

$is_connect = mysqli_connect($host, $username, $password);  
//mysql -u root -h localhost -p 

if($is_connect){
    mysqli_select_db($is_connect, "izin_db"); 
    //use izin_db; di mysql
}else{
    echo "upsss coba lagi!";
}

// if($is_connect){
//     echo "horeeyy !!";
// }else{
//     echo "upsss coba lagi!";
// }