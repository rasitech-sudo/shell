<?php

$fileList = glob('test/*.php');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo $filename, '<br>'; 
    }   
}
?>
