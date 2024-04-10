@extends('website.layouts.master')

@section('content')


<section class="container-fluid bg-clr">
  <div class="container pt-50" id="career">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-50">
          <h2 class="title"><span>CAREER </span></h2>
        </div>
      </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success" role="alert" id="success-alert">
      {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger" role="alert" id="error-alert">
      {{ session('error') }}
    </div>
    @endif

    <script>
    $(document).ready(function() {
      // Show success message for 3 seconds
      $("#success-alert").fadeTo(3000, 500).slideUp(500, function() {
        $("#success-alert").slideUp(500);
      });
      // Show error message for 3 seconds
      $("#error-alert").fadeTo(3000, 500).slideUp(500, function() {
        $("#error-alert").slideUp(500);
      });
    });
    </script>

    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="career mt-3">
          <div class="career-img">
            <img src="{{asset('img/career/career1.png')}}" alt="">
          </div>
          <div class="">
            <div class="career-content">
              <a href="#" data-toggle="modal" type="button" data-target="#myModal29" class="btn"
                aria-expanded="true">Internship</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="career mb-5 mt-3">
          <div class="career-img">
            <img src="{{asset('img/career/career2.png')}}" alt="">
          </div>
          <div class="">
            <div class="career-content">
              <a href="#" data-toggle="modal" type="button" data-target="#myModal30" class="btn"
                aria-expanded="true">SCT Business Recruitment</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="career mb-5 mt-3">
          <div class="career-img">
            <img src="{{asset('img/career/career3.png')}}" alt="">
          </div>
          <div class="">
            <div class="career-content">
              <a href="#" data-toggle="modal" type="button" data-target="#myModal31" class="btn"
                aria-expanded="true">Job Vacancy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--====================== Modal======================== -->
<!-- modal1 start -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal29">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Internship Form</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <form id="internship_form" action="{{route('internship_form_submit')}}" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name"><b>Full Name :</b></label>
              <input type="text" class="form-control txtname1" name="name" id="name" placeholder="Enter your full name"
                required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="email"><b>Email :</b></label>
              <input type="email" class="form-control" name="email" id="email"
                placeholder="Enter your Email addres abc@xyz.com" required="required">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="mobile"><b>Mobile Number :</b></label>
              <input type="tel" class="form-control txtnum1" name="mobile" id="mobile"pattern="^(\+\d{1,3}[- ]?)?\d{10}$"
                placeholder="Enter your mobile number" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="qualification"><b>Qualification :</b></label>
              <input type="text" class="form-control" name="qualification" id="qualification"
                placeholder="Enter your Qualification" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="address"><b>Address :</b></label>
            <textarea class="form-control" rows="5" name="address" id="address"
              placeholder="Type Your address Here ...." required="required"></textarea>
          </div>
          <div class="form-group">
            <label><b>Upload Resume :</b></label>
            <input type="file" class="form-control-file" name="resume" id="resume"
              onchange="getConvertinternship_form(this)" required="required">
            <!-- <input type="text" class="form-control-file" name="resume" id="resume"  required="required"> -->
          </div>
          <!-- <center>
                                             <div class="form-group">
                                             <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                             <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                             <div class="help-block with-errors"></div>
                                                </div>
                                         </center> -->
          <div class="text-center">
            <!-- <a href="#"> -->
            <input type="submit" class="btn btn-primary " />
            <!-- <input type="button" value="Submit" class="p_modal_btn"> -->
            <!-- </a> -->
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- model1 end -->

<!-- modal2 start -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal30">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">SCT Business Recruitment Form</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <div class="container">
          <form id="distributor_form" method="post" action="{{route('frontdistributorregistration')}}" enctype="multipart/form-data">
            <div>
              <div class="text-center">
                <h3 class="title" style="color: black;">Personal Details :</h3>
              </div>
              <!-- <form method="post"> -->
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label><b>First Name :</b></label>
                  <input type="text" class="form-control txtname1" name="fname" id="fname"
                    placeholder="Enter Your First Name" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label><b>Middel Name :</b></label>
                  <input type="text" class="form-control txtname1" name="mname" id="mname"
                    placeholder="Enter Your Middel Name" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label><b>Last Name :</b></label>
                  <input type="text" class="form-control txtname1" name="lname" id="lname"
                    placeholder="Enter Your Last Name" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="mobno"><b>Mobile Number :</b></label>
                  <input type="tel" class="form-control txtnum1" name="phone" id="phone"
                    placeholder="Enter Your Mobile Number" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label for="mobno1"><b>Alternate Mobile Number :</b></label>
                  <input type="tel" class="form-control txtnum1" name="alternate_mobile" id="alternate_mobile"
                    placeholder="Enter Your Alternate Mobile Number" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label for="email20"><b>Email :</b></label>
                  <input type="email" class="form-control" name="email" id="email"
                    placeholder="Enter Your Email Address" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="state"><b>State :</b></label>
                  <select class="custom-select my-1 mr-sm-2 personal_state" id="state" name="state" required="required">
                    <option selected>Choose Your State</option>
                    <?php foreach ($statelist as $key => $statelist_data) {?>
                    <option value="<?php echo $statelist_data['location_id']; ?>"><?php echo $statelist_data['name']; ?>
                    </option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="district"><b>District :</b></label>
                  <select class="custom-select my-1 mr-sm-2 personal_dist" id="district" name="district"
                    required="required">

                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="taluka"><b>Taluka :</b></label>
                  <select class="custom-select my-1 mr-sm-2 personal_taluka" id="taluka" name="taluka"
                    required="required">

                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="village"><b>Village :</b></label>
                  <select class="custom-select my-1 mr-sm-2" id="city" name="city" required="required">

                  </select>
                </div>
              </div>
              <!-- </form> -->
            </div>
            <br>
            <div>
              <div class="text-center">
                <h3 class="title" style="color: black;">Businees Details :</h3>
              </div>
              <!-- <form method="post"> -->
              <div class="form-group">
                <label for="textadd1"><b>Address of where to start :</b></label>
                <textarea class="form-control" id="textadd1" rows="2" name="business_address" id="business_address"
                  placeholder="Enter Your Address Details Here...." required="required"></textarea>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="state1"><b>State :</b></label>
                  <select class="custom-select my-1 mr-sm-2 business_state" name="business_state" id="business_state"
                    required="required">
                    <option selected>Choose Your State</option>
                    <?php foreach ($statelist as $key => $statelist_data) {?>
                    <option value="<?php echo $statelist_data['location_id']; ?>"><?php echo $statelist_data['name']; ?>
                    </option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="district1"><b>District :</b></label>
                  <select class="custom-select my-1 mr-sm-2 business_district" name="business_district"
                    id="business_district" required="required">

                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="taluka1"><b>Taluka :</b></label>
                  <select class="custom-select my-1 mr-sm-2 business_taluka" name="business_taluka" id="business_taluka"
                    required="required">

                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="village1"><b>Village :</b></label>
                  <select class="custom-select my-1 mr-sm-2" id="business_city" name="business_city"
                    required="required">

                  </select>
                </div>
              </div>
              <!-- </form> -->
            </div>
            <br>
            <div>
              <div class="text-center">
                <h3 class="title" style="color: black;">Required Document :</h3>
              </div>
              <!-- <form method="post"> -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Upload Aadhar Card (Front Side) :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" name="aadhar_card_image_front"
                    id="aadhar_card_image_front" onchange="getDistributor_aadhar_card_image_front(this)"
                    required="required">
                </div>
                <div class="form-group col-md-6">
                  <label><b>Upload Aadhar Card (Back Side) :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" name="aadhar_card_image_back" id="aadhar_card_image_back"
                    onchange="getDistributor_aadhar_card_image_back(this)" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Upload PAN Card :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" id="pan_card" name="pan_card"
                    onchange="getDistributor_pan_card(this)" required="required">
                </div>
                <div class="form-group col-md-6">
                  <label><b>Upload Shop ACT /NOC/ RENT Agreement :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" id="shop_act_image"
                    onchange="getDistributor_shop_act_image(this)" name="shop_act_image" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Upload Light Bill :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" name="light_bill"
                    onchange="getDistributor_light_bill(this)" id="light_bill" required="required">
                </div>
                <div class="form-group col-md-6">
                  <label><b>Upload SCT Product Purchase Bill :</b></label>
                  <div class="feedback" style="font-size: 13px;">

                  </div>
                  <input type="file" class="form-control-file" id="product_purchase_bill"
                    onchange="getDistributor_product_purchase_bill(this)" name="product_purchase_bill"
                    required="required">
                </div>
              </div>
              <!-- </form> -->
            </div>
            <br>
            <div>
              <div class="text-center">
                <h3 class="title" style="color: black;">Necessary Questions :</h3>
              </div>
              <!-- <form method="post"> -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>* WHERE YOU CAN OPEN THE SHOP ?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <select class="custom-select my-1 mr-sm-2" name="where_open_shop" id="where_open_shop"
                    required="required">
                    <option selected>Choose option...</option>
                    <option value="1">Village Level</option>
                    <option value="2">Taluka Level</option>
                    <option value="3">District Level</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>* CAN YOU USED SOIL CHARGER TECHNOLOGY ?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <select class="custom-select my-1 mr-sm-2" name="used_sct" id="used_sct" required="required">
                    <option selected>Choose option...</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="textadd2"><b>* WHY YOU WANT TO TAKE DISTRIBUTORSHIP ?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <textarea class="form-control" id="why_want_take_distributorship" rows="1"
                    name="why_want_take_distributorship" placeholder="Describe" required="required"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="textadd3"><b>* IF YOU USED THEN TELL YOUR EXPERIENCE & INFORMATION ?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <textarea class="form-control" name="distributorship_exerience" id="distributorship_exerience"
                    rows="1" placeholder="Describe" required="required"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="textadd4"><b>* SHARE YOUR EXPERIENCE IN FARM & GARDEN ?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <textarea class="form-control" name="experience_farm_garder" id="experience_farm_garder" rows="1"
                    placeholder="Describe" required="required"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="textadd5"><b>* HOW MANY FARMERS DO YOU WANT TO WORK WITH ? & APPROXIMATELY HOW MUCH OF A
                      TECHNOLOGY CAN YOU REACH TO THE FARMERS ? WHAT IS YOUR GOAL?</b></label>
                </div>
                <div class="form-group col-md-6">
                  <textarea class="form-control" id="goal" id="goal" rows="2" placeholder="Describe"
                    required="required"></textarea>
                </div>
              </div>
              <!--  <center>
                                         <div class="form-group">
                                         <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                         <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                         <div class="help-block with-errors"></div>
                                            </div>
                                     </center> -->
              <div class="text-center">
                <a href="#"><button type="Submit" class="p_modal_btn">Submit</button></a>
              </div>
              <br>
              <!-- </form> -->
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- model2 end -->
<!-- model3 start -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal31">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Job Vacancy Form</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <form id="employment_form" action="{{route('frontjobpostingadd')}}" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname"><b>Full Name :</b></label>
              <input type="text" class="form-control txtname1" name="name" id="name" placeholder="Enter your full name"
                required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="inputemail5"><b>Email :</b></label>
              <input type="email" class="form-control" name="email" id="email"
                placeholder="Enter your Email addres abc@xyz.com" required="required">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputmobile5"><b>Mobile Number :</b></label>
              <input type="tel" class="form-control txtnum1" name="mobile" id="mobile" pattern="^(\+\d{1,3}[- ]?)?\d{10}$"
                placeholder="Enter your mobile number" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="inputqualification5"><b>Qualification :</b></label>
              <input type="text" class="form-control" id="qualification" name="qualification"
                placeholder="Enter your Qualification" required="required">
            </div>
          </div>
          <div class="form-row">
            <label class="col-6"><b>Previous Experience :</b></label>
            <div class=" form-inline">
              <div class="col-2">
                <label for="frpe">From:</label>
              </div>
              <div class="col-4">
                <input class="form-control" placeholder="To" type="date" value="" name="experience_from"
                  id="experience_from" required="required">
              </div>
              <div class="col-1">
                <label for="tope">To:</label>
              </div>
              <div class="col-4">
                <input class="form-control" placeholder="To" type="date" value="" name="experience_to"
                  id="experience_to" required="required">
              </div>

            </div>
            <!-- <div class="form-group col-md-10">

                                     </div> -->
          </div>
          <div class="form-group">
            <label for="textareaadd5"><b>Address :</b></label>
            <textarea class="form-control" name="address" id="address" rows="5"
              placeholder="Type Your address Here ...." required="required"></textarea>
          </div>
          <div class="form-group">
            <label><b>Upload Resume :</b></label>
            <input type="file" class="form-control-file" id="employment_resume" name="resume"
              onchange="getEmployment_resume(this)" required="required">
          </div>
          <!--  <center>
                                     <div class="form-group">
                                     <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                     <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                     <div class="help-block with-errors"></div>
                                        </div>
                                 </center> -->
          <div class="text-center">
            <input type="submit" class="p_modal_btn" />
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- model3 end -->
<script>
function getConvertinternship_form(element) {
  var fileInput = document.getElementById('resume');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}





function getDistributor_aadhar_card_image_front(element) {
  var fileInput = document.getElementById('aadhar_card_image_front');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}


function getDistributor_aadhar_card_image_back(element) {
  var fileInput = document.getElementById('aadhar_card_image_back');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}

function getDistributor_shop_act_image(element) {
  var fileInput = document.getElementById('shop_act_image');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}

function getDistributor_pan_card(element) {
  var fileInput = document.getElementById('pan_card');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}

function getDistributor_light_bill(element) {
  var fileInput = document.getElementById('light_bill');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}

function getDistributor_product_purchase_bill(element) {
  var fileInput = document.getElementById('product_purchase_bill');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf, jpg, jpeg, png format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}


function getEmployment_resume(element) {
  var fileInput = document.getElementById('employment_resume');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.pdf)$/i;
  if (!allowedExtensions.exec(filePath)) {
    Swal.fire({
      icon: 'error',
      title: 'File Upload',
      text: 'Please upload file having extensions pdf format only.',
    });
    fileInput.value = '';
    return false;
  } else {
    var file = fileInput.files[0];
    if (file.size > 2000005) {
      Swal.fire({
        icon: 'error',
        title: 'File Upload',
        text: 'Please upload files size less than 2 mb.',
      });
      fileInput.value = '';
      return false;
    }
  }
}

// {$("form#internship_form").submit(function(e) {
//   $(".preloader").show();
//   e.preventDefault();
//   var formData = new FormData(this);
//   var urlGet = "{{route('internship_form_submit')}}";
//   $.ajax({
//     url: urlGet,
//     type: 'POST',

//     data: formData,
//     success: function(success) {
//       $(".preloader").show();
//       Swal.fire({
//         icon: 'success',
//         title: success.message,
//         text: '',
//       })
//       $(".preloader").hide();
//       $("#myModal29").modal('hide');

//     },
//     error: function(errorResponse) {
//       if (errorResponse.responseJSON.status_code == 422) {
//         $(".error").empty();
//         $.each(errorResponse.responseJSON.message, function(key, value) {
//           inputErrorMsg = value;
//           inputId = key;
//           $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
//             '">' + inputErrorMsg + '</label>')
//         });
//         $(".preloader").hide();
//       } else {
//         swal({
//           titile: "Error!",
//           text: "Something Went Wrong",
//           icon: "error",
//           button: "Ok",
//         });
//         $(".preloader").hide();
//         window.location = APP_URL;
//       }
//     },
//     cache: false,
//     contentType: false,
//     processData: false
//   });
// });
// }

// Distributor Add
// $("form#distributor_form").submit(function(e) {
//   $(".preloader").show();
//   e.preventDefault();
//   var formData = new FormData(this);

//   var urlGet = "https://finalapi.soilchargertechnology.com/api/frontdistributorregistration";
//   $.ajax({
//     url: urlGet,
//     type: 'POST',

//     data: formData,
//     success: function(success) {
//       $(".preloader").show();
//       Swal.fire({
//         icon: 'success',
//         title: success.message,
//         text: '',
//       })
//       $(".preloader").hide();
//       $("#myModal30").modal('hide');

//     },
//     error: function(errorResponse) {
//       if (errorResponse.responseJSON.status_code == 422) {
//         $(".error").empty();
//         $.each(errorResponse.responseJSON.message, function(key, value) {
//           inputErrorMsg = value;
//           inputId = key;
//           $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
//             '">' + inputErrorMsg + '</label>')
//         });
//         $(".preloader").hide();
//       } else {
//         swal({
//           titile: "Error!",
//           text: "Something Went Wrong",
//           icon: "error",
//           button: "Ok",
//         });
//         $(".preloader").hide();
//         window.location = APP_URL;
//       }
//     },
//     cache: false,
//     contentType: false,
//     processData: false
//   });
// });


// Employment

// $("form#employment_form").submit(function(e) {
//   $(".preloader").show();
//   e.preventDefault();
//   var formData = new FormData(this);
//   var urlGet = "https://finalapi.soilchargertechnology.com/api/frontjobpostingadd";
//   $.ajax({
//     url: urlGet,
//     type: 'POST',

//     data: formData,
//     success: function(success) {
//       $(".preloader").show();
//       Swal.fire({
//         icon: 'success',
//         title: success.message,
//         text: '',
//       })
//       $(".preloader").hide();
//       $("#myModal31").modal('hide');

//     },
//     error: function(errorResponse) {
//       if (errorResponse.responseJSON.status_code == 422) {
//         $(".error").empty();
//         $.each(errorResponse.responseJSON.message, function(key, value) {
//           inputErrorMsg = value;
//           inputId = key;
//           $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
//             '">' + inputErrorMsg + '</label>')
//         });
//         $(".preloader").hide();
//       } else {
//         swal({
//           titile: "Error!",
//           text: "Something Went Wrong",
//           icon: "error",
//           button: "Ok",
//         });
//         $(".preloader").hide();
//         window.location = APP_URL;
//       }
//     },
//     cache: false,
//     contentType: false,
//     processData: false
//   });
// });



$(document).on('change', '.personal_state', function() {
  var stateId = $(this).val(); // Get the selected state value
  console.log("========== stateid", stateId);
  $.ajax({
    type: "POST",
    url: "{{ route('districtlist') }}",
    data: {
      state_id: stateId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#district').empty().append("<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#district').append("<option value='" + item.location_id + "'>" + item.name + "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});







$(document).on('change', '.personal_dist', function() {
  var distId = $(this).val(); // Get the selected state value
  console.log("========== stateid", distId);
  $.ajax({
    type: "POST",
    url: "{{ route('talukalist') }}",
    data: {
      dist_id: distId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#taluka').empty().append("<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#taluka').append("<option value='" + item.location_id + "'>" + item.name + "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});

$(document).on('change', '.personal_taluka', function() {
  var talukaId = $(this).val(); // Get the selected state value
  console.log("========== stateid", talukaId);
  $.ajax({
    type: "POST",
    url: "{{ route('villagelist') }}",
    data: {
      taluka_id: talukaId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#city').empty().append("<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#city').append("<option value='" + item.location_id + "'>" + item.name + "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});




// Business Dependencies


// $(document).on('change', '.business_state', function() {
//   var urlGet = "{{ route('districtlist') }}",

//     $.ajax({
//       type: "POST",
//       url: urlGet,
//       data: {
//         "state_id": $("#business_state").val(),
//       },
//       success: function(response) {
//         const obj = response.data;
//         $('#business_district').empty();
//         $(function() {
//           $('#business_district').append("<option value=''>select</option>");
//           $.each(obj, function(i, item) {
//             console.log(item);
//             $('#business_district').append("<option value='" + item.location_id +
//               "'>" + item.name + "</option>");
//           });
//         });
//         $(".preloader").hide();
//       },
//       error: function(errorResponse) {
//         swal({
//           titile: "Error!",
//           text: "Something Went Wrong",
//           icon: "error",
//           button: "Ok",
//         });
//         $(".preloader").hide();
//       }

//     });
// });




$(document).on('change', '.business_state', function() {
  var stateId = $(this).val(); // Get the selected state value
  console.log("========== stateid", stateId);
  $.ajax({
    type: "POST",
    url: "{{ route('districtlist') }}",
    data: {
      state_id: stateId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#business_district').empty().append(
        "<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#business_district').append("<option value='" + item.location_id + "'>" + item.name +
            "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});







$(document).on('change', '.business_district', function() {
  var distId = $(this).val(); // Get the selected state value
  console.log("========== stateid", distId);
  $.ajax({
    type: "POST",
    url: "{{ route('talukalist') }}",
    data: {
      dist_id: distId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#business_taluka').empty().append(
        "<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#business_taluka').append("<option value='" + item.location_id + "'>" + item.name +
            "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});

$(document).on('change', '.business_taluka', function() {
  var talukaId = $(this).val(); // Get the selected state value
  console.log("========== stateid", talukaId);
  $.ajax({
    type: "POST",
    url: "{{ route('villagelist') }}",
    data: {
      taluka_id: talukaId,
      _token: '{{ csrf_token() }}'
    },
    success: function(response) {
      $('#business_city').empty().append("<option value=''>Select</option>"); // Clear and add default option

      if (response.success) {
        console.log("=========response", response);
        $.each(response.data, function(index, item) {
          $('#business_city').append("<option value='" + item.location_id + "'>" + item.name +
            "</option>");
        });
      } else {
        swal({
          title: "Error!",
          text: response.message,
          icon: "error",
          button: "Ok",
        });
      }

      $(".preloader").hide();
    },
    error: function(xhr, status, error) {
      swal({
        title: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }
  });
});
















$(document).on('change', '.business_district', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/talukalist";

  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "dist_id": $("#business_district").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#business_taluka').empty();
      $(function() {
        $('#business_taluka').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#business_taluka').append("<option value='" + item.location_id +
            "'>" + item.name + "</option>");
        });
      });
      $(".preloader").hide();
    },
    error: function(errorResponse) {
      swal({
        titile: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }

  });
});

$(document).on('change', '.business_taluka', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/villagelist";
  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "taluka_id": $("#business_taluka").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#business_city').empty();
      $(function() {
        $('#business_city').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#business_city').append("<option value='" + item.location_id +
            "'>" + item.name + "</option>");
        });
      });
      $(".preloader").hide();
    },
    error: function(errorResponse) {
      swal({
        titile: "Error!",
        text: "Something Went Wrong",
        icon: "error",
        button: "Ok",
      });
      $(".preloader").hide();
    }

  });
});
</script>

@endsection