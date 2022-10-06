<?php
include "./includes/header.php";
$sql = "SELECT * FROM orders INNER JOIN users ON orders.order_user_id = users.user_id ";
$result = mysqli_query($conn, $sql);
$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php
if (isset($_GET['do'])) {
    if ($_GET['do'] == 'arrive') {
        $id = $_GET['id'];
        $sql = "UPDATE orders SET order_status='arrived' WHERE order_id =$id";
        $result = mysqli_query($conn, $sql);
        redirect("manage_orders.php");
    }
    if ($_GET['do'] == 'deliver') {
        $id = $_GET['id'];
        $sql = "UPDATE orders SET order_status='on delevery' WHERE order_id =$id";
        $result = mysqli_query($conn, $sql);
        redirect("manage_orders.php");
    }
    if ($_GET['do'] == 'prepare') {
        $id = $_GET['id'];
        $sql = "UPDATE orders SET order_status='preparing' WHERE order_id =$id";
        $result = mysqli_query($conn, $sql);
        redirect("manage_orders.php");
    }
    if ($_GET['do'] == 'block') {
        $id = $_GET['id'];
        $sql = "UPDATE orders SET order_status='blocked' WHERE order_id =$id";
        $result = mysqli_query($conn, $sql);
        redirect("manage_orders.php");
    }
}
?>

<div class="card-header">
    <h4 class="card-title">Manage Orders</h4>
</div>
<div class="row"style="margin-left:0;margin-right:0;">
    <div class="col-lg-12" style=" margin-left:30px;margin-top: 25px; max-width:95%;">
        <div class="users-table table-wrapper">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr class="users-table-info">
                        <th>Order ID</th>
                        <th>Order User</th>
                        <th>Order User Gender</th>
                        <th>Order Detailes</th>
                        <th>Order Location</th>
                        <th>Order Mobile</th>
                        <th>Order date</th>
                        <th>Order total Amount</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $key => $order) { ?>
                    <tr>
                        <td><?php echo isset($order['order_id']) ? $order['order_id'] : ''; ?></td>
                        <td><?php echo isset($order['order_user_name']) ? $order['order_user_name'] : ''; ?></td>
                        <td><?php echo isset($order['user_gender']) ? $order['user_gender'] : ''; ?></td>
                        <td class="px-6 py-1 w-25 ">
                            <div class="text-sm text-gray-900 flex justify-center items-center w-75">
                                <?php echo $order["order_details"]; ?>
                            </div>
                        </td>
                        <td><?php echo isset($order['order_location']) ? $order['order_location'] : ''; ?></td>
                        <td><?php echo isset($order['order_mobile']) ? $order['order_mobile'] : ''; ?></td>
                        <td><?php echo isset($order['order_date']) ? $order['order_date'] : ''; ?></td>
                        <td><?php echo isset($order['order_total']) ? $order['order_total'] : ''; ?></td>
                        <td><?php echo isset($order['order_status']) ? $order['order_status'] : ''; ?></td>
                        <td class="row">
                            <div class="d-grid gap-2 d-md-block status">
                                <div class="btn btn-warning btn-sm active"><a
                                        href="manage_orders.php?do=prepare&id=<?php echo isset($order['order_id']) ? $order['order_id'] : ''; ?>">preparing</a>
                                </div><br>
                                <div class="btn btn-secondary btn-sm"><a
                                        href="manage_orders.php?do=deliver&id=<?php echo isset($order['order_id']) ? $order['order_id'] : ''; ?>">on
                                        deliver</a></div><br>
                                <div class="btn  btn-success btn-sm"> <a
                                        href="manage_orders.php?do=arrive&id=<?php echo isset($order['order_id']) ? $order['order_id'] : ''; ?>">arrive</a>
                                </div><br>
                                <div class="btn  btn-danger btn-sm"><a
                                        href="manage_orders.php?do=block&id=<?php echo isset($order['order_id']) ? $order['order_id'] : ''; ?>">block</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>