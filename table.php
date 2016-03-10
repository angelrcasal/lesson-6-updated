<?php
    //table.php

    //getting our config
    require_once("../../config.php");

    //created connection
    $mysql =new mysqli("localhost", $db_username, $db_password, "webpr2016_angcas");

    //SQL sentence
    $stmt = $myswl->prepare("SELECT id,recipient, message, created FROM message_sample ORDER BY created DESC LIMIT 10");

    //variable for data for each row we will get 
    $stmt->bing_result ($id, $recipient, $created);
    
    //query 
    $stmt->execute();

    $table_html .="<table>";
        $table_html .="<tr>";
        $table_html .="<th>Recipient</th>";
        $table_html .="<th>Message</th>";
        $table_html .="<th>Created</th>";
    $table_html .= "</tr>";


    //GET RESULT
    //we have multiple rows
    while($stmt->fetch()){
        
    //DO SOMETHIMES FOR EACH ROW
    echo $id. " " .message."br";
      
           
    }
    $table_html .="</table>";
    echo $table_html;



?>
<a href="table.php">table</a>
<h2> First application </h2>
    
    //