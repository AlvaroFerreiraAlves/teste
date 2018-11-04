<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 02/11/18
 * Time: 23:04
 */
require_once ('Connection.php');
class Product
{
    private $name;
    private $description;
    private $price;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function all(){
        $db = Connection::conectDB();
        $sql = "SELECT * FROM products;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(){
        $db = Connection::conectDB();
        $sql = "INSERT INTO products (name, description, price) values (:name, :description, :price)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        return $stmt->execute();
    }

    public function edit($id){
        $db = Connection::conectDB();
        $sql = "select * from products where id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id){
        $db = Connection::conectDB();

        $sql  = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();

    }

    public function delete($id){
        $db = Connection::conectDB();
        $sql = "delete from products where id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }


}