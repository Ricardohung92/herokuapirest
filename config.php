<?php

    class database {
        private $db_host =      'b17isykv5bydfd5s31bt-mysql.services.clever-cloud.com';
        private $db_name =      'b17isykv5bydfd5s31bt';
        private $db_username =  'u12oeoioh2pssikm';
        private $db_password =  '9ZX7enAUgxlkimsAc2rI';

        public function dbconnection(){
            try{
                $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
                $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
            catch(PDOException $e){
                echo "connection error " .$e-> getMessage();
                exit;
            }
        }
    }

?>