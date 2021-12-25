<?php  
class User extends Db{
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addUser($username,$password, $email, $phone, $fullname, $roles)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `user`(`username`,`password`, `email`, `phone`, `fullname`, `roles`) 
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("sssssi",$username,$password, $email, $phone, $fullname, $roles);
        return $sql->execute(); //return an object
    }
}
