<?php

include_once('../../vendor/autoload.php');

use Supon\Category\Category;
use Supon\Product\Product;

$cat = new Category;
$categories = $cat->index();


$product = new Product;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $product->store($_POST);
}

?>

<?php include('../partials/inc/header.php'); ?>

<div>
    <a href="index.php" class="btn btn-success ms-4 px-4 my-3">List</a>
</div>
<div class="w-75 mx-auto">
    <form action="" method="post" enctype="multipart/form-data" class="shadow-lg p-5 rounded mb-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Product Name :</b></label>
            <input type="text" name="name" class="shadow-none form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Categories :</b></label>
            <select class="form-select shadow-none" name="category" aria-label="Default select example">
                <?php
            foreach($categories as $category){ ?>
                <option value="<?php echo $category['name']?>">
                    <?php echo $category['name'];?>
                </option>
                <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Product Details :</b></label>
            <input name="description" class="shadow-none form-control" id="exampleFormControlTextarea1"></input>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Product Prices :</b></label>
            <input name="price" class="shadow-none form-control" id="exampleFormControlTextarea1"></input>
        </div>
        <div class="mb-3">
            <label for="img"><b>Photo :</b></label><br>
            <input type="file" name="photo" id="img">
        </div>
        <div class="d-flex justify-content-end mb-5">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
    <?php include('../partials/inc/footer.php'); ?>