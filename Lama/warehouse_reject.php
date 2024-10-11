<?php 
include './header.php';
require_once './db/warehouse.php';
if(isset($_GET["id"]))
$_SESSION["rejid"] = $_GET["id"];
?>

<div style="padding:8px" id="offerDiv">
<?php 

    if($_SESSION["roleid"] == 1)
    $groupid = 0;
    else
    $groupid = getGroupId($_SESSION["userid"]); 

?>

<center>
<br/>
<h2>Reject Item</h2>
<br/>
    <form action="warehouse_reject.php" method="post">
        <textarea name="notes" class="form-control" style="width:40%" rows="5"></textarea>
        <br/>
        <input type="submit" value="Reject" class="btn btn-danger" 
        name="subrej" style="width:20%" />
    </form>
</center>

</div>

<?php
    if(isset($_POST["subrej"])){
        reject_item($_POST["notes"], $_SESSION["rejid"]);
        echo '<script>window.location="warehouse_inputs.php";</script>';
    }
?>


<?php include './footer.php'?>