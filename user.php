<?php
session_start();
    require_once ('connexion.php');
    class User extends Connexion{
        private $idUser;
        private $username;
        private $password;

        public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
        }

        public function getUserByUserName(){
            $conn = $this->connect();
            $req = "SELECT * FROM users WHERE username = '$this->username'";
            $res = $conn->query($req);
            if ($res->num_rows == 0) {
                return true;
            }else{
                return false;
            }
        }
        public function getUserByUserNameAndPassword(){
            $conn = $this->connect();
            $req = "SELECT * FROM users WHERE username = '$this->username' and password = '$this->password'";
            $res = $conn->query($req);
            if ($res->num_rows == 0) {
                return false;
            }else{
                $row = $res->fetch_assoc();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['regDate'] = $row['create_at'];
                    $_SESSION['logDate'] =  date("Y/m/d") ."  " . date("h:i:sa");

                return true;
            }
        }
        public function registerUser(){
            $conn = $this->connect();
            if($this->getUserByUserName()){
                $req = "INSERT INTO users (username, password ) VALUES ('$this->username' , '$this->password')";
                $conn->query($req);
            }else{
                echo '<script>alert("user existe")</script>';
            }
        }

        public function loginUser(){
            if($this->getUserByUserNameAndPassword()){ 
                echo '<script>window.location="profil.php"</script>';
                // header('location : profil.php');
            }else
            echo 'aaaaa';
        }

    }

?>
