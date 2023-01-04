<?php 

include_once('../vendor/autoload.php');

use Supon\Product\Product;
use Supon\Category\Category;
use Supon\Orders\Orders;
use Supon\Users\Users;

$user = new Users;
$user->guard();

$user = new Product;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = $_SESSION['product_id'];
}

$result = $user->show($id);
$userId = $_SESSION['authUser']['id'];
$product = new Orders;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $product->create($_POST);
  }

?>

<?php include('./partials/inc/header.php')?>

<!-- ============ start =============== -->
<div class="container my-5">
    <!-- <a class="text-decoration-none" href="view-card.php"></a> -->
    <div class="row w-75 mx-auto shadow-lg">
        <div class="col-4 d-flex justify-content-center align-items-center border">
            <div class="">
                <img class="img-fluid" src="<?php echo '../public/assets/upload/'.$result['photo'] ?>" width=""
                    height="" alt="">
            </div>
        </div>
        <div class="col-8 bg-light border-start">
            <div class="ms-5 text-secondary">
                <h1 class="pt-3 pb-0">
                    <?php echo $result['name']?>
                </h1>
                <hr class="me-5">
                <p class="me-5">
                    <?php echo $result['title']?>
                </p>
                <hr class="me-5">
                <p class="me-5">
                    <?php echo $result['description']?>
                </p>
                <hr class="me-5">
                <p>TK:
                    <?php echo $result['price']?>
                </p>
                <hr class="me-5">
            </div>
            <form action="" method="post">
                <input type="hidden" name="p_id" id="" value="<?php echo $id?>">
                <input type="hidden" name="user_id" id="" value="<?php echo $userId ?>">
                
                <input type="hidden" name="photo" id="" value="<?php echo $result['photo']?>">
                <input type="hidden" name="name" id="" value="<?php echo $result['name']?>">
                <input type="hidden" name="category_id" id="" value="<?php echo $result['category_id']?>">
                <input type="hidden" name="description" id="" value="<?php echo $result['description']?>">
                <input type="hidden" name="price" id="" value="<?php echo $result['price']?>">
                <input type="hidden" name="subtotal">
                <label class="ms-5" for="qty"> Quantity :
                    <input type="number" id="qty" class="text-center"  style="width: 70px;" name="quantity" value="">
                </label>
                <div class="d-flex justify-content-end align-items-center me-3 mb-5 ">
                    <button class="btn btn-primary" type="submit">Add to Card</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- ============ end =============== -->

<?php include('./partials/inc/footer.php')?>

<a href="#" class="arrow"><i><img src="../public/assets/image/fontend/images/arrow.png" alt=""></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>