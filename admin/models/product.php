<?php class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id ORDER BY `products`.`id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProduct($name, $manu_id, $type_id, $price, $image, $desc, $feature)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`,`feature`) 
        VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name, $manu_id, $type_id, $price, $image, $desc, $feature);
        return $sql->execute(); //return an object
    }
    public function addProType($name)
    {   
        $sql = self::$connection->prepare("INSERT 
        INTO`protypes`( `type_name`) 
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object
    }
    public function delProtype($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id` =?");
        $sql->bind_param("i", $type_id);
        return $sql->execute(); //return an object
    }
    public function addManu($name)
    {   
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures`( `manu_name`) 
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object
    }
    public function delManu($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` =?");
        $sql->bind_param("i", $manu_id);
        return $sql->execute(); //return an object
    }
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `products`.`id` =?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }

    public function editProduct($name, $manu_id, $type_id, $price, $image, $desc, $feature, $id)
    {
        if ($image == "") {
            $sql = self::$connection->prepare(" UPDATE `products` SET 
            `name`=?,`manu_id`=?,`type_id`=?,
              `price`=?,`description`=?,`feature` = ?
               WHERE `id`=?
              ");
            $sql->bind_param("siiisii", $name, $manu_id, $type_id, $price, $desc, $feature, $id);
        } else {
            $sql = self::$connection->prepare(" UPDATE `products` SET 
      `name`=?,`manu_id`=?,`type_id`=?,
        `price`=?,`image`=?,`description`=?,`feature` = ?
         WHERE `id`=?
        ");
            $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $desc, $feature, $id);
        }

        return $sql->execute(); //return an object
    }
    //Lấy sản phẩm theo id 
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `manu_id` = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductByTypeId($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
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
