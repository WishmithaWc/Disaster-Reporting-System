
<?php
$longitude=$_REQUEST["longitude"];
$latitude=$_REQUEST["latitude"];
$deviceId=$_REQUEST["deviceId"];

include "config.php";
$sql = "INSERT INTO`device`(`id`, `longitude`, `latitude`, `deviceId`) VALUES  
                        ('', '$longitude', '$latitude', '$deviceId')";

if ($conn->query($sql) === TRUE) {
    $uniId = $conn->insert_id;
    $myObj=new \stdClass();
    $myObj->success =true;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    
} else {
    $myObj=new \stdClass();
    $myObj->success =false;
    $myJSON = json_encode($myObj);
    echo $myJSON;
}

$conn->close();

// header("Location: ../"); /* Redirect browser */
// exit();
?>