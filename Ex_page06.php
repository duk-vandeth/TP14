<?php
define("EMAIL", "me@example.com"); //Valid constant name
echo EMAIL; //Displays "me@example.com"

define("myCon", true);
if (myCon) { } //Evalueate to true

define("ONECONSTANT", "some value"); //Invalid constant name

define("CONSTANT", "Hello World.");
echo CONSTANT; //outputs "Hello world."
echo Constant; // outputs "Constant" and issues a notice.

define("GREETING", "Hello world.", true);
echo GREETING; //outputs "Hello world."
echo Greeting; // outputs "Hello world."
?>