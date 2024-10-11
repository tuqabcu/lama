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
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card card-info mx-auto" style="width:70%;">
              <div class="card-header" style="background-color: #2D4B69;">
                <h3 class="card-title">Patient Consent Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="consent_form.php" enctype="multipart/form-data">
                <div class="card-body">
                
                Please download the <a href="videos/Informed Consent for Genetic Testing.docx" download>consent form</a>, filled it and upload it using the file selector below

                <br/><br/>

                  <div class="form-group row">
                    <label for="signedConsentForm " class="col-sm-4 col-form-label">Signed consent form </label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" id="signedConsentForm" name="signedConsentForm" rows="4">
                    </div>
                  </div>

                  <!-- Hidden input to pass the userId -->
                  <input type="hidden" name="user_id" value="<?php echo $userId; ?>">

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" style="background-color: #2D4B69;" id="btn_upload" name="btn_upload">Upload</button>
                  <a href="./home.php" class="btn btn-default float-right">Reject</a>
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
require_once './db/consent_form.php';

// Check if form is submitted
if (isset($_POST["btn_upload"])) {
  // Get form data
  $userId = $_POST["user_id"];  // User ID from the hidden input field

  // Handle file upload
  if (isset($_FILES["signedConsentForm"]) && $_FILES["signedConsentForm"]["error"] == 0) {
    $targetDir = "uploads/"; // Directory for uploads
    $targetFile = $targetDir . basename($_FILES["signedConsentForm"]["name"]);
    move_uploaded_file($_FILES["signedConsentForm"]["tmp_name"], $targetFile);
    $signedConsentForm = $targetFile; // Store the file path
  } else {
    $signedConsentForm = null; // No file uploaded
  }

  // Insert data into the database
  $result = insertConsentForm($signedConsentForm, $userId);

  if ($result) {
    // Redirect after successful insert
    echo '<script>localStorage.setItem("link10Changed", "true");</script>';
    echo '<script>window.location="assessment.php";</script>';
  } else {
    // Handle error if needed
    echo '<div class="alert alert-danger">There was an error saving the data.</div>';
  }
}
?>

<?php include './footer.php'?>
