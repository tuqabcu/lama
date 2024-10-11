<?php 
include './header.php';
require_once './db/warehouse.php';

?>

<div style="padding:8px" id="offerDiv">
<?php 

    if($_SESSION["roleid"] == 1)
    $groupid = 0;
    else
    $groupid = getGroupId($_SESSION["userid"]); 

?>

<br/>
<h2>Warehouse Transactions</h2>
<br/>

<table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Qty</th>
            <th>Type</th>
            <th>Approved</th>
            <th>Date</th>
            <th>Notes</th>
        </tr>
        <?php 
            $rs = show_transactions();
            while($row = $rs->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$row["ExternalItemId"] . '</td>';
                echo '<td>'.$row["ItemName"] . '</td>';
                echo '<td>'.$row["BrandId"] . '</td>';
                echo '<td>'.$row["qty"] . '</td>';
                echo '<td>'.$row["type"] . '</td>';
                echo '<td>'.$row["approved"] . '</td>';
                echo '<td>'.$row["trans_date"] . '</td>';
                echo '<td>'.$row["notes"] . '</td>';
                echo '</tr>';
            }
        ?>
</table>


</div>



<?php include './footer.php'?>

