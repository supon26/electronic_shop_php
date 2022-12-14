<?php

namespace Supon\Category;

use Supon\Db;

class Category
{
    public function index()
    {
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM categories ");
        $sqlData->execute();
        $result = $sqlData->fetchAll();
        return $result;
    }
  

    public function store($data)
    {
        $name           = $data['name'];
        $description    = $data['description'];

        $data=[
            'name'          =>$name,
            'description'   =>$description,
        ];
        $db = new Db;
        $db->connect();
        $sql = "INSERT INTO categories (name, description)
        VALUES (:name, :description)";
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
        $sqlData = $db->prepareSql("SELECT * FROM categories WHERE id =$id");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }


    public function edit($id)
    {
        $id = $_GET['id'];
        $db = new Db;
        $db->connect();
        $sqlData = $db->prepareSql("SELECT * FROM categories WHERE id ='$id'");
        $sqlData->execute();
        $results = $sqlData->fetch();
        return $results;
    }

    public function update($data)
    {
        $id   = $data['id'];
        $name           = $data['cat_name'];
        $description    = $data['description'];

        $data=[
            'id'            =>$id,
            'name'          =>$name,
            'description'   =>$description,
        ];
    
        $db = new Db;
        $db->connect();

        $sql = "UPDATE categories SET id=:id, name=:name,description=:description WHERE id='$id'";
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
        $sqlData = $db->prepareSql("DELETE from categories WHERE id = '$id'");
        $sqlData->execute();
        
        session_start();
        $_SESSION['dlmsg'] = "Succsessfully Deleted";

        header("Location: index.php");
    }
    
}

?>