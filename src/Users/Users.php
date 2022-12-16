<?php

namespace Supon\Users;

use Supon\Db;


class Users
{
    public function index()
    {
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM users ");
        $sqlData->execute();
        $result = $sqlData->fetchAll();
        return $result;
    }
  

    public function store($data)
    {

        $name           = $data['name'];
        $phone          = $data['number'];
        $email          = $data['email'];
        $password       = $data['password'];

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

        $destination = $_SERVER['DOCUMENT_ROOT'].$docRoot.'public/assets/user-image/'.$uniqueFile;
        $is_fileUpload_succesfull = move_uploaded_file($targetFile,$destination);

        $data=[
            'name'          =>$name,
            'phone'         =>$phone,
            'email'         =>$email,
            'password'      =>$password,
            'photo'         =>$uniqueFile
        ];
        $db = new Db;
        $db->connect();
        $sql = "INSERT INTO users (name,phone, email,password,photo)
        VALUES (:name,:phone, :email,:password,:photo)";
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
        $sqlData = $db->prepareSql("SELECT * FROM users WHERE id =$id");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }


    public function edit($id)
    {
        $id = $_GET['id'];
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM users WHERE id ='$id'");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }

    public function update($data)
    {
        $id             = $data['id'];
        $name           = $data['name'];
        $phone          = $data['number'];
        $email          = $data['email'];
        $password       = $data['password'];

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

        $destination = $_SERVER['DOCUMENT_ROOT'].$docRoot.'public/assets/user-image/'.$uniqueFile;
        $is_fileUpload_succesfull = move_uploaded_file($targetFile,$destination);

        $data=[
            'id'            =>$id,
            'name'          =>$name,
            'phone'         =>$phone,
            'email'         =>$email,
            'password'      =>$password,
            'photo'         =>$uniqueFile
        ];
    
        $db = new Db;
        $db->connect();

        $sql = "UPDATE users SET id=:id, name=:name,phone=:phone,email=:email,password=:password,photo=:photo WHERE id='$id'";
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
        $sqlData = $db->prepareSql("DELETE from users WHERE id = '$id'");
        $sqlData->execute();
        
        session_start();
        $_SESSION['dlmsg'] = "Succsessfully Deleted";

        header("Location: index.php");
    }
    
}

?>