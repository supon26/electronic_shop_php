<?php 

include_once('../../vendor/autoload.php');
use Supon\Users\Users;

$user = new Users;
$id = $_GET['id'];
$result = $user->show($id);

?>

<?php include('../partials/inc/header.php'); ?>
<div class="container border-top">
    <h2 class="py-2 text-center bg-primary text-white">Users Information</h2>
<div class="row">
    <div>
        <a href="index.php" class="btn btn-success px-4">List</a>
    </div>
    <div class="shadow-lg text-center w-50 mx-auto mb-5"><br>
        <p class="text-center text-primary"><strong><u>Users Details </u></strong>
        </p><hr>
        <p class="text-center">User Name :
            <b><?=$result['name']?></b>
        </p><hr>
        <p class="text-center">Phone Number :
            <b><?=$result['phone']?></b>
        </p><hr>
        <p class="text-center">Email Address :
            <b><?=$result['email']?></b>
        </p><hr>
        <p class="text-center">Password :
            <b><?=$result['password']?></b>
        </p><hr>
        <p class="text-center"><strong>Product Photo :</strong>
            <img src="<?php echo '../../public/assets/user-image/'.$result['photo'] ?>" width="70" height="60" alt=''>
        </p><hr>
    </div>
    <?php include('../partials/inc/footer.php'); ?>   