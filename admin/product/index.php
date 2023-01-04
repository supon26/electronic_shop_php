<?php
include_once('../../vendor/autoload.php');
use Supon\Product\Product;
use Supon\Category\Category;

session_start();

$users = new Product;
$result = $users->index();

// echo "<pre>";
//         print_r($result);
//         die(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $users->destroy($_POST);
}

?>

<?php include('../partials/inc/header.php'); ?>
<div class="row">
    <?php 
        if (isset($_SESSION['msg'])) { ?>
    <div class="alert alert-primary text-center" role="alert">
        <?php echo $_SESSION['msg']; ?>
    </div>
    <?php session_destroy();  ?>
    <?php } ?>
    <?php if (isset($_SESSION['dlmsg'])) { ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo $_SESSION['dlmsg']; ?>
    </div>
    <?php session_destroy();  ?>
    <?php } ?>
    <div class="container border-top">
    <h2 class="py-2 text-center bg-primary text-white">Product Information</h2>
    <div class="col-12 table-responsive mb-5">
        <div>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
        <hr class="my-0">
        <table class="table table-striped mb-5 table-hover table-bordered table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <?php
             $i = 0;
             foreach ($result as $data) { ?>

             <?php
            //  echo "<pre>";
            //  print_r($data);
            //  die();
             ?>
            <tr>
                <td>
                    <?php echo ++$i?>
                </td>
                <td>
                    <?php echo $data['name']?>
                </td>
                <td>
                    <?php echo $data['title']?>
                </td>
                <td>
                    <?php echo $data['description']?>
                </td>
                <td>
                    <?php echo $data['price']?>
                </td>   
                <td>
                    <img src="<?php echo '../../public/assets/upload/'.$data['photo'] ?>" width="70" height="60" alt=''>
                </td>
                <td>
                    <a href="show.php?id=<?php echo $data['p_id']?>" class="btn btn-primary">Show</a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $data['p_id']?>" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="" method="post" class="inset-block">
                        <input type="hidden" name="id" value="<?php echo $data['p_id'] ?>">
                        <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php include('../partials/inc/footer.php'); ?>