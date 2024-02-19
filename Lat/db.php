<?php

    class DB{
        public $host = "127.0.0.1";
        private $user = "root";
        private $pasword = "";
        private $database = "dbrestoran";

        public function _construct(){
            echo "function construct";
        }
        public function selectData(){
            echo 'select data';
        }
        
        public function getDatabase(){
            return $this -> database;
        }

        public function tampil(){
            $this -> selectData();
        }
        public static function insertData(){
            echo "satatic function";
        }
    }

    DB::insertData();

    $db = new DB;

    // echo '<br>';

    // var_dump($db);
    // $db->selectData();
    // echo '<br>';
    // echo $db->host;
    // echo '<br>';
    // $db->getDatabase();
    // echo '<br>';
    // $db -> tampil();

?>