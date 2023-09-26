<!-- Task 5: Password Generator
Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password. -->

<?php
function generatePassword($length) {
     
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
     
    $pool = $lowercase . $uppercase . $numbers . $specialChars;
    
    $password = '';
    $poolLength = strlen($pool);
    
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $pool[random_int(0, $poolLength - 1)];
        $password .= $randomChar;
    }
    return $password;
}

$desiredLength = 12;
$password = generatePassword($desiredLength);
echo "Generated Password: $password\n";
?>
