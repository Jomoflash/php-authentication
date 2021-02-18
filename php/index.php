<?php
 // encrypt the password.
$username = "admin";
$password = "password";
$passwordMd5 = md5($password);
echo $passwordMd5;
echo "<br>";

$hashed_password = password_hash(strtolower($passwordMd5), PASSWORD_DEFAULT);
echo $hashed_password;

// verify password
echo "<hr>";

$userHash = '$2y$10$BmYLx1F3OgshSVfYKkebdO3Dz4K6dCphqDQY3QA3TLeW02jVMNlo2'; //hashed password from suitecrm DB

$valid = password_verify(strtolower($passwordMd5), $userHash);
echo $valid ? 'true - Password match' : 'false - Invalid password';

// method 2
echo '<br> <hr> Implementation using crypt <br>';
$valid2 = crypt(strtolower($passwordMd5), $userHash) == $userHash;
echo $valid2 ? 'true (match - crypt() method)' : 'false (crypt() method)';

?>