<?php

include_once('../../vendor/autoload.php');
use Supon\Category\Category;

$user = new Category;
$id = $_GET['id'];

$result = $user->edit("$id");
// print_r($result);die();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user->update($_POST);
}

?>

<?php include('../partials/inc/header.php'); ?>
<div class="container border border-3">
    <h2 class="py-2 text-center bg-primary text-white">Category Information</h2>
<div>
    <a href="index.php" class="btn btn-success px-4">List</a>
</div><hr>
<div class="w-75 mx-auto">
    <form action="" method="post" class="shadow-lg p-5 rounded">
        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">
            <label for="exampleFormControlInput1" class="form-label"><b>Catagory Name :</b></label>
            <input type="text" name="cat_name" value="<?php echo $result['name']?>" class="shadow-none form-control"
                value="Smart Phone" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Catagory Description :</b></label>
            <input type="text" name="description" value="<?php echo $result['description']?>"
                class="shadow-none form-control" value="Smart Description" id="exampleFormControlInput1">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
    <?php include('../partials/inc/footer.php'); ?>    