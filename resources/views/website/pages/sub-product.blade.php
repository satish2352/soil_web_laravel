@extends('website.layouts.master')

@section('content')

<section class="py-5 header">
  <div class="container py-4">
    <div class="row">

      <div class="mob-view">

        <div class="nav d-block nav-pills nav-pills-custom scrollmenu" id="v-pills-tab" role="tablist">
          <?php foreach ($frontproductlist as $key => $frontproductlist_data) {?>
          <a class="nav-link shadow <?php if($key==0) { echo "active"; } ?>" id="soilcharger-tab" data-toggle="pill"
            href="#product_<?php echo $key; ?>" role="tab"
            aria-selected="<?php if($key==0) { echo "true"; } else { echo "false" ;} ?>">
            <?php echo $frontproductlist_data['title']; ?></a>
          <?php }?>

        </div>
        <div class="pro-scroll text-center mt-2">
          <p class="blink_me">Scroll <Span><i class="fa fa-arrow-right" aria-hidden="true"></i></Span></p>
        </div>
      </div>
      <div class="col-md-3 mt-2">
        <div class="pill-scroll desk-view">
          <!-- Tabs nav -->
          <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <?php foreach ($frontproductlist as $key => $frontproductlist_data) {?>
            <a class="nav-link mb-3 p-3 shadow <?php if($key==0) { echo "active"; } ?>" id="soilcharger-tab"
              data-toggle="pill" href="#product_<?php echo $key; ?>" role="tab" aria-controls="v-pills-home"
              aria-selected="<?php if($key==0) { echo "true"; } else { echo "false"; } ?>">
              <span><?php echo $frontproductlist_data['title']; ?></span></a>
            <?php }?>

          </div>
        </div>
      </div>





      <div class="col-lg-9 col-xl-9 col-md-9 col-sm-12 col-xs-12">
        <!-- Tabs content -->
        <div class="tab-content" id="v-pills-tabContent">
          <?php foreach ($frontproductlist as $key => $frontproductlist_data) {?>
          <div class="tab-pane fade  rounded bg-white show <?php if($key==0) { echo "active"; } ?> p-5"
            id="product_<?php echo $key; ?>" role="tabpanel" aria-labelledby="soilcharger-tab">
            <h4 class="mb-4"><?php echo $frontproductlist_data['title']; ?></h4>
            <div class="row s_product_img">
              <div class="col-lg-4 col-md-4 col-sm-6">
                <img src="<?php echo $frontproductlist_data['productphotopath']; ?>" alt="" srcset="">
              </div>
              <div class="col-lg-8 col-md-8 col-sm-6">
                <p><?php echo $frontproductlist_data['short_description']; ?></p>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4>Product Description:</h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <?php echo $frontproductlist_data['additional_info']; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <h4>Additional Information</h4>
                <?php echo $frontproductlist_data['additional_info']; ?>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <h6> Reviews</h6>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 mt-2">
                <img src="img/product/review.jpg" alt="">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 mt-2">
                <p> <?php echo $frontproductlist_data['review_person_name']; ?></p>
                <p> <?php echo $frontproductlist_data['review']; ?></p>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <h6>Add A Reviews</h6>
                <form id="submit_review">
                  <div class="form-row">
                    <div class="col">
                      <input type="hidden" class="form-control" id="product_id" name="product_id"
                        value="<?php echo $frontproductlist_data['id']; ?>">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                        required="required">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" placeholder="Your Email address" id="email" name="email"
                        required="required">
                    </div>
                    <div class="col-12">
                      <textarea class="form-control mt-3" id="comment" rows="3" placeholder="Write Your Comments Here.."
                        required="required"></textarea>
                    </div>
                    <div class="col-12 mt-2 s_product_btn d-flex justify-content-center">
                      <input type="button" id="saveDetails" class="s_product_btn_new" value="Send Review">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
$(document).on('click', '#saveDetails', function() {
  var urlGet = "{{route('frontproductreviewadd')}}";

  if ($("#comment").val() == '') {
    alert("Please add some review");
    return false;
  } else if ($("#email").val() == '') {
    alert("Please add your mail address");
    return false;
  } else if ($("#name").val() == '') {
    alert("Please add your good name");
    return false;
  }

  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      comment: $("#comment").val(),
      email: $("#email").val(),
      name: $("#name").val(),
      product_id: $("#product_id").val(),
    },
    cache: false,
    beforeSend: function() {
      $(".preloader").show();
    },
    complete: function() {
      $(".preloader").hide();
    },
    success: function(response) {
      if (response.data.message) {
        alert(response.data.message);
      }
    },
    error: function(errorResponse) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
      })
    }
  });


});
</script>



@endsection