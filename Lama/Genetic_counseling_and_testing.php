<?php include './header.php'?>

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
            <div class="mx-auto" style="width:70%;background-color: #2D4B69;padding: 3px; border-radius: 10px;">
            <h3 class="text-center" style="color:#fff">Genetic Counseling and Testing</h3>
            </div>
            <br/>
            <div class="mx-auto" style="width:70%">
              <h5>Please read the following text or watch the video, then click <b>Next</b> button</h5>
            </div>
            <br/>
            <div class="card card-info mx-auto" style="width:70%;">
              <div class="card-header p-0 pt-1 border-bottom-0" style="background-color: #2D4B69;">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-text-tab" data-toggle="pill" href="#custom-tabs-three-text" role="tab" aria-controls="custom-tabs-three-text" aria-selected="true">Text</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-video-tab" data-toggle="pill" href="#custom-tabs-three-video" role="tab" aria-controls="custom-tabs-three-video" aria-selected="false">Video</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-text" role="tabpanel" aria-labelledby="custom-tabs-three-text-tab">
                    "Welcome to our genetic counseling and testing journey, where we embark on a path to unravel the mysteries of our genetic makeup. Genetic counseling serves as a guiding light, offering expert support to individuals and families as they navigate the intricate landscape of gene information. This journey is a profound exploration into understanding genetic risks, making informed decisions, and empowering individuals with the knowledge to shape their health destinies.
                    <br/><br/>
                    Genetic testing, a pivotal component of this journey, delves into the very fabric of our DNA, identifying specific changes that hold the key to our unique genetic code. Genetic counseling and testing empower individuals with information and the ability to make choices that align with their genetic profiles. From informed health decisions to the possibility of preventive measures, our genetic journey opens doors to personalized treatments tailored to individual characteristics.
                    <br/><br/>
                      The genetic counseling journey unfolds in three main steps:
                      <br/>
                      <ol>
                      <li>Individuals delve into their medical and family history, learning about genetics, eligibility criteria, and understanding their risk for genetic conditions.</li>
                      <li>Should they undergo testing, they gain insights into the specific procedures and potential outcomes and engage in a consent process.</li>
                      <li>After the test, discussions ensue about the results, decoding their meanings and devising plans based on newfound genetic insights, all with the option for follow-up sessions if needed.</li>
                      </ol>
                    <br/>
                    These initial steps are guided by a decision-aid system, ensuring individuals have all the information necessary to make educated choices about genetic testing. The actual testing process and the subsequent steps are seamlessly facilitated through the expertise of their physicians.
                    <br/><br/>
                    Join us on this transformative journey, where genetic counseling and testing converge to illuminate the path to better health and well-being. Let's embark on a voyage of discovery, where knowledge is power, and our genetic makeup holds the key to informed choices and a healthier tomorrow."
                    <br/><br/>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-video" role="tabpanel" aria-labelledby="custom-tabs-three-video-tab">
                  <video width="100%" height="100%" controls>
                    <source src="videos/Genetic Counseling and Testing.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  </div>
                </div>
                <div class="card-footer">
                  <b>Please Click 'Next' once you're done reading the text or watching the video.</b>
                  <button type="button" class="btn btn-info float-right" style="background-color: #2D4B69;" id="btn_next_v1">Next</button>
                </div>
              </div>
              <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(btn_next_v1).click(function(){
      
      // Save the change locally
      localStorage.setItem('link2Changed', 'true');
      
      // Move to the next page
      window.location = "Genetic_Testing_Journey.php";
    });
  </script>

<?php include './footer.php'?>
