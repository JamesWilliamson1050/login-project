<?php

$conn = mysql_connect("localhost","jwilliamson1050","");
mysql_select_db("c9");
session_start();

if (false===$conn){
    die("it hansey worked");
}        
        else{
            echo 'Database Connected';
        }
        
?>