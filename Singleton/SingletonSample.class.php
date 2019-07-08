<?php 

class SingletonSample {

    /**
     * メンバー変数
     */
    private $id;


    /**
     * 唯一のインスタンスを保持する変数
     */
    private $instance;


    /**
     * コンストラクタ
     * IDとして、生成日時のハッシュ値を作成
     */
    private function __construct() {
        
        $this->id = md5(date('r') . mt_rand());

    }


    /**
     * 唯一のインスタンスを返すためのメソッド
     * @return SingletonSampleインスタンス
     */
    public static function getInstance() {

        if(!isset(self::$instance)) {
            
            self::$instance = new SingletonSample();
            echo 'a SingletonSample instance was created !';

        }
    }
}

