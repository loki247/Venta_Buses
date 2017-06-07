
<?php

require ("conector.php");

$idBus = $_GET["b"];
$sql = "CALL verPublicacion('". $idBus ."')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $arrayJson = array();
    $i = 0;
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $arrayJson[$i]= $row;
        $i++;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
echo utf8_encode(json_encode($arrayJson));
return utf8_encode(json_encode($arrayJson))
//return json_encode($arrayJson);
?> 