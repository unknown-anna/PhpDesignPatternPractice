<?php

ini_set ('display_errors', 'on');
ini_set ('error_reporting', E_ALL);

require_once 'SingletonSample.class.php';

/**
 * インスタンスを2つ取得する
 */
$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

/**
 * 2つのインスタンスが同一IDかどうかを確認する
 */
echo 'instance ID : ' . $instance1->getID() . '<br>';
echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

/**
 * 2つのインスタンスが同一かどうかを確認する
 */
echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

/**
 * 複製できないことを確認する
 */
// $instance1_clone = clone $instance1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singleton</title>
</head>

<body>

    <p>
    </p>

</body>

</html>