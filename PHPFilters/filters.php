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
// Sample user comment
$comment = "<h1>Hey there! How are you doing today?</h1>";

// Sanitize and print comment string
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
?>



<?php
// Sample integer value
$int = 20;

// Validate sample integer value
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "The <b>$int</b> is a valid integer";
} else {
    echo "The <b>$int</b> is not a valid integer";
}
?>


<?php
// Sample integer value
$int = 0;

// Validate sample integer value
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)) {
    echo "The <b>$int</b> is a valid integer";
} else {
    echo "The <b>$int</b> is not a valid integer";
}
?>


<?php
// Sample IP address
$ip = "172.16.254.1";

// Validate sample IP address
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "The <b>$ip</b> is a valid IP address";
} else {
    echo "The <b>$ip</b> is not a valid IP address";
}
?>


<?php
// Sample IP address
$ip = "172.16.254.1";

// Validate sample IP address
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "The <b>$ip</b> is a valid IPV6 address";
} else {
    echo "The <b>$ip</b> is not a valid IPV6 address";
}
?>


<?php
// Sample email address
$email = "someone@@example.com";

// Remove all illegal characters from email
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate email address
if ($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The $email is a valid email address";
} else {
    echo "The $email is not a valid email address";
}
?>


<?php
// Sample website url
$url = "http:://www.example.com";
 
// Remove all illegal characters from url
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
 
// Validate website url
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
    echo "The $url is a valid website url";
} else{
    echo "The $url is not a valid website url";
}
?>


<?php
// Sample website url
$url = "http://www.example.com?topic=filters";
 
// Validate website url for query string
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "The <b>$url</b> contains query string";
} else{
    echo "The <b>$url</b> does not contain query string";
}
?>


<?php
// Sample integer value
$int = 75;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0,"max_range" => 100)))){
    echo "The <b>$int</b> is within the range of 0 to 100";
} else{
    echo "The <b>$int</b> is not within the range of 0 to 100";
}
?>
</body>
</html>