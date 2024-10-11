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
            <h3 class="text-center" style="color:#fff">Genetic Testing Journey - DAS</h3>
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
                  Embark on our comprehensive genetic testing journey through our Decision Aid System, which is designed to educate and empower you during counseling sessions. We'll start by collecting vital personal information, including ID, MRN, name, date of birth, gender, and marital status. Explore your personal clinical history, focusing on cancer type and age of diagnosis, with additional details for breast cancer patients, including a request for the histology report. Delve into your family pedigree across generations, ensuring accurate information. If you meet the testing criteria, you'll proceed to an educational session that covers genetic basics and discusses the advantages and disadvantages of the test. The consent process allows you to agree and schedule further steps or delay testing until you're ready. Our Chatbot, proficient in answering frequently asked questions, ensures you have the necessary information. In cases where it can't provide answers, your queries will be directed to healthcare providers, contributing to Chatbot’s knowledge base. This seamless process is designed to guide you through the genetic testing journey, facilitating informed and confident decision-making.
                    <br/><br/>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-video" role="tabpanel" aria-labelledby="custom-tabs-three-video-tab">
                  <video width="100%" height="100%" controls>
                    <source src="videos/Genetic Testing Journey_ Decision Aid System.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  </div>
                </div>
                <div class="card-footer">
                  <b>Please Click 'Next' once you're done reading the text or watching the video.</b>
                  <button type="button" class="btn btn-info float-right" style="background-color: #2D4B69;" id="btn_next_v2">Next</button>
                </div>
              </div>
              <!-- /.card -->

    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(btn_next_v2).click(function(){
      
      // Save the change locally
      localStorage.setItem('link3Changed', 'true');
      
      // Move to the next page
      window.location = "personal_info.php";
    });
  </script>

<?php include './footer.php'?>
