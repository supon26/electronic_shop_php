<?php
include_once('../vendor/autoload.php');

use Supon\Product\Product;
use Supon\Category\Category;

session_start();
$users = new Product;
$results = $users->index();

?>

<!DOCTYPE html>
<html lang="en">

<?php include('./partials/inc/header.php')?>
<!-- home content -->
<section class="home">
    <div class="content">
        <h1> <span>Electronic Products</span>
            <br>
            Up To <span id="span2">50%</span> Off
        </h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, saepe.
            <br>Lorem ipsum dolor sit amet consectetur.
        </p>
        <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
        <img src="../public/assets/image/fontend/images/background.png" alt="">
    </div>
</section>
<!-- home content -->

<!-- product cards -->
<div class="container" id="product-cards">
    <h1 class="text-center" id="pro">PRODUCTS</h1>
    <div class="row" style="margin-top: 30px;">
        <?php
        $i = 0;
        foreach($results as $data){ ?>
        <?php $_SESSION['product_id'] = $data['p_id']?>
        <?php
        ?>
        <div class="col-md-3 py-3 py-md-0" <?php echo ++$i;?>>
            <a class="text-decoration-none" href="product-details.php?id=<?php echo $data['p_id']?>">
                <div class="card shadow-lg">
                    <img src="<?php echo '../public/assets/upload/'.$data['photo'] ?>" width="" height="" alt="">
                    <div class="card-body">
                        <h3 class="text-center">
                            <?php echo $data['name']?>
                        </h3>
                        <p class="text-center">
                            <?php echo $data['description']?>
                        </p>
                        <div class="star text-center">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h2>
                            <?php echo $data['price']?? '' ?>
                            <span>
                                <button class="fa-solid fa-cart-shopping btn-card" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </button>
                            </span>
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>

    </div>

    <!-- <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card shadow-lg">
                    <img src="../public/assets/image/fontend/images/w1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Smart Watch</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <div class="star text-center">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h2>$50.60 <span>
                                <button class="fa-solid fa-cart-shopping btn-card" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </button>
                            </span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card shadow-lg">
                    <img src="../public/assets/image/fontend/images/pcm1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">PC Moniter</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <div class="star text-center">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h2>$600 <span>
                                <button class="fa-solid fa-cart-shopping btn-card" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </button>
                            </span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card shadow-lg">
                    <img src="../public/assets/image/fontend/images/phone1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">iPhone x</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <div class="star text-center">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h2>$500 <span>
                                <button class="fa-solid fa-cart-shopping btn-card" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </button>
                            </span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card shadow-md">
                    <img src="../public/assets/image/fontend/images/h1.png" alt="">
                    <div class="card-body">
                        <h3 class="text-center">Headphone</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <div class="star text-center">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                        </div>
                        <h2>$60 <span>
                                <button class="fa-solid fa-cart-shopping btn-card" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </button>
                            </span></h2>
                    </div>
                </div>
            </div>
        </div> -->
</div>
<!-- product cards -->


<!-- other cards -->
<div class="container" id="other-cards">
    <div class="row">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card shadow-lg">
                <img src="../public/assets/image/fontend/images/c1.png" alt="">
                <div class="card-img-overlay">
                    <h3>Best Laptop</h3>
                    <h5>Latest Collection</h5>
                    <p>Up To 50% Off</p>
                    <button id="shopnow">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <div class="card shadow-lg">
                <img src="../public/assets/image/fontend/images/c2.png" alt="">
                <div class="card-img-overlay">
                    <h3>Best Headphone</h3>
                    <h5>Latest Collection</h5>
                    <p>Up To 50% Off</p>
                    <button id="shopnow">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- other cards -->

<!-- banner -->

<!-- banner -->

<!-- product cards -->

<!-- product cards -->

<!-- offer -->
<div class="container" id="offer">
    <div class="row">
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
        </div>
    </div>
</div>
<!-- offer -->

<!-- newslater -->
<div class="container" id="newslater">
    <h3 class="text-center">Subscribe To The Electronic Shop For Latest upload.</h3>
    <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
    </div>
</div>
<!-- newslater -->

<?php include('./partials/inc/footer.php')?>

<a href="#" class="arrow"><i><img src="../public/assets/image/fontend/images/arrow.png" alt=""></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>