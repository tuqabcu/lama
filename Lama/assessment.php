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
                <h3 class="card-title">Patient Assessment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="assessment.php" enctype="multipart/form-data">
                <div class="card-body">
                
                Please take a moment to complete these 15 multiple-choice questions designed to assess your understanding of genetic testing, including its benefits, risks, limitations, and uncertainties. These questions are based on the information shared during the educational session you attended. Your insights are incredibly important to us and will greatly aid our efforts. Once you have answered all the questions, you will receive a final score out of 10. We appreciate your time and participation in this process. Thank you.

                <br/><br/>

                          <!-- Hidden input field to send the userId -->
          <input type="hidden" name="user_id" value="<?php echo $userId; ?>">

                  
        <p><b>1- What is the primary purpose of genetic testing?</b></p>
        <input type="radio" name="q1" value="1" /> To predict future diseases <br/>
        <input type="radio" name="q1" value="2" /> To make more informed healthcare decisions <br/>
        <input type="radio" name="q1" value="3" /> To change one’s genetic makeup <br/>
        <input type="radio" name="q1" value="4" /> To find a cure for all hereditary diseases <br/>
        <hr/>

        <p><b>2- Identifying gene mutation(s) in a family helps other blood relatives to:</b></p>
        <input type="radio" name="q2" value="1" /> Ignore their health screenings <br/>
        <input type="radio" name="q2" value="2" /> Determine if they share the same hereditary cancer risks <br/>
        <input type="radio" name="q2" value="3" /> Avoid talking to a healthcare professional <br/>
        <input type="radio" name="q2" value="4" /> Guarantee they will not develop cancer <br/>
        <hr/>

        <p><b>3- A negative result in genetic testing means:</b></p>
        <input type="radio" name="q3" value="1" /> You are immune to cancer <br/>
        <input type="radio" name="q3" value="2" /> You cannot pass the tested mutation to your children <br/>
        <input type="radio" name="q3" value="3" /> You no longer need medical check-ups <br/>
        <input type="radio" name="q3" value="4" /> All of the genes in your body are healthy <br/>
        <hr/>

        <p><b>4- Which of the following is a potential risk of genetic testing?</b></p>
        <input type="radio" name="q4" value="1" /> Increased physical fitness <br/>
        <input type="radio" name="q4" value="2" /> Emotional distress from the results <br/>
        <input type="radio" name="q4" value="3" /> Immediate cure of detected conditions <br/>
        <input type="radio" name="q4" value="4" /> Enhanced memory skills <br/>
        <hr/>

        <p><b>5- Genetic testing can influence:</b></p>
        <input type="radio" name="q5" value="1" /> Only your past medical history <br/>
        <input type="radio" name="q5" value="2" /> Your lifestyle choices and preventive measures <br/>
        <input type="radio" name="q5" value="3" /> The genetic makeup of your ancestors <br/>
        <input type="radio" name="q5" value="4" /> Your ability to learn new languages <br/>
        <hr/>

        <p><b>6- The complexity of genetic information highlights the importance of:</b></p>
        <input type="radio" name="q6" value="1" /> Avoiding all medical advice <br/>
        <input type="radio" name="q6" value="2" /> Clear communication between healthcare providers and individuals <br/>
        <input type="radio" name="q6" value="3" /> Keeping the results secret from your family <br/>
        <input type="radio" name="q6" value="4" /> Relying solely on online research for decisions <br/>
        <hr/>

        <p><b>7- What does a Variant of Uncertain Significance (VUS) indicate?</b></p>
        <input type="radio" name="q7" value="1" /> A definite increase in cancer risk <br/>
        <input type="radio" name="q7" value="2" /> A clear path to treatment <br/>
        <input type="radio" name="q7" value="3" /> The genetic change’s impact on cancer risk is unknown <br/>
        <input type="radio" name="q7" value="4" /> That further genetic testing is unnecessary <br/>
        <hr/>

        <p><b>8- Incidental Findings from genetic testing might:</b></p>
        <input type="radio" name="q8" value="1" /> Have no health implications <br/>
        <input type="radio" name="q8" value="2" /> Provide additional information not related to the initial test purpose <br/>
        <input type="radio" name="q8" value="3" /> Decrease the need for further investigation <br/>
        <input type="radio" name="q8" value="4" /> Only relate to hereditary cancers <br/>
        <hr/>

        <p><b>9- What is autosomal dominant inheritance?</b></p>
        <input type="radio" name="q9" value="1" /> A condition where both parents must carry a mutated gene <br/>
        <input type="radio" name="q9" value="2" /> A trait passed only through the maternal line <br/>
        <input type="radio" name="q9" value="3" /> Needing only one copy of a mutated gene from one parent to inherit a condition <br/>
        <input type="radio" name="q9" value="4" /> A trait that skips generations <br/>
        <hr/>

        <p><b>10- How are mutations detected in genetic testing?</b></p>
        <input type="radio" name="q10" value="1" /> By guessing based on family history <br/>
        <input type="radio" name="q10" value="2" /> Sequencing to read the exact order of DNA <br/>
        <input type="radio" name="q10" value="3" /> Using standard blood tests only <br/>
        <input type="radio" name="q10" value="4" /> Through physical examinations <br/>
        <hr/>

        <p><b>11- A positive genetic test result means:</b></p>
        <input type="radio" name="q11" value="1" /> A mutation associated with increased risk for hereditary cancer was identified <br/>
        <input type="radio" name="q11" value="2" /> No mutations were found <br/>
        <input type="radio" name="q11" value="3" /> The results are inconclusive <br/>
        <input type="radio" name="q11" value="4" /> You are healthy and have no genetic risks <br/>
        <hr/>

        <p><b>12- If you test negative for a known mutation in your family, you:</b></p>
        <input type="radio" name="q12" value="1" /> Have a higher genetic risk than the general population <br/>
        <input type="radio" name="q12" value="2" /> May have the same genetic risks as others in the general population <br/>
        <input type="radio" name="q12" value="3" /> Will develop the disease later in life <br/>
        <input type="radio" name="q12" value="4" /> Have a 100% chance of passing the mutation to your children <br/>
        <hr/>

        <p><b>13- What does an uncertain result in genetic testing imply?</b></p>
        <input type="radio" name="q13" value="1" /> The genetic change is definitively linked to cancer risk <br/>
        <input type="radio" name="q13" value="2" /> No further testing is required <br/>
        <input type="radio" name="q13" value="3" /> It is not known if the change is linked to cancer risk <br/>
        <input type="radio" name="q13" value="4" /> You are free from any hereditary cancer risk <br/>
        <hr/>

        <p><b>14- Why is clear communication important in the context of genetic testing?</b></p>
        <input type="radio" name="q14" value="1" /> It has no real importance <br/>
        <input type="radio" name="q14" value="2" /> It ensures patients fully understand their risks and options <br/>
        <input type="radio" name="q14" value="3" /> It is only necessary for doctors to understand <br/>
        <input type="radio" name="q14" value="4" /> It makes genetic testing faster <br/>
        <hr/>

        <p><b>15- Engaging in genetic counseling is crucial to:</b></p>
        <input type="radio" name="q15" value="1" /> Ignore the genetic testing results <br/>
        <input type="radio" name="q15" value="2" /> Make choices aligned with your values and preferences <br/>
        <input type="radio" name="q15" value="3" /> Avoid discussing your health with professionals <br/>
        <input type="radio" name="q15" value="4" /> Ensure you never have to deal with health issues <br/>
        <hr/>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" style="background-color: #2D4B69;" id="btn_finish" name="btn_finish">Finish</button>
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
  <!-- <script>
    $(btn_upload).click(function(){
      
      // Save the change locally
      localStorage.setItem('link11Changed', 'true');
      
      // Move to the next page
      window.location = "assessment.php";
    });
  </script> -->

  <?php
  require_once './db/assessment.php';

  // Check if form is submitted
  if (isset($_POST["btn_finish"])) {
    // Get form data
    $userId = $_POST["user_id"];  // User ID from the hidden input field
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];
    $q11 = $_POST["q11"];
    $q12 = $_POST["q12"];
    $q13 = $_POST["q13"];
    $q14 = $_POST["q14"];
    $q15 = $_POST["q15"];

    // Insert data into the database
    $result = insertPatientAssessment($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$userId);

    if ($result) {
      // Redirect after successful insert
      echo '<script>localStorage.setItem("link11Changed", "true");</script>';
      echo '<script>window.location="assessment.php";</script>';
    } else {
      // Handle error if needed
      echo '<div class="alert alert-danger">There was an error saving the data.</div>';
    }
  }
?>

<?php include './footer.php'?>




