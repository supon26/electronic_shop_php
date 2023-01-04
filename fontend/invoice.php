<?php 

include_once('../vendor/autoload.php');

session_start();
use Supon\Orders\Orders;
use Supon\Billing_details\Billing_details;

$billing = new Billing_details;

$result = $billing->index();

$users = new Orders;
$item = $users->index();

?>

<!doctype html>
<html lang="en">
<?php include('./partials/inc/pdf-head.php')?>

<body>
    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default invoice" id="invoice">
                    <div class="panel-body">
                        <div class="invoice-ribbon">
                            <div class="ribbon-inner">PAID</div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4 top-left">

                                <nav class="navbar navbar-expand-lg" id="navbar">
                                    <div class="container-fluid w-50">
                                        <a class="navbar-brand" href="index.php" id="logo"><span
                                                id="span1">E</span>Lectronic
                                            <span>Shop</span></a>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-4 top-middle">
                                <!-- <h3>Electronic Shop</h3> -->
                            </div>
                            <?php foreach($result as $data)?>
                            <div class="col-sm-4 top-right">
                                <h3 class="marginright">INVOICE-#
                                    <?php echo $data['id'];?>
                                </h3>

                                <span class="marginright">
                                    <?php echo $data['created_at'];?>
                                </span>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 from">
                                <p class="lead marginbottom">From : Electronic Shop</p>
                                <p>Address: House-35,Road-10,Sector-10,Uttara,Dhaka.</p>
                                <!-- <p>House-35,Road-10,Sector-10,Uttara,Dhaka.</p> -->
                                <p>Phone: 01608637314</p>
                                <p>Email: e.Supon@gmail.com</p>
                            </div>

                            <div class="col-sm-4 to">
                                <p class="lead marginbottom">To :<strong>
                                        <?php echo $data['name'];?>
                                    </strong></p>
                                <p>Phone:
                                    <?php echo $data['phone'];?>
                                </p>
                                <p>Email:
                                    <?php echo $data['email'];?>
                                </p>

                            </div>
                            <?php
                                 $i = 0;
                                $total = 0;
                                foreach ($item as $data)
                                $total += $data['subtotal'];
                            ?>
                            <div class="col-sm-4 text-right payment-details">
                                <p class="lead marginbottom payment-info">Payment details</p>
                                <p>Date:
                                    <?php echo $data['created_at'];?>
                                </p>

                                <p>Total Amount:
                                    <?php echo $item = $total + 100?>TK
                                </p>
                            </div>

                        </div>

                        <div class="row table-row">
                            <table class="table table-striped mb-5 table-hover table-bordered table-sm text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        // $i = 0;
                                        // $total = 0;
                                        // foreach ($item as $data){
                                        // $total += $data['subtotal'];
                                    ?>
                                    <?php
                                        $charge = 100;
                                     ?>
                                    <tr>
                                        <td>
                                            <?php echo ++$i ?>
                                        </td>
                                        <td>
                                            <?php echo $data['product_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['quantity'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['price'] ?>
                                        </td>
                                        <td>
                                            <?php echo $total?>TK
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="row">
                            <div class="col-md-6 margintop">
                                <p class="lead marginbottom">THANK YOU!</p>

                                <!-- <a href="./pdfgenerator.php" class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</a> -->
                            </div>
                            <?php         
                            $subtotal = $data['subtotal'];
                            $charge = 100;
                            ?>
                            <div class="col-md-6 text-right pull-right invoice-total" style="padding-left: 400px;">
                                <p>Subtotal :
                                    <?php echo $total;?> BDT
                                </p>
                                <p>Shipping Charge :
                                    <?php echo $charge;?> BDT
                                </p>
                                <p>Total :
                                    <?php echo $total + $charge;?> BDT
                                </p>
                            </div>
                            <div>
                                <a href="thank.php" class="btn btn-primary">Payment Done.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>