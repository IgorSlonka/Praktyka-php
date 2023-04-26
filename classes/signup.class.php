<?php
class Register extends Dbh{
    protected function CheckUser($email, $tel){
        $stmt = this->ConnectDB()->prepare("SELECT * FROM users WHERE email = ? or tel = ?");
        if(!stmt->execute(array($email,$tel))){
            stmt=null;
            header("location: ../rejestracja.php?error=stmtfailed");
            exit();
        }

        $result;
        if($stmt->rowCount() > 0){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function AddUser($name, $surname, $mail, $password, $tel){
        $pdo = $this->ConnectDB();
        $sql = "INSERT INTO users (name, surname, mail, password, tel, created_at, changed_at) VALUES (?, ?, ?, ?, ?, timestamp(now()), timestamp(now()))";
        $stmt = $pdo->prepare($sql);
        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);    
        if(!$stmt->execute([$name, $surname, $mail, $encryptedPassword, $tel])){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
    } 
    $stmt = null;
}