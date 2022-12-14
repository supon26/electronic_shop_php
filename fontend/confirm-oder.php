
<?php include('./partials/inc/header.php')?>

    <section class="container my-5 bg-light">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-door-fill"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Shoping Card</li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav><hr>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <div class="alert alert-primary">
            <span class="text-center">ইএমআই এর ক্ষেত্রে অবশ্যই ক্রেতার নির্দিষ্ট ব্যাংক এর ক্রেডিট কার্ড
                থাকতে হবে।</span>
            <button class="btn btn-close" data-bs-dismiss="alert" type="button"></button>
        </div>

        <div>
            <div class="row row-cols-1 row-cols-md-3 d-flex justify-content-end g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <form class="row g-3">
                                <h3><i class="bi bi-1-square-fill"></i> Customer information</h3>
                                <hr>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">First Name</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="First Name *">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Last Name</label>
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Last Name *">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Address *">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Number</label>
                                    <input type="number" class="form-control" id="inputAddress2"
                                        placeholder="Telephone *">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputAddress2"
                                        placeholder="Email *">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity"
                                        placeholder="City *">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Zone</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Dhaka City</option>
                                        <option>Chittagong City</option>
                                        <option>Rangpur City</option>
                                        <option>Barisal City</option>
                                        <option>Sylect City</option>
                                        <option>Rajshahi City</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <textarea name="" placeholder="Massage" id="" cols="35"
                                        rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card h-50">
                        <div class="card-body">
                            <h3 class="card-title"><i class="bi bi-2-square-fill"></i> Payment Method</h3>
                            <hr>
                            <p class="card-text">Select a payment method</p>
                                <input type="radio" id="html" name="fav_language" value="Cash on Delivery">
                                 <label for="html">Cash on Delivery</label><br>
                                 <input type="radio" id="css" name="fav_language" value="POS on Delivery">
                                <label for="css">POS on Delivery</label><br>
                                 <input type="radio" id="javascript" name="fav_language" value="Online Payment">
                                 <label for="javascript">Online Payment</label><br>
                                 <p><b>We Accepted : </b></p><hr>
                                 <h3>
                                    <i class="bi bi-alipay"></i>
                                    <i class="bi bi-credit-card-2-front-fill"></i>
                                    <i class="bi bi-wallet-fill"></i>
                                    <i class="bi bi-currency-exchange"></i>
                                    <i class="bi bi-currency-exchange"></i>
                                    <i class="bi bi-currency-bitcoin"></i>
                                    <i class="bi bi-cash-coin"></i>
                                 </h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-50">
                        <div class="card-body">
                            <h3 class="card-title"><i class="bi bi-3-square-fill"></i> Delivery Method</h3>
                            <hr>
                            <p class="card-text">Select a delivery method</p>
                                <input type="radio" id="html" name="fav_language" value=" Home Delivery - 60৳">
                                 <label for="html"> Home Delivery - 60৳</label><br>
                                 <input type="radio" id="css" name="fav_language" value="Store Pickup - 0৳">
                                <label for="css">Store Pickup - 0৳</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer bg-light">
            <a href="./index.php">
              <button type="button" class="btn btn-primary text-center" data-bs-dismiss="modal">Confirm-Order</button>
            </a>
        </div>
    </section>

    <?php include('./partials/inc/footer.php')?>

    <a href="#" class="arrow"><i><img src="../public/assets/image/fontend/images/arrow.png" alt=""></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>