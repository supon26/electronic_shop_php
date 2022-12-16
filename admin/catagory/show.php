<?php 

include_once('../../vendor/autoload.php');
use Supon\Category\Category;

$user = new Category;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('../partials/inc/header.php'); ?>
<div class="container border-top">
    <h2 class="py-2 text-center bg-primary text-white">Category Information</h2>
<div class="row">
    <div>
        <a href="index.php" class="btn btn-success px-4">List</a>
    </div>
    <div class="shadow-lg text-center w-50 mx-auto mb-5"><br>
        <p class="text-center text-primary"><strong><u>Category Details </u></strong>
        </p><hr>
        <p class="text-center"><strong>Catagory Name :</strong>
            <?=$result['name']?>
        </p><hr>
        <p class="text-center"><strong>Catagory Description :</strong>
            <?=$result['description']?>
        </p><hr>
    </div>
    <?php include('../partials/inc/footer.php'); ?>   