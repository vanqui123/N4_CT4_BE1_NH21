<?php class User extends Db
{
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `username`= ? AND `password`=? ");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else return false;
    }
    public function resigter($fullname,$username,$password,$email,$role)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`fullname`,`username`, `password`, `email`,`roles`) VALUES (?,?,?,?,?)");
        $password = md5($password);
        $sql->bind_param("ssssi",$fullname,$username, $password,$email,$role);
        $sql->execute(); //return an object $items = $sql->get_result()->num_rows;
    }
    public function checkUsername($username)
    {
        $sql = self::$connection->prepare("SELECT `username` FROM `user` WHERE `username`= ? ");
        $sql->bind_param("s",$username);
        $sql->execute(); //return an object $items = $sql->get_result()->num_rows;
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else return false;
    }
    public function checkEmail($email)
    {
        $sql = self::$connection->prepare("SELECT `email` FROM `user` WHERE `email`=? ");
        $sql->bind_param("s",$email);
        $sql->execute(); //return an object $items = $sql->get_result()->num_rows;
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else return false;
    }
}
