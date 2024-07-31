<?php
    include_once("includes/load.php");
    include_once("layouts/newheader.php");
?>
<?php
$year= date('Y');
$month=date('m');
$sales= monthlySales($year, $month);
?>
<div class="prdctdiv">
    <?php echo display_msg($msg); ?>
    <h3>Monthly Sales</h3>
    <table>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
             <?php foreach ($sales as $sale):?>
        <tr>
            <td class="text-center"><?php echo count_id();?></td>
            <td><?php echo remove_junk($sale['name']); ?></td>
            <td class="text-center"><?php echo (int)$sale['qty']; ?></td>
            <td class="text-center"><?php echo remove_junk($sale['total_saleing_price']); ?></td>
        </tr>
             <?php endforeach;?>
</div>
<?php include_once('layouts/newfooter.php'); ?>