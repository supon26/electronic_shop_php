<?php

include_once('../../vendor/autoload.php');
use Supon\Product\Product;
use Supon\Category\Category;


$cat = new Category;
$categories = $cat->index();


$user = new Product;
$id = $_GET['id'];
$result = $user->index();

$result = $user->edit('$id');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user->update($_POST);
}
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $user->store($_POST);
//   }

?>

<?php include('../partials/inc/header.php'); ?>
<div class="container border-top">
    <h2 class="py-2 text-center bg-primary text-white">Product Information</h2>
<div>
    <a href="index.php" class="btn btn-success px-4">List</a>
</div>
<div class="w-75 mx-auto mb-5">
    <form action="" method="post" enctype="multipart/form-data" class="shadow-lg p-5 rounded mb-5">
        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">
            <label for="exampleFormControlInput1" class="form-label"><b>Product Name :</b></label>
            <input type="text" name="name" value="<?php echo $result['name']?>" class="shadow-none form-control"
                value="" id="exampleFormControlInput1">
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
            <input type="text" name="description" value="<?php echo $result['description']?>"
                class="shadow-none form-control" value="" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Product Price :</b></label>
            <input type="text" name="price" value="<?php echo $result['price']?>" class="shadow-none form-control"
                value="" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <img src="<?php echo '../../public/assets/upload/'.$result['photo'] ?> " width="70" height="60"><br>
            <label for="img"><b>Photo :</b></label><br>
            <input type="file" name="photo" id="img">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
    <?php include('../partials/inc/footer.php'); ?>


