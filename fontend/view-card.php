<?php 

include_once('../vendor/autoload.php');
session_start();
use Supon\Product\Product;
// use Supon\Category\Category;

// $user = new Product;
// $id = $_GET['id'];
// $result = $user->show($id);
use Supon\Orders\Orders;

$users = new Orders;
$result = $users->index();

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $result->create($_POST);
//   }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $users->destroy($_POST);
}


?>

<?php include('./partials/inc/header.php')?>

<section class="container my-5">
    <div class="row">
        <div class="col-8 border-end bg-light">
            <div class="shadow-lg py-4">
                <table class="table table-striped mb-5 table-hover table-bordered table-sm text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>S No.</th>
                            <th>Images</th>
                            <th>Product_id</th>
                            <th>Category</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                      <tbody>
                        <?php
                        $i = 0;
                        $total = 0;
                        foreach ($result as $data){
                            // echo "<pre>";
                            // print_r($data);
                            // die();
                        $total += $data['subtotal'];
                    ?>
                        <tr>
                            <td>
                                <?php echo ++$i ?>
                            </td>
                            <td>
                                <img class="img-fluid" src="<?php echo '../public/assets/upload/'.$data['photo'] ?>" width="70"
                                height="70" alt="">
                            </td>
                            <td>
                                <?php echo $data['p_id'] ?>
                            </td>
                            <td>
                                <?php echo $data['category_id'] ?>
                            </td>
                            <td>
                                <?php echo $data['product_name'] ?>
                            </td>
                            <td>
                                <?php echo $data['quantity'] ?>
                            </td>
                            <td>
                                <?php echo $data['price'] ?>
                            </td>
                            <td>
                                <?php echo $data['subtotal'] ?>
                            </td>
                            <td>
                                <form action="" method="post" class="inset-block">
                                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                    <button onclick="return confirm('Are you Sure');"
                                        class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4 mt-3">
            <div class="w-75 border-end">
                <div class=" shadow-sm mt-5">
                    <h4 class="text-center pt-3">Checkout Summary</h4>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Subtotal :</span>
                        <span class="d-block"><b class="text-success">
                              <?php echo $total?>TK
                            </b></span>
                    </div>
                    <hr>
                    <?php
                    $charge = 100;
                    ?>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Shipping :</span>
                        <span class="d-block"><b class="text-success"><?php echo $charge?>TK</b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Total :</span>
                        <span class="d-block"><b class="text-success">
                            <?php echo $result = $total + $charge?>TK
                        </b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block"><b>Payable Total --</b></span>
                        <span class="d-block"><b class="text-success">
                            <?php echo $result = $total + $charge?>TK
                        </b></span>
                    </div>
                    <hr>
                    <div class="form-check d-flex justify-content-around bg-white mt-3">
                        <a href="checkout.php" class="btn btn-primary">PROCEED TO CHECKOUT</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./partials/inc/footer.php')?>

<a href="#" class="arrow"><i><img src="../public/assets/image/fontend/images/arrow.png" alt=""></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>