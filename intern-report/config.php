<?php 

include_once 'vip/handwash.class.php';
include_once 'vip/function.php';
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "websiteu_hr"; 


/*FOR LOCAL
$username = "root"; 
$password = "root"; Ni ikut org
$dbname = "websiteu_hr"; 

FOR PUSH TO GIT
$username = "websiteu_hr"; 
$password = "websiteu_hr"; 
$dbname = "websiteu_hr"; 
*/

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $conn -> close();
}
else{

    console_log("Sambungan berjalan");

}

include_once 'vip/sessionguard.class.php';
