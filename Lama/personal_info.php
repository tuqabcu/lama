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

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card card-info mx-auto" style="width:70%;">
      <div class="card-header" style="background-color: #2D4B69;">
        <h3 class="card-title">Personal Information</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="post" action="">
        <div class="card-body">

          <!-- Hidden input field to send the userId -->
          <input type="hidden" name="user_id" value="<?php echo $userId; ?>">

          <div class="form-group row">
            <label for="pid" class="col-sm-4 col-form-label">ID</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pid" name="pid" placeholder="ID" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="mrn" class="col-sm-4 col-form-label">MRN</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="mrn" name="mrn" placeholder="MRN" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="nm" class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nm" name="name" placeholder="Name" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="dob" class="col-sm-4 col-form-label">Date of Birth</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
            <div class="col-sm-8">
              <select class="form-control" id="gender" name="gender" required>
                <option value="m">Male</option>
                <option value="f">Female</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="ms" class="col-sm-4 col-form-label">Marital status</label>
            <div class="col-sm-8">
              <select class="form-control" id="ms" name="ms" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Engaged">Engaged</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="ancestry" class="col-sm-4 col-form-label">Ancestry</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="ancestry" name="ancestry" rows="4"></textarea>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info" style="background-color: #2D4B69;" name="submit_personal_info">Save</button>
          <a href="./home.php" class="btn btn-default float-right">Cancel</a>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
</div>
<!-- /.content-wrapper -->

<?php
  require_once './db/personal_information.php';

  // Check if form is submitted
  if (isset($_POST["submit_personal_info"])) {
    // Get form data
    $userId = $_POST["user_id"];  // User ID from the hidden input field
    $pid = $_POST["pid"];
    $mrn = $_POST["mrn"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $ms = $_POST["ms"];
    $ancestry = $_POST["ancestry"];

    // Insert data into the database (Update your function to accept userId)
    $result = insertPersonalInfo($pid, $mrn, $name, $dob, $gender, $ms, $ancestry, $userId);

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

<?php include './footer.php'?>
