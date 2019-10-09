<?php

$password = 'admin';

// Generate secure password hash :-
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Password = ".$password."<br>";
echo "Hash Value = ".$hash;		// always changes in each refresh


// To check if the passoword hash matches password_verify($password, $hash) :-
// $hash = "$2y$10$8YiE911mrz/jrL0EncZhR../RrhmJ0PH2BQxb0JujvS8Xduua345q";
//
// var_dump(password_verify($password, $hash));
