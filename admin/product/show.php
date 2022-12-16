<?php 

include_once('../../vendor/autoload.php');
use Supon\Product\Product;
use Supon\Category\Category;

$user = new Product;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('../partials/inc/header.php'); ?> 
<div class="container border-top">
    <h2 class="py-2 text-center bg-primary text-white">Product Information</h2>
<div class="row">
    <div>
        <a href="index.php" class="btn btn-success px-4">List</a>
    </div>
    <div class="text-center w-50 mx-auto mb-5 shadow-lg"><hr>
        <p class="text-center text-primary"><strong><u>Product Details</u></strong>
        </p><hr>
        <p class="text-center"><strong>Product Name :</strong>
            <?=$result['name']?>
        </p><hr>
        <p class="text-center"><strong>Product Details :</strong>
            <?=$result['description']?>
        </p><hr>
        <p class="text-center"><strong>Product Price :</strong>
            <?=$result['price']?>
        </p><hr>
        <p class="text-center"><strong>Product Photo :</strong>
        <img src="<?php echo '../../public/assets/upload/'.$result['photo'] ?>" width="70" height="60" alt=''>
        </p><hr>
    </div>
    <?php include('../partials/inc/footer.php'); ?>   