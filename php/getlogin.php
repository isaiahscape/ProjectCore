<?php

if (isset($POST['uname']) && isset($POST[oassword])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $password = validate($_POST['passsword']);

    if (empty($username)){
        # code...
    }else if(empty($password)){

    }else{
        echo "Valid input";
    }
}else{
    header("Location: index.php")
    exit();
    
}