<?php 

class Login extends DB{

    public function getUser($uname, $pwd){

        $stmt = $this->connect()->prepare("SELECT pwd FROM users WHERE uname = ?");

        if(!$stmt->execute(Array($uname))){
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit;
        }
        if($stmt->rowCount() == 0){
            go("The username or password is incorrect!", "../login.php");
            exit;
        }

        $pwdHashed = $stmt->fetch(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed["pwd"]);

        if($checkPwd == false){
            go("The username or password is incorrect!", "../login.php");
            exit;
        }elseif($checkPwd == true){
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE uname = ?");
            if(!$stmt->execute(Array($uname))){
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit;
            }
            if($stmt->rowCount() == 0){
                go("The username or password is incorrect!", "../login.php");
                exit;
            }
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION["auth"] = true;
            $_SESSION["uid"] = $user["uid"];
            $_SESSION["uname"] = $user["uname"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["pwd"] = $user["pwd"];

            $stmt = null;
        }
        $stmt = null;
        go("Login successfully!", "../index.php");
        exit;
    }
}

?>