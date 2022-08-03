<?php

class SignupContr{

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
}

?>