<?php

require 'vendor/autoload.php';



if(DEV){
    $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    $url = substr($actual_link,0,strlen($actual_link)-7 )."hook.php";
    
    $u = tg_api().'setwebhook?url='.$url;
    file_get_contents($u);
}


