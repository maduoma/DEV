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
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 2
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 3
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 4
 ?>


<?php
// Displays the absolute path of this file
echo "The full path of this file is: " . __FILE__;
?>

<?php
// Displays the directory of this file
echo "The directory of this file is: " . __DIR__;
?>


<?php
function myFunction(){
    echo  "The function name is - " . __FUNCTION__;
}
myFunction(); // Displays: The function name is - myFunction
?>

<?php
class MyClass1
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new MyClass1();
echo $obj->getClassName(); // Displays: MyClass
?>


<?php
class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample();
$obj->myMethod(); // Displays: Sample::myMethod
?>


<?php

//namespace MyNamespace;
class MyClass
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClass();
echo $obj->getNamespace(); // Displays: MyNamespace
?>
</body>
</html>