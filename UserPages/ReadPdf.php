<?php
session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

$username = checkLogin($conn);


$url= $_SERVER['REQUEST_URI']; 

$cv = preg_split("/php?/", $url);  

$idCarte = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);

$sql = "Select Path, NumeCarte from carti where IdCarte = '$idCarte'";


try{
        $querryRez = $conn->query($sql);


        foreach($querryRez as $row){
            $file1 = $row['Path'];
            $nume = $row['NumeCarte'];
            break;
        }


}
catch(PDOException $e) {
        echo $e->getMessage();
}



header('Content-Type: application/pdf');
header('Content-Description:inline; filename="'.$file1.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file1);

?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title><?php echo  $nume?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


</body>

</html>
