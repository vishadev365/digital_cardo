    <?php include ('include/header.php') ?> <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Roboto');

      body {
        font-family: 'Roboto', sans-serif;
      }

      * {
        margin: 0;
        padding: 0;
      }

      i {
        margin-right: 10px;
      }

      /*------------------------*/
      input:focus,
      button:focus,
      .form-control:focus {
        outline: none;
        box-shadow: none;
      }

      .form-control:disabled,
      .form-control[readonly] {
        background-color: #fff;
      }

      /*----------step-wizard------------*/
      .d-flex {
        display: flex;
      }

      .justify-content-center {
        justify-content: center;
      }

      .align-items-center {
        align-items: center;
      }

      /*---------signup-step-------------*/
      .bg-color {
        background-color: #333;
      }

      .signup-step-container {
        padding: 150px 0px;
        padding-bottom: 60px;
      }

      .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
      }

      .wizard>div.wizard-inner {
        position: relative;
        margin-bottom: 50px;
        text-align: center;
      }

      .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 75%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 15px;
        z-index: 1;
      }

      .wizard .nav-tabs>li.active>a,
      .wizard .nav-tabs>li.active>a:hover,
      .wizard .nav-tabs>li.active>a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
      }

      span.round-tab {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 16px;
        color: #0e214b;
        font-weight: 500;
        border: 1px solid #ddd;
      }

      span.round-tab i {
        color: #555555;
      }

      .wizard li.active span.round-tab {
        background: #0db02b;
        color: #fff;
        border-color: #0db02b;
      }

      .wizard li.active span.round-tab i {
        color: #5bc0de;
      }

      .wizard .nav-tabs>li.active>a i {
        color: #0db02b;
      }

      .wizard .nav-tabs>li {
        width: 25%;
      }

      .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: red;
        transition: 0.1s ease-in-out;
      }

      .wizard .nav-tabs>li a {
        width: 30px;
        height: 30px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        background-color: transparent;
        position: relative;
        top: 0;
      }

      .wizard .nav-tabs>li a i {
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
      }

      .wizard .nav-tabs>li a:hover {
        background: transparent;
      }

      .wizard .tab-pane {
        position: relative;
        padding-top: 20px;
      }

      .wizard h3 {
        margin-top: 0;
      }

      .prev-step,
      .next-step {
        font-size: 25px;
        font-style: normal;
        font-weight: 400;
        padding: 8px 24px;
        border: none;
        border-radius: 4px;
        margin-top: 30px;
        cursor: pointer;
      }

      /*.next-step{
         background-color: #0db02b;
    }*/
      .next-step {
        background: #636EE1;
        color: #fff;
      }

      .skip-btn {
        background-color: #cec12d;
      }

      .step-head {
        font-size: 20px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 20px;
      }

      .term-check {
        font-size: 14px;
        font-weight: 400;
      }

      .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 40px;
        margin-bottom: 0;
      }

      .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 40px;
        margin: 0;
        opacity: 0;
      }

      .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: 40px;
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 2;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
      }

      .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 38px;
        padding: .375rem .75rem;
        line-height: 2;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
      }

      .footer-link {
        margin-top: 30px;
      }

      .all-info-container {}

      .list-content {
        margin-bottom: 10px;
      }

      .list-content a {
        padding: 10px 15px;
        width: 100%;
        display: inline-block;
        background-color: #f5f5f5;
        position: relative;
        color: #565656;
        font-weight: 400;
        border-radius: 4px;
      }

      .list-content a[aria-expanded="true"] i {
        transform: rotate(180deg);
      }

      .list-content a i {
        text-align: right;
        position: absolute;
        top: 15px;
        right: 10px;
        transition: 0.5s;
      }

      .form-control[disabled],
      .form-control[readonly],
      fieldset[disabled] .form-control {
        background-color: #fdfdfd;
      }

      .list-box {
        padding: 10px;
      }

      .signup-logo-header .logo_area {
        width: 200px;
      }

      .signup-logo-header .nav>li {
        padding: 0;
      }

      .signup-logo-header .header-flex {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .list-inline li {
        display: inline-block;
      }

      .pull-right {
        float: right;
      }

      /*-----------custom-checkbox-----------*/
      /*----------Custom-Checkbox---------*/
      input[type="checkbox"] {
        position: relative;
        display: inline-block;
        margin-right: 5px;
      }

      input[type="checkbox"]::before,
      input[type="checkbox"]::after {
        position: absolute;
        content: "";
        display: inline-block;
      }

      input[type="checkbox"]::before {
        height: 16px;
        width: 16px;
        border: 1px solid #999;
        left: 0px;
        top: 0px;
        background-color: #fff;
        border-radius: 2px;
      }

      input[type="checkbox"]::after {
        height: 5px;
        width: 9px;
        left: 4px;
        top: 4px;
      }

      input[type="checkbox"]:checked::after {
        content: "";
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        transform: rotate(-45deg);
      }

      input[type="checkbox"]:checked::before {
        background-color: #18ba60;
        border-color: #18ba60;
      }

      @media (max-width: 767px) {
        .sign-content h3 {
          font-size: 40px;
        }

        .wizard .nav-tabs>li a i {
          display: none;
        }

        .signup-logo-header .navbar-toggle {
          margin: 0;
          margin-top: 8px;
        }

        .signup-logo-header .logo_area {
          margin-top: 0;
        }

        .signup-logo-header .header-flex {
          display: block;
        }
      }

      /*
    input, textarea{
         border: 1px solid gray !important;
    }*/
      .add_more {
        font-size: 25px;
        background: #636EE1;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 5px 10px 5px 10px;
        cursor: pointer;
      }

      .form-control {
        font-size: 25px;
        text-align: left;
        /*font-weight:600;*/
        border: none !important;
        outline: none !important;
        border-radius: 0 !important;
        border-bottom: 1px solid gray !important;
      }

      /*    .form-control:focus{
        border: 2px solid #03a8f45e !important;
    }*/
      .heading_dtl {
        font-size: 35px;
      }

      .number_count {
        font-size: 25px !important;
      }

      *::-webkit-input-placeholder {
        color: #D5D8DC !important;
      }

      *:-moz-placeholder {
        /* FF 4-18 */
        color: #D5D8DC !important;
        opacity: 1;
      }

      *::-moz-placeholder {
        /* FF 19+ */
        color: #D5D8DC !important;
        opacity: 1;
      }

      *:-ms-input-placeholder {
        /* IE 10+ */
        color: #D5D8DC !important;
      }

      *::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #D5D8DC !important;
      }

      *::placeholder {
        /* modern browser */
        color: #D5D8DC !important;
      }
    </style>
    <section class="signup-step-container">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="wizard">
              <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
                      <span class="round-tab">1 </span>
                      <i>Personal Details</i>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                      <span class="round-tab">2</span>
                      <i>Business Details</i>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
                      <span class="round-tab">3</span>
                      <i>Product / Service Details</i>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab">
                      <span class="round-tab">4</span>
                      <i>Gallary</i>
                    </a>
                  </li>
                </ul>
              </div>
              <form role="form" action="user_form_submit.php" method="POST" enctype='multipart/form-data' class="login-box">
                <div class="tab-content" id="main_form">
                  <!-- ============================Personal Details============================ -->
                  <div class="tab-pane active" role="tabpanel" id="step1">
                    <div class="text-center heading_dtl pb-4">Personal Details</div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Name </label>  -->
                          <input class="form-control name" type="text" name="name" placeholder="Name" required>
                          <span class="error_msg_name text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Email </label>  -->
                          <input class="form-control email" type="email" name="email" placeholder="Email" readonly="readonly" value="
                                                    <?php if(isset($email)){echo $email;} ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Phone No</label>  -->
                          <input class="form-control phone_no" type="number" name="phone_no" placeholder="Phone No" required>
                          <span class="error_msg_phone_no text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Whatsapp No </label>  -->
                          <input class="form-control whatsapp_no" type="number" name="whatsapp_no" placeholder="Whatsapp No" required>
                          <span class="error_msg_whatsapp_no text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <span class="error_msg text-danger"></span>
                    <ul class="list-inline pull-right">
                      <li>
                        <button type="button" class="default-btn next-step p_dtls">Continue to next step</button>
                      </li>
                    </ul>
                  </div>
                  <!-- ============================Business Details============================ -->
                  <div class="tab-pane" role="tabpanel" id="step2">
                    <div class="text-center heading_dtl pb-4">Business Details</div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Webite ( Optional )</label>  -->
                          <input type="text" class="form-control" name="website" placeholder="Webite ( Optional )">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label>Google Map Link ( Optional )</label>  -->
                          <input type="text" class="form-control" name="google_map_link" placeholder="Google Map Link ( Optional )">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <!-- <label>About Business</label>  -->
                          <textarea name="about_business" class="form-control about_business" required placeholder="About Business"></textarea>
                          <span class="error_msg_about_business text-danger"></span>

                        </div>
                      </div>
                    </div>
                    <ul class="list-inline pull-right">
                      <li>
                        <button type="button" class="default-btn prev-step">Back</button>
                      </li>
                      <!-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> -->
                      <li>
                        <button type="button" class="default-btn next-step">Continue</button>
                      </li>
                    </ul>
                  </div>
                  <!-- ============================Product / Service Details============================ -->
                  <div class="tab-pane" role="tabpanel" id="step3">
                    <div class="text-center heading_dtl pb-4">Product / Service Details</div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="row d-flex justify-content-around mb-5">
                          <div class="form-check form-check-inline">
                            <input class="form-control" type="radio" name="radio" id="inlineCheckbox1" value="product" checked>
                            <label class="form-check-label radio_name" for="inlineCheckbox1" style="font-size: 25px !important;">Product</label>
                          </div>
                          <!-- //radio -->
                          <div class="form-check form-check-inline">
                            <input class="form-control" type="radio" name="radio" id="inlineCheckbox2" value="service" style="font-size: 2.6em !important;">
                            <label class="form-check-label radio_name" for="inlineCheckbox2" style="font-size: 25px !important;">Service</label>
                          </div>
                          <!-- //radio -->
                        </div>
                        <!-- //row -->
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12 d-flex justify-content-end">
                            <button type="button" class="add_more btn-form">+ Add More</button>
                          </div>
                          <!-- //col-md-12 -->
                        </div>
                        <!-- //row -->
                      </div>
                      <div class="col-md-12">
                        <div class="multiple_add_more">
                          <h1 class="text-center number_count">1.</h1>
                          <div class="row">
                            <input type="hidden" class="count" name="count" value="1">
                            <div class="col-md-6 mt-3">
                              <!-- <label>Service Name</label>  -->
                              <input type="text" class="form-control service_name" name="service_name[]" placeholder="Service Name" required>
                              <span class="error_msg_service_name text-danger"></span>
                            </div>
                            <!-- //col-md-6 -->
                            <div class="col-md-6 mt-3">
                              <!-- <label>Image</label>  -->
                              <input type="file" class="service_image" name="service_image[]" placeholder="Image" style="font-size: 17px !important;" required>
                              <span class="error_msg_service_image text-danger"></span>
                              <!-- <input type="file" id="selectedFile" name="image[]" style="display: none;" /><input type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" /> -->
                            </div>
                            <!-- //col-md-6 -->
                          </div>
                          <!-- //row -->
                        </div>
                        <!-- //multiple_add_more -->
                      </div>
                    </div>
                    <ul class="list-inline pull-right">
                      <li>
                        <button type="button" class="default-btn prev-step">Back</button>
                      </li>
                      <!-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> -->
                      <li>
                        <button type="button" class="default-btn next-step ">Continue</button>
                      </li>
                    </ul>
                  </div>
                  <!-- ============================Gallary============================ -->
                  <div class="tab-pane" role="tabpanel" id="step4">
                    <div class="text-center heading_dtl pb-4">Chose upto 6 Image</div>
                    <div class="all-info-container">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 1.</label>
                            <input type="file" class="image1" name="image1" style="font-size: 17px !important;" required>
                              <span class="error_msg_image1 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 2.</label>
                            <input type="file" class="image2" name="image2" style="font-size: 17px !important;" required>
                              <span class="error_msg_image2 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 3.</label>
                            <input type="file" class="image3" name="image3" style="font-size: 17px !important;" required>
                              <span class="error_msg_image3 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                      </div>
                      <!-- //row -->
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 4.</label>
                            <input type="file" class="image4" name="image4" style="font-size: 17px !important;" required>
                              <span class="error_msg_image4 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 5.</label>
                            <input type="file" class="image5" name="image5" style="font-size: 17px !important;" required>
                              <span class="error_msg_image5 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label> 6.</label>
                            <input type="file" class="image6" name="image6" style="font-size: 17px !important;" required>
                              <span class="error_msg_image6 text-danger"></span>

                          </div>
                          <!-- // form-group -->
                        </div>
                        <!-- //col-md-4 -->
                      </div>
                      <!-- //row -->
                    </div>
                    <ul class="list-inline pull-right">
                      <li>
                        <button type="button" class="default-btn prev-step ">Back</button>
                      </li>
                      <li>
                        <button type="submit" class="default-btn next-step submit_f" name="submit">Submit</button>
                      </li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> <?php include ('include/footer.php') ?> <script type="text/javascript">
      //==============================validation============================
     

     $(document).on('click', '.submit_f', function() {

        var name = $('.name').val();
        var phone_no = $('.phone_no').val();
        var whatsapp_no = $('.whatsapp_no').val();
        var about_business = $('.about_business').val();
        var service_name = $('.service_name').val();
        var service_image = $('.service_image').val();

        var image1 = $('.image1').val();
        var image2 = $('.image2').val();
        var image3 = $('.image3').val();
        var image4 = $('.image4').val();
        var image5 = $('.image5').val();
        var image6 = $('.image6').val();
       
       if(name==''){
        $('.error_msg_name').html(' Name filed is empty..');
       }

       if(phone_no==''){
$('.error_msg_phone_no').html('Please enter phone number');

       }


if(whatsapp_no==''){
                  $('.error_msg_whatsapp_no').html('Please enter Whatsapp No');

       }


if(about_business==''){
        $('.error_msg_about_business').html('Please enter About Business');
       }


if(service_name==''){
        $('.error_msg_service_name').html('Please enter Service Name');
  
  }
if(service_image==''){
        $('.error_msg_service_image').html('Please uploade Service Image');
       }


       if(image1==''){
        $('.error_msg_image1').html('Please uploade  Image');
       }


       if(image2==''){
        $('.error_msg_image2').html('Please uploade  Image');
       }

       if(image3==''){
        $('.error_msg_image3').html('Please uploade  Image');
       }

       if(image4==''){
        $('.error_msg_image4').html('Please uploade  Image');
       }

       if(image5==''){
        $('.error_msg_image5').html('Please uploade  Image');
       }

       if(image6==''){
        $('.error_msg_image6').html('Please uploade  Image');
       }

       


     })



      //-------phone_no filed chk-------
      $(document).on('blur', '.phone_no', function() {
        var phone_no = $('.phone_no').val();
        $('.error_msg_phone_no').html('');
        if (phone_no == "") {
          $('.error_msg_phone_no').html('Please enter phone number');
          $('.phone_no').focus();
          return false;
        } else if (phone_no.length != 10) {
          $('.error_msg_phone_no').html('Please enter 10 digit phone number');
          $('.phone_no').focus();
          return false;
        } else {
          $('.phone_no').focusout();
        }
      })
      //-------whatsapp_no filed chk-------
      $(document).on('blur', '.whatsapp_no', function() {
        var whatsapp_no = $('.whatsapp_no').val();
        $('.error_msg_whatsapp_no').html('');
        if (whatsapp_no == "") {
          $('.error_msg_whatsapp_no').html('Please enter Whatsapp No');
          // $('.phone_no').focus();
          return false;
        } else {
          $('.whatsapp_no').focusout();
        }
      })







      // =====================step-wizard==========================
      $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();
        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
          var target = $(e.target);
          if (target.parent().hasClass('disabled')) {
            return false;
          }
        });
        $(".next-step").click(function(e) {
          var active = $('.wizard .nav-tabs li.active');
          active.next().removeClass('disabled');
          nextTab(active);
        });
        $(".prev-step").click(function(e) {
          var active = $('.wizard .nav-tabs li.active');
          prevTab(active);
        });
      });

      function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
      }

      function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
      }
      $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
      });
      //===============================add_more================
    var i=1;
    $(document).on('click','.add_more',function(){
    i++;
    $('.multiple_add_more').append('<h1 class="text-center number_count mt-2" style="transform: translateY(40%);">'+i+'.</h1>  '+

        '<div class="col-md-12">'+
         
    '</div><div class="row">'+
    '<div class="col-md-6 mt-3">'+


    '<input type="text" class="form-control" name="service_name[]" placeholder="Service Name" >'+
    '</div><!-- //col-md-6 -->'+

    '<div class="col-md-6 mt-3">'+


    '<input type="file" class="" name="service_image[]" placeholder="Image" style="font-size: 17px !important;" >'+
    '</div><!-- //col-md-6 -->'+

    '</div><!-- //row -->');

    $('.count').val(i);


    })

    </script>