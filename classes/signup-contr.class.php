<?php

class SignupContr extends Signup{

    private $uname;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($uname, $email, $pwd, $pwdRepeat){

        $this->uname = $uname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }
    public function signupUser(){
        if($this->emptyInput() == false){
            $_SESSION["error"] = "Empty Input!";
            header("location: ../signup.php");
            exit;
        }
        if($this->invalidUname() == false){
            $_SESSION["error"] = "Invalid username!";
            header("location: ../signup.php");
            exit;
        }
        if($this->invalidEmail() == false){
            $_SESSION["error"] = "Invalid email!";
            header("location: ../signup.php");
            exit;
        }
        if($this->pwdMatch() == false){
            $_SESSION["error"] = "Passwords don't match!";
            header("location: ../signup.php");
            exit;
        }
        if($this->uidTakenCheck() == false){
            $_SESSION["error"] = "Username or email taken!";
            header("location: ../signup.php");
            exit;
        }
        $this->setUser($this->uname, $this->email, $this->pwd);
    }
    private function emptyInput(){
        $result;
        if(empty($this->uname) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidUname(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uname)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck(){
        $result;
        if(!$this->checkUser($this->uname, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}

?>