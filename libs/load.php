<?php
function load_template($name)
{
          
    //include __DIR__."/../_template/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/Photogram/_template/$name.php";
}

function validate_credential($email_address, $password)
{
    //print("validate_credential()");
    if($email_address == "klinton@gmail.com" and $password =="password"){
        return true;
    }else{
        return false;
    }
}
?>


          