<?php
     $multiDArray = array(
         "A" => array(0 => "red", 2 => "blue", 3 => "green"),
         "B" => array(1 => "orange", 2 => "black"), 
         "C" => array(0 => "white", 4 => "purple", 8 => "grey")
         
     );

     echo $multiDArray["A"][3];   //Outputs green
     echo "<br>";
     echo $multiDArray["C"][8];   //Outputs grey
?>