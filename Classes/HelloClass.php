//Static properties and methods can be accessed using the scope resolution operator (::), 
//like this: ClassName::$property and ClassName::method()

<?php
// Class definition
class HelloClass
{
    // Declare a static property
    public static $greeting = "Hello World!";
    
    // Declare a static method
    public static function sayHello(){
        echo self::$greeting; //The keyword self in the above example means "the current class". 
        //It is never preceded by a dollar sign ($) and always followed by the :: operator (e.g. self::$name).
    }
}
// Attempt to access static property and method directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!
 
// Attempt to access static property and method via object
$hello = new HelloClass;
echo $hello->greeting; // Strict Warning
$hello->sayHello(); // Output: Hello World!
?>

