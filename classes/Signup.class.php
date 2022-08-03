<?php

class Signup extends DB{

    public function setUser($uname, $email, $pwd){

        $stmt = $this->connect()->prepare("INSERT INTO users(uname, email, pwd) VALUES(?, ?, ?)");

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(Array($uname, $email, $hashedPwd))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit;
        }
        $stmt = null;
    }
    public function checkUser($uname, $email){

        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE uname = ? OR email = ?");
        if(!$stmt->execute(Array($uname, $email))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit;
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
?>