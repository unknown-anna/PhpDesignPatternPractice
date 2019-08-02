<?php 

require_once('DisplaySourceFileImpl.class.php');

/**
 * ShowFileクラスをインスタンス化する、
 * 内容を表示するファイルは「ShowFile.class.php」
 */
// try {
//     $showFileClass = new ShowFile('./ShowFile.class.php');    
// }
// catch(Exception $e) {
//     die($e->getMessage());
// }
$showFileClass = new DisplaySourceFileImpl('./ShowFile.class.php');    


/**
 * プレーンテキストとハイライトしたファイル内容をそれぞれ
 * 表示する。
 */
// $showFileClass->showPlain();
// echo '<hr>';
// $showFileClass->showHighlight();
$showFileClass->display();