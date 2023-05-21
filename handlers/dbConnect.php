<?php

    /**
     * Datebase Connection
     */

     class DbConnect {
        private $host = 'b0blbrxqnzglyazfacvv-mysql.services.clever-cloud.com';
        private $db   = 'b0blbrxqnzglyazfacvv';
        private $user = 'uxhoh48wieffalen';
        private $pass = 'ZposaKAganJ49PlHhyzV';

        public function connect() {
            try{
                $con = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return $con;
            }catch(PDOException $e){
                echo "Error in connection". $e->getMessage();
            }
        }
    }
    

?>