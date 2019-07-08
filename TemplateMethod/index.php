<?php

ini_set ('display_errors', 'on');
ini_set ('error_reporting', E_ALL);

require_once('ConcreteClass/ListDisplay.class.php');
require_once('ConcreteClass/TableDisplay.class.php');

$data = array(
    'Design Pattern',
    'Gang of Four',
    'Template Method Sample1',
    'Template Method Sample2'
);

$display_list = new ListDisplay($data);
$display_table = new TableDisplay($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AbstractDisplay</title>
</head>

<body>

    <?php
        $display_list->display();
        echo '<hr>';
        $display_table->display();
    ?>

    <p><a href="/">Back to Top</a></p>

</body>
</html>


