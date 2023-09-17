<?php
 $image = $_POST["output"];
 $name = $_POST["fname"];
 $negotiate = $_POST["negotiate"];
 $description = $_POST["paragraph_text"];
 $categories = $_POST["product-tag"];

 $keys = array($image, $name, $negotiate, $description, $categories); //THIS IS WHERE YOU PUT THE FORM ELEMENTS ex: array('$fieldA','$fieldB',etc)
 $csv_line = array();
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
