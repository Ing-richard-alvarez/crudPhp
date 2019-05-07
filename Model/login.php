<?php
   
   class Login extends EntidadBase {
        
        public function __construct() {
            $table = "sessions";
            parent::__construct($table);
        }

        public static function checkLoginState($userid,$token,$serial){
            if(!isset($_SESSION['id']) || !isset($_SESSION['PHPSESSID'])){
                session_start();
            }
            if(isset($_COOKIE['id']) && isset($_COOKIE['token']) && isset($_COOKIE['serial'])){

                $query = "SELECT * FROM sessions WHERE sessions_userid = $userid AND sessions_token = $token AND sessions_serial = $serial";
 
                $userid = $_COOKIE['userid'];
                $token = $_COOKIE['token'];
                $serial = $_COOKIE['serial'];

                $stmt = $this->db()->query($query);
               
                $row = $stmt->fetch_row(); 

                if($row['sessions_userid'] > 0){
                    if(
                        $row['sessions_userid'] == $_COOKIE['userid'] &&
                        $row['sessions_token'] == $_COOKIE['token'] &&
                        $row['sessions_serial'] == $_COOKIE['serial'] 
                    ){
                        if(
                            $row['sessions_userid'] == $_SESSION['userid'] &&
                            $row['sessions_token'] == $_SESSION['token'] &&
                            $row['sessions_serial'] == $_SESSION['serial']
                        ){
                            return true;
                        }
                    }
                }
            }
        }
    }
?>