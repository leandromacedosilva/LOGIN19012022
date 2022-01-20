<?php
        class usuarios{
            private $pdo;
            public function connect($name,$host,$user,$pass){
                global $pdo;
                $pdo = new PDO('mysql:dbname'.$name.';host='.$host,$user,$pass);
            }
            public function insert(){
                global $pdo;
            }
            public function login(){
                global $pdo;
            }
        }
?>