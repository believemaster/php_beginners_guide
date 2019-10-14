<?php

// Error
function errorHandler($level, $message, $file, $line)
{
	echo "Caught Error: ", $message;
}

set_error_handler('errorHandler');

$i = 1/0;

echo "<br>";
echo "<br>";

// Exception
function exceptionHandler($exception)
{
	echo "Caught Exception: ". $exception->getMessage();
}

set_exception_handler('exceptionHandler');

$datetime = new DateTime('invalid');

echo "<br>";
echo "<br>";

// Error Exception
function errorHandler($level, $message, $file, $line)
{
	throw new ErrorException($message, 0, $level, $file, $line);
}

set_error_handler('errorHandler');

$i = 1/0;

// try {
// 	$datetime = new DateTime('invalid');
// } catch (Throwable $e) {
// 	echo "Caught: ". $e->getMessage();
// }
