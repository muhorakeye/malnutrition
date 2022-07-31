<?php

  try{
   
    //$conn = new PDO('mysql:host=localhost; dbname=motion','root','' );

    $conn = new PDO('mysql:host=localhost; dbname=thousand_thousandhillsani','thousand_thousandhillsani','thousand_thousandhillsani' );

  }

  catch(PDOException $e){
    die('

    	<h1>Connection Failed</h1>
    ');
  }

?>