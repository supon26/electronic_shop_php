<?php

include_once('../../vendor/autoload.php');
use Supon\Category\Category;

session_start();
$users = new Category;
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

    <div class="container border border-3">
    <h2 class="py-2 text-center bg-primary text-white">Category Information</h2>
    <div class="col-12  table-responsive fixed">
        <div>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
        <hr>
        <table class="table table-striped table-hover mb-5 table-bordered table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <?php
             $i = 0;
             foreach ($result as $data) { ?>
            <tr>
                <td>
                    <?php echo ++$i?>
                </td>
                <td>
                    <?php echo $data['name']?>
                </td>
                <td>
                    <?php echo $data['description']?>
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
