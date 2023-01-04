<?php

namespace Supon\Billing_details;

use Supon\Db;

class Billing_details{

    public function index()
    {
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM billings_details ");
        $sqlData->execute();
        $result = $sqlData->fetchAll();
        return $result;
    }
    
    public function create($data){
        $name           = $data['name'];
        $phone          = $data['phone'];
        $email          = $data['email'];
        $payment        = $data['payment'];

        $data=[
            'name'          =>$name,
            'phone'         =>$phone,
            'email'         =>$email,
            'payment'       =>$payment
        ];
        $db = new Db;
        $db->connect();
        $sql = "INSERT INTO billings_details (name,phone, email,payment)
        VALUES (:name,:phone, :email, :payment)";
        $stmt = $db->prepareSql($sql);
        $stmt->execute($data);
        // Update Query lagbe
        session_start();
        $_SESSION['msg'] = "Succsessfully Inserted";

        header("Location: ./invoice.php");
        }
    // public function edit($id){
    //     $id = $_GET['id'];

    //     $connection = new Connection;
    //     $connection->connect();
        
    //     $sql = $connection->prepareSql("SELECT * FROM billing_details WHERE id = $id");
    //     $sql->execute();
    //     $result = $sql->fetch();
    //     return $result;
    // }
    // public function update($data){
    //     $id = $_GET['id'];
    //     $catagory_name = $data['category_name'];
    //     $description = $data['c_description'];
    //     $data = [
    //     'category_name' => $catagory_name,
    //     'c_description' => $description];

    //     $connection = new Connection;
    //     $connection->connect();

    //     $sql = "UPDATE billing_details SET category_name=:category_name, c_description=:c_description WHERE id = $id";
    //     $stmt = $connection->prepareSql($sql);
    //     $stmt->execute($data);
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Updated";
    //     // session_destroy();
    //     header("Location:./index.php");
    // }
    // public function delete($data){
    //     $id = $data['id'];

    //     $connection = new Connection;
    //     $connection->connect();

    //     $sql = "DELETE FROM category WHERE id = $id";
    //     $stmt = $connection->prepareSql($sql);
    //     $result = $stmt->execute();
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Deleted";
    //     header("Location: ./index.php");
    //     return $result;
    // }
    public function show($id)
    {

        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM billing_details WHERE id =$id");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }
}

?>