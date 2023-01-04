<?php
include_once('../vendor/autoload.php');
use Supon\Users\Users;


$users = new Users;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $users->login($_POST);
  }

?>


<?php include('./partials/inc/header.php')?>

<div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Welcome Back!</h3>
        </div>
        <div class="col-md-7 py-3 py-md-0" id="side2">
            <h3 class="text-center">Account login</h3><br>
            <div class="mx-auto p-3 shadow-lg rounded">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-label" for="email"><b>Email Address :</b></label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pass"><b>Password :</b></label>
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>
                    <div class="pt-2 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary w-25">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- newslater -->
<div class="container" id="newslater" style="margin-top: 100px;">
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