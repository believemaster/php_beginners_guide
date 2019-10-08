<?php

setcookie('example', 'hello', time() - 3600); // making past time so that cookie deletes

echo "Cookie Deleted.";

?>
