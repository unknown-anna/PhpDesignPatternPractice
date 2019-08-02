<?php 

require_once('DisplaySourceFile.class.php');
require_once('ShowFile.class.php');


// ===
// 移譲
// ===

// /**
//  * DIsplaySourceFIleを実装したクラス
//  */
// class DisplaySourceFileImpl implements DisplaySourceFile
// {

//     /**
//      * ShowFileのインスタンスを保持する。
//      */
//     private $show_file;

//     /**
//      * コンストラクタ
//      */
//     public function __construct($filename)
//     {
//         $this->show_file = new ShowFile($filename);
//     }

//     /**
//      * 指定されたソースファイルをハイライトする
//      */
//     public function display()
//     {
//         $this->show_file->showHighlight();
//     }

// }



// ===
// 継承
// ===

// /**
//  * DIsplaySourceFIleを実装したクラス
//  */
// class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
// {


//     /**
//      * コンストラクタ
//      */
//     public function __construct($filename)
//     {
//         parent::__construct($filename);
//     }

    
//     /**
//      * 指定されたソースファイルをハイライトする
//      */
//     public function display()
//     {
//         parent::showHighlight();
//     }

// }