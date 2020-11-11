<?php
$email = "john#%&&!^_.doe@example.com";

// validate email with preg_match
function validateEMAIL($email) {
    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";

    return preg_match($v, $email);
}
if(validateEMAIL($email) == 1)
{
    echo("$email is a valid email address"."<br>");
} else echo("$email is not a valid email address"."<br>");


// Validate e-mail with FILTER_VALIDATE_EMAIL
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address"."<br>");
} else {
    echo("$email is not a valid email address"."<br>");
}
?>