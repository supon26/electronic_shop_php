<?php 

include_once('../vendor/autoload.php');
session_start();
// use Supon\Users\Users;
use Supon\Orders\Orders;
use Supon\Billing_details\Billing_details;

$billing = new Billing_details;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $billing->create($_POST);
}


$users = new Orders;
$result = $users->index();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $users->destroy($_POST);
// }

?>

<?php include('./partials/inc/header.php')?>

<section class="container my-5">
    <div class="row">
        <div class="col-6 border-end bg-light">
            <div class="shadow-lg py-4">
                <h4 class="text-center pt-3">Billing Details</h4>
                <hr class="w-50 mx-auto">
                <div class="mx-auto px-5  rounded">
                    <div class="form-group">
                        <label class="form-label" for="name"><b>Country :</b></label>
                        <input type="text" class="form-control" id="name" name="country" value="Bangladesh">
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="form-label" for="name"><b>Full Name :</b></label>
                            <input type="text" class="form-control" id="name"
                                value="<?= $user_id = $_SESSION['authUser']['name'];?>" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone"><b>Phone Number :</b></label>
                            <input type="number" class="form-control" id="phone"
                                value="<?= $user_id = $_SESSION['authUser']['phone'];?>" name="phone">
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label" for="email"><b>Email Address :</b></label>
                            <input type="email" class="form-control"
                                value="<?= $user_id = $_SESSION['authUser']['email'];?>" id="email" name="email">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-6 mt-4">
            <div class="w-75 border-end ms-4">
                <div class="mt-5 shadow-sm ms-3">
                    <h4 class="text-center pt-3">Your Order</h4>
                    <hr>
                    <?php
                        $i = 0;
                        $total = 0;
                        foreach ($result as $data){
                            // echo "<pre>";
                            // print_r($data);
                            // die();
                        $total += $data['subtotal'];
                    ?>
                    <?php }?>
                    <?php
                    $charge = 100;
                    ?>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block"><b>Payable Total --</b></span>
                        <span class="d-block"><b class="text-success">
                                <?php echo $result = $total + $charge?>TK
                            </b></span>
                    </div>
                    <hr>
                    <div class="ms-2 bg-white mt-3 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" value="Instant Pay" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <small>Instant Pay</small>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Cash On Delivery" name="payment" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <small>Cash On Delivery</small>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-check d-flex justify-content-around bg-white mt-3">
                        <button type="submit" class="btn btn-primary">PLACE ORDER</button>
                    </div>
                    </form>
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