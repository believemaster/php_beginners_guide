<?php
// working in single dimension / associative array
$carol = [
					"name"=>"Carol",
					"email"=>"carol@mail.com",
					"age"=>20
];
$susan = [
					"name"=>"Susan",
					"email"=>"susan@mail.com",
					"age"=>22
];
$harry = [
					"name"=>"Harry",
					"email"=>"harry@mail.com",
					"age"=>18
];

$people_info = [$carol, $susan, $harry];
echo "Printed with single dimension array<br>";
var_dump($people_info);

// Working with multidimensional array
$detail = [
						$carol = [
											"name"=>"Carol",
											"email"=>"carol@mail.com",
											"age"=>20
						],
						$susan = [
											"name"=>"Susan",
											"email"=>"susan@mail.com",
											"age"=>22
						],
						$harry = [
											"name"=>"Harry",
											"email"=>"harry@mail.com",
											"age"=>18
						]
					];

echo "<br><br>Printed via multidimensional array<br>";
var_dump($detail);


echo "<br><br>Accessing multidimensional array<br>";
echo "Carol Mail:<br>";
$carol_mail = $detail[0]["email"];
var_dump($carol_mail);

echo "<br>Susan Age:<br>";
$susan_age = $detail[1]["age"];
var_dump($susan_age);
?>
