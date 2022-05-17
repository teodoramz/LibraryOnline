
<?php 

function encryptPass($data){

    $cipher = "aes-256-cbc"; 
    $encryption_key = "7zJbGFOH8VYNIHuQt7Rat9KpLQMcFM8m";
    $iv = "ZydlyJcXyaK97eix";
    $nr = uniqid();
    $rez = hash("sha256", $nr);

    $data = $rez.$data;

    $encrypted_data = openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 

    return $encrypted_data; 
}


function decryptPass($data){
    $cipher = "aes-256-cbc"; 
    $encryption_key = "7zJbGFOH8VYNIHuQt7Rat9KpLQMcFM8m";
    $iv = "ZydlyJcXyaK97eix";

    $decrypted_data = openssl_decrypt($data, $cipher, $encryption_key, 0, $iv); 


    $rez = "";

    for($i = 64; $i < strlen($decrypted_data); $i++){
        $rez .= $decrypted_data[$i];
    }
    return $rez; 
}

?>