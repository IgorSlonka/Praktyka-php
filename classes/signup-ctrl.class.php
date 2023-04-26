<?php
class SignupCtrl extends Register{
    private $name;
    private $surname;
    private $mail;
    private $pwd;
    private $tel;


    public function __construct($name, $surname, $mail, $pwd, $tel){
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->pwd = $pwd;
        $this->tel = $tel;
    }

    public fuction SignupUser(){
        if(ErrEmpty() == false){
            header("location: ../rejestracja.php?error=emptyinput");
            exit();
        }
        if(ErrMail() == false){
            header("location: ../rejestracja.php?error=invalidmail");
            exit();
        }
        if(ErrPwd() == false){
            header("location: ../rejestracja.php?error=invalidpwd");
            exit();
        }
        if(Errtel() == false){
            header("location: ../rejestracja.php?error=invalidtel");
            exit();
        }
        if(ExistUser() == false){
            header("location: ../rejestracja.php?error=userexist");
            exit();
        }
        $this-> AddUser($this-> name, $this-> surname, $this-> mail, $this-> pwd, $this-> tel);
    }

    private function ErrEmpty(){
        $result;
        if (empty($this->name) || empty($this->surname) || empty($this->mail) || empty($this->pwd) || empty($this->tel)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function ErrMail(){
        $result;
        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function ErrPwd(){
        $result;Register
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function ErrTel(){
        $result;
        if (strlen($this->tel)!=9) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function ExistUser(){
        $result;
        $rejestr = new rejestr();
        if (!$rejestr->CheckUser($this->mail, $this->tel)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}

