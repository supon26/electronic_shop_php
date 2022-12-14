<?php

namespace Supon\Product;

use Supon\Db;
use Supon\Category\Category;


class Product
{
    public function index()
    {
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM products ");
        $sqlData->execute();
        $result = $sqlData->fetchAll();
        return $result;
    }
  

    public function store($data)
    {

        $name           = $data['name'];
        $category_name  = $data['category'];
        $description    = $data['description'];
        $price          = $data['price'];

        $uploadedFileName = $_FILES['photo']['name'];
        $pathInfo = pathinfo($uploadedFileName);
        
        $fileBaseName = $pathInfo['basename'];
        $fileName = $pathInfo['filename'];
        $dirName = $pathInfo['dirname'];
        $fileExtension = $pathInfo['extension'];
        $uniqueFile = $fileName.time().$dirName.$fileExtension; 
        // echo "<pre>";
        // print_r($uniqueFile);
        // die(); 

        $fileName = $_FILES['photo']['name'];
        $targetFile = $_FILES['photo']['tmp_name'];
        $docRoot = '/Projects/electronic_shop_php/';

        $destination = $_SERVER['DOCUMENT_ROOT'].$docRoot.'public/assets/upload/'.$uniqueFile;
        $is_fileUpload_succesfull = move_uploaded_file($targetFile,$destination);

        $data=[
            'name'          =>$name,
            'category_name' =>$category_name,
            'description'   =>$description,
            'price'         =>$price,
            'photo'         =>$uniqueFile
        ];
        $db = new Db;
        $db->connect();
        $sql = "INSERT INTO products (name,category_name, description,price,photo)
        VALUES (:name,:category_name, :description,:price,:photo)";
        $stmt = $db->prepareSql($sql);
        $stmt->execute($data);
        // Update Query lagbe
        session_start();
        $_SESSION['msg'] = "Succsessfully Inserted";

        header("Location: index.php");
    }
    
    public function show($id)
    {

        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM products WHERE id =$id");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }


    public function edit($id)
    {
        $id = $_GET['id'];
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM products WHERE id ='$id'");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }

    public function update($data)
    {
        $id   = $data['id'];
        $name           = $data['name'];
        $description    = $data['description'];
        $price          = $data['price'];

        $uploadedFileName = $_FILES['photo']['name'];
        $pathInfo = pathinfo($uploadedFileName);
        
        $fileBaseName = $pathInfo['basename'];
        $fileName = $pathInfo['filename'];
        $dirName = $pathInfo['dirname'];
        $fileExtension = $pathInfo['extension'];
        $uniqueFile = $fileName.time().$dirName.$fileExtension; 
        // echo "<pre>";
        // print_r($uniqueFile);
        // die(); 

        $fileName = $_FILES['photo']['name'];
        $targetFile = $_FILES['photo']['tmp_name'];
        $docRoot = '/Projects/electronic_shop_php/';

        $destination = $_SERVER['DOCUMENT_ROOT'].$docRoot.'public/assets/upload/'.$uniqueFile;
        $is_fileUpload_succesfull = move_uploaded_file($targetFile,$destination);

        $data=[
            'id'            =>$id,
            'name'          =>$name,
            'description'   =>$description,
            'price'         =>$price,
            'photo'         =>$uniqueFile
        ];
    
        $db = new Db;
        $db->connect();

        $sql = "UPDATE products SET id=:id, name=:name,description=:description,price=:price,photo=:photo WHERE id='$id'";
        $stmt = $db->prepareSql($sql);
        $stmt->execute($data);
        // Update Query lagbe
        session_start();
        $_SESSION['msg'] = "Succsessfully Updated";

        header("Location: index.php");
    }
    
    public function destroy($data)
    {
        $id = $data['id'];
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("DELETE from products WHERE id = '$id'");
        $sqlData->execute();
        
        session_start();
        $_SESSION['dlmsg'] = "Succsessfully Deleted";

        header("Location: index.php");
    }
    
}

?>