<?php

include_once('../../vendor/autoload.php');

use Supon\Category\Category;

$users = new Category;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $users->store($_POST);
}

?>

<?php include('../partials/inc/header.php'); ?>

<div>
    <a href="index.php" class="btn btn-success ms-4 px-4 my-3">List</a>
</div>
<div class="w-75 mx-auto">
    <form action="" method="post" class="shadow-lg p-5 rounded">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Catagory Name :</b></label>
            <input type="text" name="name" class="shadow-none form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Catagory Description :</b></label>
            <input name="description" class="shadow-none form-control" id="exampleFormControlTextarea1"></input>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
    <?php include('../partials/inc/footer.php'); ?>    
