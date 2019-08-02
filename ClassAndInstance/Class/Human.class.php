<?php

    class Human 
    {

        private $item;


        function actionThrow($item='')
        {
            if(empty($item)) {
                // $item = $this->getItem();
                $item = self::getItem();
            }

            echo 'I thrown '.$item.'!<br>';

        }


        function getItem()
        {
            return 'stone';
        }

    }