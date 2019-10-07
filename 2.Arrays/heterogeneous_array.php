<?php
$values = [
					"message"=>"Hellow All",
					"count"=>3,
					"pi"=>3.14,
					"status"=>false,
					"result"=>null
					];

var_dump($values);

echo "<br><br>Accessing Variables in Array<br>";
$petrol = 74.16;
$cng = 35;
$fuel = [
				$petrol,
				$cng
				];

var_dump($fuel);
?>
