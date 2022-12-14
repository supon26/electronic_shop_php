<?php 

include_once('../vendor/autoload.php');

use Supon\Product\Product;
use Supon\Category\Category;

$user = new Product;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('./partials/inc/header.php')?>

<section class="container my-5">
    <div class="row">
        <div class="col-7 border-end bg-light">
            <div class="d-flex justify-content-between ps-3 pe-3 shadow-lg bg-light mb-5">
                <p class="pt-3"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Select All (2 Items)</p>
                <p class="pt-3">Your Total: <b>1000Tk</b></p>
                <p>
                    <?php echo $result['name']?>
                </p>
            </div>
            <div class="shadow-lg py-4">
                <div class="bg-white d-flex justify-content-around align-items-center">
                    <div>
                        <img class="img-fluid" src="<?php echo '../public/assets/upload/'.$result['photo'] ?>"
                            width="70" height="60" alt="">
                    </div>
                    <div>
                        <span>
                            <?php echo $result['name']?>
                        </span><br>
                        <span><i class="fa-solid fa-trash"></i></span><br>
                        <small class="text-danger">Only 4 copies available</small>
                    </div>
                    <div>
                        <div class="btn-toolbar justify-content-between" role="toolbar"
                            aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary">2</button>
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p><b>Tk.
                                <?php echo $result['price']?>
                            </b></p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="./index.php">
                            <button class="btn btn-outline-primary">Oder as a Gift</button>
                        </a>
                    </div>
                    <div>
                        <a href="./index.php">
                            <button class="btn btn-primary">Place Order</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="w-75 border-end">
                <div class=" shadow-sm">
                    <h4 class="text-center pt-3">Checkout Summary</h4>
                    <hr>
                    <select id="inputState" class="form-select text-center">
                        <option selected>Dhaka City</option>
                        <option>Chittagong City</option>
                        <option>Rangpur City</option>
                        <option>Barisal City</option>
                        <option>Sylect City</option>
                        <option>Rajshahi City</option>
                    </select>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Subtotal</span>
                        <span class="d-block"><b class="text-success">
                                <?php echo $result['price']?>TK
                            </b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Shipping</span>
                        <span class="d-block"><b class="text-success">100TK</b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block">Total</span>
                        <span class="d-block"><b class="text-success">
                                <?php echo $result['price']?>TK
                            </b></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around bg-white mt-3">
                        <span class="d-block"><b>Payable Total</b></span>
                        <span class="d-block"><b class="text-success">1000TK</b></span>
                    </div>
                    <hr>
                    <div class="form-check d-flex justify-content-around bg-white mt-3">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gift Wrap for Tk. 20
                            </label>
                        </div>
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>