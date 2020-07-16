<?php
$name =isset($_POST['name']) ? $_POST['name'] :'';
$name =isset($_POST['password']) ? $_POST['password'] :'';
$name =isset($_POST['email']) ? $_POST['email'] :'';

$ok = true;
$messages = array();

if(!isset($name) || empty($name))
{
 
$ok = false;
$messages[] = 'username empty!';   
}

if(!isset($password) || empty($password))
{
 
$ok = false;
$messages[] = 'password empty!';   
}

if(!isset($email) || empty($email))
{
 
$ok = false;
$messages[] = 'email empty!';   
}

if($ok){
    if($name==='dcode' && $password==='dcode' && $email==='dcode'){
       
$ok = true;
$messages[]='sucessful'; 
    }
    else{
        
$ok = false;
$messages[]='unsucessful'; 
    }
}
echo json_encode(
    array(
       'ok'=>$ok,
       'messages'=>$messages 
    )
    );
    ?>