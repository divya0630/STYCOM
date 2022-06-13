<?php

include "db.php";

if(isset($_POST['CreateAccount']))
{
    $customerfirstname = $_POST['firstName'];
    $customerlastname = $_POST['lastName'];
    $customercontactnumber = $_POST['contactNumber'];
    $customeremailid = $_POST['emailId'];
    $customerpassword = $_POST['password']; 
    $salt = "";
    $encryptedpassword = crypt($customerpassword,$salt);
    $query = "INSERT INTO customer VALUES(DEFAULT,'$customerfirstname','$customerlastname',NULL,$customercontactnumber,'$customeremailid','$encryptedpassword')";
    $creatAccountquery = pg_query($connect,$query);

    if($creatAccountquery)
        echo "Registereed!";

}



?>