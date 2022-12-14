<?php
include_once('../../vendor/autoload.php');
use Supon\Product\Product;
use Supon\Category\Category;

session_start();

$users = new Product;
$result = $users->index();

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

    <div class="col-12 py-3 mb-5 table-responsive">
        <div>
            <a href="create.php" class="btn btn-success my-3">Create</a>
        </div>
        <hr>
        <table class="table table-striped mb-5 table-hover table-bordered table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Product Details</th>
                    <th>Product Price</th>
                    <th>Photo</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <?php
             $i = 0;
             foreach ($result as $data) { ?>

             <?php
            //  echo "<pre>";
            //  print_r($data['photo']);
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
                    <?php echo $data['category_name']?>
                </td>
                <td>
                    <?php echo $data['description']?>
                </td>
                <td>
                    <?php echo $data['price']?>
                </td>
                <td>
                    <img src="<?php echo '../../public/assets/upload/'.$data['photo'] ?>" width="70" height="60" alt=''>
                    <?php 
                    // echo $_SERVER['DOCUMENT_ROOT'].'/Projects/electronic_shop_php/public/assets/upload/'.$data['photo'];
                    // die();
                    
                    ?>
                </td>
                <td>
                    <?php echo $data['created_at']?>
                </td>
                <td>
                    <?php echo $data['updated_at']?>
                </td>
                <td>
                    <a href="show.php?id=<?php echo $data['id']?>" class="btn btn-primary">Show</a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']?>" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="" method="post" class="inset-block">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <button onclick="return confirm('Are you Sure');" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php include('../partials/inc/footer.php'); ?>