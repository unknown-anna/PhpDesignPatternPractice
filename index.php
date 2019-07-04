<?php

ini_set ('display_errors', 'on');
ini_set ('error_reporting', E_ALL);

require_once('TemplateMethod/ConcreteClass/ListDisplay.class.php');
require_once('TemplateMethod/ConcreteClass/TableDisplay.class.php');

$data = array('Design Pattern',
        'Gang of Four',
        'Template Method Sample1',
        'Template Method Sample2');

$display_list = new ListDisplay($data);
$display_table = new TableDisplay($data);

$display_list->display();
echo '<hr>';
$display_table->display();