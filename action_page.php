<?php
 $image = $_POST["output"];
 $name = $_POST["fname"];
 $price = $_POST["price"]
 $negotiate = $_POST["negotiate"];
 $description = $_POST["description"];
 $categories = $_POST["product-tag"];

 $keys = array($image, $name, $price, $negotiate, $description, $categories); //THIS IS WHERE YOU PUT THE FORM ELEMENTS ex: array('$fieldA','$fieldB',etc)
 $csv_line = $keys;
 foreach($keys as $key){
     array_push($csv_line,'' . $_GET[$key]);
 }
 $fname = 'data.csv'; //NAME OF THE FILE
 $csv_line = implode(',',$csv_line);
 if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
 $fcon = fopen($fname,'a');
 $fcontent = $csv_line;
 fwrite($fcon,$fcontent);
 fclose($fcon);
 ?>
