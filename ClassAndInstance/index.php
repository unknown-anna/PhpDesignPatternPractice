<?php

require_once('class/Human.class.php');
require_once('class/HumanInstance.class.php');

$HumanClass = new HumanInstance();

    echo Human::actionThrow();
    echo $HumanClass->actionThrow();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class And Instance</title>
</head>

<body>

<p>boo</p>    

</body>
</html>