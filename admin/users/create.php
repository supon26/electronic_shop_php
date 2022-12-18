<?php

include_once('../../vendor/autoload.php');

use Supon\Users\Users;

$users = new Users;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $users->store($_POST);

}

?>

<?php include('../partials/inc/header.php'); ?>
<div class="container border border-3 mt-2">
    <h2 class="py-2 text-center bg-primary text-white">Users Information</h2>
    <div>
        <a href="index.php" class="btn btn-success px-4">List</a>
    </div>
    <hr>
    <div class="row mb-5">
        <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
            <div class="col-md-6 mx-auto p-3 shadow-lg rounded">
                <div class="form-group">
                    <label class="form-label" for="name"><b>Full Name :</b></label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone"><b>Phone Number :</b></label>
                    <input type="number" class="form-control" id="phone" name="number">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email"><b>Email Address :</b></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="inputPassword5" class="form-label"><b>Password :</b></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                        name="password">
                </div>
                <div class="mb-3">
                    <label for="img"><b>Photo :</b></label><br>
                    <input type="file" name="photo" id="img">
                </div>
                <div class="pt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary w-25">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
    <?php include('../partials/inc/footer.php'); ?>