<?php class User extends Db
{
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user`,`roles` WHERE user.roles=roles.role_id order BY user.user_id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delUser($user_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `user` WHERE `user_id` =?");
        $sql->bind_param("i", $user_id);
        return $sql->execute(); //return an object
    }
}