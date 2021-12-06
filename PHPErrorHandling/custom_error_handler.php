<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Error handler function
function customError($errno, $errstr){
    echo "<b>Error:</b> [$errno] $errstr";
}
 
// Set error handler
set_error_handler("customError");
 
// Trigger error
echo($test);
?>
</body>
</html>