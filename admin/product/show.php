<?php 

include_once('../../vendor/autoload.php');
use Supon\Product\Product;
use Supon\Category\Category;

$user = new Product;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('../partials/inc/header.php'); ?> 
<div class="row">
    <div>
        <a href="index.php" class="btn btn-success my-3">List</a>
    </div>
    <div class="bg-light text-center border w-50 mx-auto mb-5">
        <p class="border text-center bg-secondary text-white"><strong>Serial No :</strong>
            <?=$result['id']?>
        </p>
        <p class="border text-center bg-secondary text-white"><strong>Product Name :</strong>
            <?=$result['name']?>
        </p>
        <p class="border text-center bg-secondary text-white"><strong>Product Details :</strong>
            <?=$result['description']?>
        </p>
        <p class="border text-center bg-secondary text-white"><strong>Product Price :</strong>
            <?=$result['price']?>
        </p>
        <p class="border text-center bg-secondary text-white"><strong>Product Photo :</strong>
        <img src="<?php echo '../../public/assets/upload/'.$result['photo'] ?>" width="70" height="60" alt=''>
        </p>
    </div>
    <?php include('../partials/inc/footer.php'); ?>   