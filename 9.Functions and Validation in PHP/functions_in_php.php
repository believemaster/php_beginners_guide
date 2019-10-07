<?php

function showMessage()
{
	echo "Hello from showMessage() function";
}
showMessage();

// arguments in functions
function showName($name)
{
	echo "<br>Hello {$name}  from showName() function";
}
showName("Believe Master");

//Override the arguments
function showOverride($name="Believe Master")
{
	echo "<br>Hello {$name}  from showOverride() function";
}
showOverride("Yanik Kumar");

//Default the arguments
function showDefault($name="Believe Master")
{
	echo "<br>Hello {$name} from showDefault() function";
}
showDefault();

// Return Value
function returnValue($name="Believe Master")
{
	return "<br>Hello {$name} from returnValue() function";
}
$msg = returnValue();
echo $msg;

// Retunr value if else
// Return Value
function returnBool($morning)
{
	if ($morning) {
		return "<br>Good Morning";
	}else {
		return "<br>Good Afternoon";
	}
}
$day = returnBool(true);
echo $day;
$day = returnBool(false);
echo $day;

/**
* Above
* Get the message
*	@param boolean $morning true if morning, false otherwise
*	@return string a message relevant to if it's morning or not.
*
**/

?>
