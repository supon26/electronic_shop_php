<?php 

include_once('../vendor/autoload.php');

use Supon\Product\Product;
use Supon\Category\Category;

$user = new Product;
$id = $_GET['id'];
$result = $user->show($id);

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
                    <?php echo $result['description']?>
                </p>
                <hr class="me-5">
                <p>TK:
                    <?php echo $result['price']?>
                </p>
                <hr class="me-5">
            </div>
            <div class="d-flex justify-content-end align-items-center me-3 mb-5 ">
                <a href="view-card.php?id=<?php echo $result['id']?>" class="btn btn-outline-success shadow-none">Buy
                    Now</a>
                <a href="confirm-oder.php" class="btn btn-primary shadow-none">Add to Card</a>
            </div>
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