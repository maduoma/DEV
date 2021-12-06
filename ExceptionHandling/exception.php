<?php
function division($dividend, $divisor)
{
    // Throw exception if divisor is zero
    if ($divisor == 0) {
        throw new Exception('Division by zero.');
    } else {
        $quotient = $dividend / $divisor;
        echo "<p>$dividend / $divisor = $quotient</p>";
    }
}

try {
    division(10, 2);
    division(30, -4);
    division(15, 0);

    // If exception is thrown following line won't execute
    echo '<p>All divisions performed successfully.</p>';
} catch (Exception $e) {
    // Handle the exception
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}

// Continue execution
echo "<p>Hello World!</p>";
?>


<?php
// Turn off default error reporting
error_reporting(0);

try {
    $file = "somefile.txt";

    // Attempt to open the file
    $handle = fopen($file, "r");
    if (!$handle) {
        throw new Exception("Cannot open the file!", 5);
    }

    // Attempt to read the file contents
    $content = fread($handle, filesize($file));
    if (!$content) {
        throw new Exception("Could not read file!", 10);
    }

    // Closing the file handle
    fclose($handle);

    // Display file contents
    echo $content;
} catch (Exception $e) {
    echo "<h3>Caught Exception!</h3>";
    echo "<p>Error message: " . $e->getMessage() . "</p>";
    echo "<p>File: " . $e->getFile() . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
    echo "<p>Error code: " . $e->getCode() . "</p>";
    echo "<p>Trace: " . $e->getTraceAsString() . "</p>";
}
?>

<!-- //Defining Custom Exceptions -->
<?php
// Extending the Exception class
class EmptyEmailException extends Exception {}
class InvalidEmailException extends Exception {}
 
$email = "someuser@example..com";
 
try{
    // Throw exception if email is empty
    if($email == ""){
        throw new EmptyEmailException("<p>Please enter your E-mail address!</p>");
    }
    
    // Throw exception if email is not valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {           
        throw new InvalidEmailException("<p><b>$email</b> is not a valid E-mail address!</p>");
    }
    
    // Display success message if email is valid
    echo "<p>SUCCESS: Email validation successful.</p>";
} catch(EmptyEmailException $e){
    echo $e->getMessage();
} catch(InvalidEmailException $e){
    echo $e->getMessage();
}
?>

<!-- //////Setting a Global Exception Handler////////// -->
<?php
function handleUncaughtException($e){
    // Display generic error message to the user
    echo "Opps! Something went wrong. Please try again, or contact us if the problem persists.";
    
    // Construct the error string
    $error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
    $error .= $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine() . "\n";
    
    // Log details of error in a file
    error_log($error, 3, "var/log/exceptionLog.log");
}
 
// Register custom exception handler
set_exception_handler("handleUncaughtException");
 
// Throw an exception
throw new Exception("Testing Exception!");
?>