<?php
//date(format, timestamp); timestamp is optinal
echo "Today's date" . "<br />";
echo "=======================================" ."<br />";
$today = date('d/m/Y');
echo $today . "<br />";
echo "=======================================" ."<br />";

//Formatting the Dates and Times with PHP
echo "Formatting the Dates and Times" . "<br />";
echo "=======================================" ."<br />";
echo date('d/m/Y') . "<br />";
echo date('d-m-Y') . "<br />";
echo date('d.m.Y') . "<br />";
echo date('d m Y') . "<br />";
echo date('d:m:Y') . "<br />";
echo "=======================================" ."<br />";

//Additional formatting characters to format the time string
echo "Additional formatting characters to format the time string" . "<br />";
echo "=======================================" ."<br />";
echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");
?>