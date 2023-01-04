<?php
namespace Supon\Orders;

use Supon\Db;
// use Supon\Category\Category;

class Orders{
    public function index(){
    // print_r($data);
    // die();
        $user_id = $_SESSION['authUser']['id'];

        $db = new Db;
        $db->connect();

        $sql = $db->prepareSql("SELECT * FROM orders WHERE user_id = :user_id");
            
        $sql->execute($data = [
            'user_id' => $user_id
        ]);
        $result = $sql->fetchAll();
        // echo "<pre>";
        // print_r($result);
        // die();
        return $result;
    }
    public function create($data){
        $p_id = $data['p_id'];
        $user_id = $data['user_id'];
        $photo = $data['photo'];
        $product_name = $data['name'];
        $category_id = $data['category_id'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $subtotal = $data['subtotal'] = round($data['price'] * $data['quantity']);

        $db = new Db;
        $db->connect();

        $sql = "SELECT quantity FROM orders where p_id= :p_id AND user_id = :user_id";
        $data = ['p_id'=>$p_id, 'user_id'=>$user_id];
        $stmt = $db->prepareSql($sql);
        $stmt->execute($data);
        $result = $stmt->fetch();
        // print_r($result['quantity']);
        // die();
       if($result){
        $existingQty = $result['quantity'];
        }else{
        $existingQty = 0;
        }
        if ($existingQty == 0){  
                $data = [
                    'p_id' => $p_id,
                    'user_id' => $user_id,
                    'photo' => $photo,
                    'product_name' => $product_name,
                    'category_id' => $category_id,
                    'price' => $price,
                    'quantity' => $quantity,
                    'description' => $description,
                    'subtotal' => $subtotal
                ];

            
                $db = new Db;
                $db->connect();
            
        $sql = "INSERT INTO orders (p_id, user_id, photo, product_name, category_id,  price, quantity, subtotal, description) VALUES (:p_id, :user_id, :photo, :product_name, :category_id, :price, :quantity,:subtotal, :description)";
        $stmt = $db->prepareSql($sql);
        $stmt->execute($data);
        }else{
            $db = new Db;
            $db->connect();
            $sql = "UPDATE orders SET quantity = :quantity, subtotal = :subtotal WHERE p_id = :p_id AND user_id = :user_id";
            
            $data = [
                'quantity'=>$quantity,
                'subtotal'=>$subtotal,
                'p_id'=>$p_id,
                'user_id'=>$user_id
            ];

            $stmt = $db->prepareSql($sql);
            $stmt->execute($data);
        }
        header("Location:./view-card.php");
    }
    public function edit($id){
        $id = $_GET['id'];

        $db = new Db;
        $db->connect();
        
        $sql = $db->prepareSql("SELECT * FROM orders WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    // public function update($data){
    //     $p_id = $data['p_id'];
    //     $image = $data['image'];
    //     $product_name = $data['product_name'];
    //     $category_name = $data['category_name'];
    //     $price = $data['price'];
    //     $qty = $data['quantity'];
    //     $description = $data['description'];
    //     $data = [
    //         'p_id' => $p_id,
    //         'image' => $image,
    //         'product_name' => $product_name,
    //         'category_name' => $category_name,
    //         'price' => $price,
    //         'quantity' => $qty,
    //         'description' => $description];

    //         $db = new Db;
    //         $db->connect();

    //     $sql = "UPDATE orders SET p_id=:p_id, image=:image, product_name=:product_name, category_name=:category_name, price=:price, quantity=:quantity, description=:description WHERE id = $id";
    //     $stmt = $db->prepareSql($sql);
    //     $stmt->execute($data);
    //     session_start();
    //     $_SESSION['msg'] = "Succsessfully Updated";
    //     // session_destroy();
    //     header("Location:./index.php");
    // }
    public function destroy($data){
        $id = $data['id'];

        $db = new Db;
        $db->connect();

        $sql = "DELETE FROM orders WHERE id = $id";
        $stmt = $db->prepareSql($sql);
        $result = $stmt->execute();
        session_start();
        $_SESSION['msg'] = "Succsessfully Deleted";
        header("Location: ./view-card.php");
        return $result;
    }
    public function show($id){
        $db = new Db;
        $db->connect();

        $sql = $db->prepareSql("SELECT * FROM orders WHERE id = $id");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
}


?>