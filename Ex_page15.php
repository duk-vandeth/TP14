<?php
   session_start();

   // store session data
   $_SESSION["username"] = "vandeth";
   $_SESSION["email"] = "vandeth@gmail.com";

   // retrieve session data 
   echo $_SESSION["username"];
   echo "<br>";
   echo $_SESSION["email"];
?>