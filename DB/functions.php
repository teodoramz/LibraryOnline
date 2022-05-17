<?php


function function_alert($message){
    echo "<script>alert('$message');</script>";
}

function clearBoxes(){
    echo "<script>clearTextBoxes()</script>";
}


function addUserPage(){
    header("Location: AddUser.php");
}
?>