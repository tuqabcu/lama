<?php 
include './header.php';
session_start();  // Start the session to access session variables

if (isset($_SESSION["userid"])) {
    $userId = $_SESSION["userid"];  // Retrieve the user ID from the session
} else {
    // Handle case when userId is not set (e.g., redirect to login)
    header("Location: login.php");
    exit();
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-info mx-auto" style="width:70%;">
            <div class="card-header" style="background-color: #2D4B69;">
                <h3 class="card-title">Clinical History</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="clinical_history.php" enctype="multipart/form-data">
                <div class="card-body">
                    
                    <!-- Hidden input to send the user ID -->
                    <input type="hidden" name="user_id" value="<?php echo $userId; ?>">

                    <div class="form-group row">
                        <label for="typeOfCancerAndAgeOfDiagnosis" class="col-sm-4 col-form-label">Type of cancer and age of diagnosis</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="typeOfCancerAndAgeOfDiagnosis" name="typeOfCancerAndAgeOfDiagnosis" required>
                                <option value="Breast Cancer">Breast Cancer</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="otherTypesOfCancer" class="col-sm-4 col-form-label">Other types of cancer</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="otherTypesOfCancer" name="otherTypesOfCancer" required>
                                <option value="Breast Cancer">Breast Cancer</option>
                                <option value="Ovarian Cancer">Ovarian Cancer</option>
                                <option value="Pancreatic Cancer">Pancreatic Cancer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="singleBreastBilateral" class="col-sm-4 col-form-label">Single breast/Bilateral</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="singleBreastBilateral" name="singleBreastBilateral" required>
                                <option value="single breast">Single breast</option>
                                <option value="bilateral">Bilateral</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="histologyReport" class="col-sm-4 col-form-label">Histology report</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="histologyReport" name="histologyReport" required>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info" style="background-color: #2D4B69;" id="btn_save_ch" name="btn_save_ch">Save</button>
                    <a href="./home.php" class="btn btn-default float-right">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once './db/clinical_history.php';

// Check if form is submitted
if (isset($_POST["btn_save_ch"])) {
    // Get form data from POST
    $userId = $_POST["user_id"];  // User ID from the hidden input field
    $typeOfCancerAndAgeOfDiagnosis = $_POST["typeOfCancerAndAgeOfDiagnosis"];
    $otherTypesOfCancer = $_POST["otherTypesOfCancer"];
    $singleBreastBilateral = $_POST["singleBreastBilateral"];

    // Handle file upload
    if (isset($_FILES["histologyReport"]) && $_FILES["histologyReport"]["error"] == 0) {
        $targetDir = "uploads/"; // Directory for uploads
        $targetFile = $targetDir . basename($_FILES["histologyReport"]["name"]);
        move_uploaded_file($_FILES["histologyReport"]["tmp_name"], $targetFile);
        $histologyReport = $targetFile; // Store the file path
    } else {
        $histologyReport = null; // No file uploaded
    }

    // Insert data into the database using the session user ID
    $result = insertClinicalHistory($typeOfCancerAndAgeOfDiagnosis, $otherTypesOfCancer, $singleBreastBilateral, $histologyReport, $userId);

    if ($result) {
        // Redirect after successful insert
        echo '<script>localStorage.setItem("link4Changed", "true");</script>';
        echo '<script>window.location="clinical_history.php";</script>';
    } else {
        // Handle error if needed
        echo '<div class="alert alert-danger">There was an error saving the data.</div>';
    }
}
?>

<?php include './footer.php'; ?>
