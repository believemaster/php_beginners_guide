<?php
// non indexed array
echo "Non-Indexed Array<br>";
$data = [
				"first", "second", "third"
				];

foreach ($data as $index => $value) {   // index is array index and value is value of index
	echo $index.'-'.$value.", ";
}

// indexed array
echo "<br><br>Indexed Array<br>";
$data = [
				"a"=>"first",
				"b"=>"second",
				"c"=>"third"
				];

foreach ($data as $index => $value) {   // index is array index and value is value of index
	echo $index.'-'.$value.", ";
}
?>
