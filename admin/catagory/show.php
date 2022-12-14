<?php 

include_once('../../vendor/autoload.php');
use Supon\Category\Category;

$user = new Category;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('../partials/inc/header.php'); ?>
<div class="row">
    <div>
        <a href="index.php" class="btn btn-success my-3">List</a>
    </div>
    <div class="bg-light text-center border w-50 mx-auto mb-5">
        <p class="border text-center bg-success text-white"><strong>Serial No :</strong>
            <?=$result['id']?>
        </p>
        <p class="border text-center bg-success text-white"><strong>Catagory Name :</strong>
            <?=$result['name']?>
        </p>
        <p class="border text-center bg-success text-white"><strong>Catagory Description :</strong>
            <?=$result['description']?>
        </p>
    </div>
    <?php include('../partials/inc/footer.php'); ?>   