@include('website.layouts.header')
<div style="padding-top: 100px !important;">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php  foreach($frontsliderlist as $key => $frontsliderlistdata ) { ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $key; ?>" class="active"></li>
      <?php  } ?>
    </ol>

    <div class="carousel-inner mt-4">
      <?php  foreach($frontsliderlist as $key => $frontsliderlistdata ) { ?>
      <div class="carousel-item mt-2 <?php if($key==0) { echo "active"; } ?> banner0">
        <!-- <img src="<?php echo $frontsliderlistdata['photopath']; ?>" class="w-100 x mt-10" alt="..." /> -->
        <img src="<?php echo  $frontsliderlistdata['photopath']; ?>" class="w-100 x mt-10" alt="..." />

        <div class="carousel-caption">
          <p class="banner-img1-1" data-aos="fade-down" data-delay=".4s">
            <?php echo strip_tags($frontsliderlistdata['content']); ?>
          </p>
        </div>
      </div>
      <?php } ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<div class="container-fluid bg-clr">
  <section class="section container">
    <?php foreach ($webmarquee_array  as $key =>
$webmarquee_array_data) { ?>
    <h4 class="marquee mt-5"><?php echo $webmarquee_array_data['marquee']; ?></h4>
    <?php } ?>
  </section>
</div>

<!-- marque section end -->


<!-- about-heading section start -->
<section class="about-area position-relative fix pt-120 pb-25 bg-clr">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="text-center first-head d-flex justify-content-center">
          <h1 class="title">SOIL Is HEALTHIER,<br> FARMER WALTHIER</h1>
        </div>
      </div>
    </div>

  </div>
  <!-- <div class="about-overlay-text"><h2>Farming</h2></div> -->

  <div class="container mt-50 mb-50 ">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="wrapper11">
            <h1 class="card-name text-center">We Are India's Leading Organic Farming Group</h1>
            <div class="card-button d-flex justify-content-center">
              <a data-toggle="modal" type="button" data-target="#export" aria-expanded="true"><button>Shop
                  Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- about-heading end -->



<!------------------- Card-title------------ -->

<div class="modal fade bd-example-modal-lg p_modal_text model-body mt-100" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="export">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Export Form</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <form method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname51"><b>Name/Company Name :</b></label>
              <input type="text" class="form-control txtname1" placeholder="Enter Your Name/Company Name"
                required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="inputmobile51"><b>Mobile Number :</b></label>
              <input type="tel" class="form-control txtnum1" placeholder="Enter your Mobile Number" required="required">
            </div>
          </div>
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputqualification51"><b>City :</b></label>
              <input type="text" class="form-control" id="inputqualification51" placeholder="Enter your City"
                required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="inputqualification51"><b>State :</b></label>
              <input type="text" class="form-control" id="inputqualification51" placeholder="Enter your State"
                required="required">
            </div>
          </div>
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputqualification51"><b>Country :</b></label>
              <input type="text" class="form-control" id="inputqualification51" placeholder="Enter your Country"
                required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="inputqualification51 "><b>Pincode :</b></label>
              <input type="text" class="form-control txtnum1" id="inputqualification51" placeholder="Enter your Pincode"
                required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="textareaadd51"><b>Requirements :</b></label>
            <textarea class="form-control" id="textareaadd51" rows="3" placeholder="Type Your Requirements Here ...."
              required="required"></textarea>
          </div>

          <center>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
              <input class="form-control d-none" data-recaptcha="true" required
                data-error="Please complete the Captcha">
              <div class="help-block with-errors"></div>
            </div>
          </center>
          <div class="text-center">
            <a href="#"><button type="Submit" class="p_modal_btn">Submit</button></a>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container pt-50 pb-80">
  <div class="row  justify-content-center piller-head">
    <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center mb-80">
        <h2 class="title" style="font-weight: 800;"><span>4-piller Of </span>Soil Charger Technology</h2>
      </div>
    </div>
  </div>

  <div class="row piller-section">
    <div class="card-wrap-piller">
      <div class="card-header-1 one">
        <i><img src="{{asset('img/dryfruits.png')}}" width="80px" height="80px"></i>
      </div>
      <div class="card-content">
        <h1 class="card-title">Soil Charger Technology</h1>
        <p class="card-text">Work on nourishment not on disease.</p>
      </div>
    </div>
    <div class="card-wrap-piller">
      <div class="card-header-1 two">
        <i class="i2"><img src="{{asset('img/soil1.png')}}" width="200px" height="150px"></i>
      </div>
      <div class="card-content">
        <h1 class="card-title">Soil Charger Technology</h1>
        <p class="card-text">Work on soil not on climate.</p>

      </div>
    </div>
    <div class="card-wrap-piller">
      <div class="card-header-1 three">
        <i><img src="{{asset('img/chemicle.png')}}" width="100px" height="100px"></i>
      </div>
      <div class="card-content">
        <h1 class="card-title">Soil Charger Technology</h1>
        <p class="card-text">Work on humus not with other things.</p>

      </div>
    </div>
    <div class="card-wrap-piller">
      <div class="card-header-1 four">
        <i><img src="{{asset('img/leaficon.png')}}" width="100px" height="100px"></i>
      </div>
      <div class="card-content">
        <h1 class="card-title">Soil Charger Technology</h1>
        <p class="card-text"> Work on leaf and roots not on fruits</p>

      </div>
    </div>

  </div>
</div>

<div class="container-fluid pt-50 pb-50 bg-clr">
  <div class="row justify-content-center principle-head">
    <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center">
        <h2 class="title" style="font-weight: 800;"><span>3-Principle Of </span>Soil Charger Technology</h2>
      </div>
    </div>
  </div>


  <div class="row d-flex justify-content-center principle-section">
    <div class="col-md-1"></div>

    <div class="col-md-3">
      <ul class="p-list">
        <li class="card" style="--accent-color: #9CC623" data-toggle="modal" data-target="#principle-modal">
          <div class="p-icon"><img src="{{asset('img/i2.png')}}"></div>
          <div class="m-title mt-4 mb-4">First Method</div>

          <?php foreach ($firstmethodlist_array  as $key =>
          $firstmethodlist_array_data) { ?>
          <div class="content-1 text-center mt-4 mb-4"><?php echo $firstmethodlist_array_data['first_method']; ?></div>
          <?php } ?>

        </li>
      </ul>
    </div>


    <div class="col-md-3">
      <ul class="p-list">
        <li class="card" style="--accent-color: #F6911B" data-toggle="modal" data-target="#principle-modal-2">
          <div class="p-icon"><a><img src="{{asset('img/i4.png')}}"></a></div>
          <div class="m-title">Second Rule</div>
          <?php foreach ($secondrulelist  as $key =>
            $secondrulelist_array_data) { ?>
          <div class="content-1 text-center mt-4 mb-4"><?php echo $secondrulelist_array_data['second_rule']; ?></div>
          <?php } ?>
        </li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="p-list">

        <li class="card" style="--accent-color: #9CC623" data-toggle="modal" data-target="#principle-modal-3">
          <div class="p-icon"><a><img src="{{asset('img/i2.png')}}"></a></div>
          <div class="m-title">Third Meditation</div>
          <?php foreach ($thirdmeditationlist  as $key =>
            $thirdmeditationlist_array_data) { ?>
          <div class="content-1 text-center mt-4 mb-4">
            <?php echo $thirdmeditationlist_array_data['third_meditation']; ?></div>
          <?php } ?>
        </li>
      </ul>
    </div>
    <div class="col-md-1"></div>
  </div>

</div>
<!-- principle section in about us end -->

<!-- modal start in principle -->
<!-- first method -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="principle-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title d-flex justify-content-center" id="exampleModalLabel" style="color: black;">First
            Method</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <h6 class="text-center" style="color: #9CC623;">Important</h6>
        <h5 class="text-center">Understand the meaning of 100% SCT ...</h5>
        <ul style="list-style-type:circle;">
          <li>A basal dose of krushi amrut, root charger, and Nutri charger should be given after every 60 days as per
            the requirement of the plant.</li>
          <li>In every application of soil or drip or drenching at least once in a week use soil charger 1ltr and health
            charger 600gm for 1 acre.</li>
          <li>Each spray must be mixed with a fruit charger. </li>
        </ul>
        <h5 class="text-center" style="color: #9CC623;">Follow Nutrition</h5>

      </div>

    </div>
  </div>
</div>
<!-- second method -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="principle-modal-3">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title d-flex justify-content-center" id="exampleModalLabel" style="color: black;">Third -
            Meditation</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <h6 class="text-center" style="color: #9CC623;">More Important</h6>
        <ul>
          <li>Watching daily videos posted on the youtube channel and preparing notes and comments. This is the breath
            of SCT VEDIC.</li>
          <li>Study the articles published daily on the WhatsApp group. This is the water for SCT VEDIC users.</li>
          <li>For crop protection use only pest fighter, pest cleaner, disease fighter, and fungi cleaner. Do not use
            any chemicals. </li>
        </ul>
        <h5 class="text-center" style="color: #9CC623;">Avoid Damage</h5>

      </div>

    </div>
  </div>
</div>
<!-- third modal -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="principle-modal-2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title d-flex justify-content-center" id="exampleModalLabel" style="color: black;">Second -
            Rule</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <h6 class="text-center" style="color: #9CC623;">More Important</h6>
        <h5 class="text-center">Things that are strickly prohibited to do. It must be avoided.</h5>
        <ul>
          <li>Do not cultivate any soil that will cause movement or exposure. Mulching should not be done by part of
            trunk. </li>
          <li>(weeds should not be cut in rainy weather or when it is raining, do in a dry environment)</li>
          <li>Do not use any chemical fertilizer. (granular or water-soluble)</li>
          <li>3 -5 min of daily discussion with at least one new or old user farmer or with each other directly or
            on-call about the SCT issue.</li>
          <li>This is the food for SCT USER</li>
        </ul>


      </div>

    </div>
  </div>
</div>
<?php foreach ($aboutuslist_array  as $key =>
$aboutuslist_array_data) { ?>
<div class="container pt-50 pb-100" id="about">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center">
        <h2 class="title" style="font-weight: 800;"><span>About</span> us</h2>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-5 text-center">
      <div>
        <img src="<?php echo $aboutuslist_array_data['photopath']; ?>" class="img-fluid" />



        <p style="color: black;">
          <strong style="font-size: 23px;"><?php echo $aboutuslist_array_data['title']; ?></strong><br />
          <strong style="font-size: 17px;">
            Founder, Soil Charger Technology<br />
            Nashik, Maharashtra
          </strong>
        </p>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="about-content">
        <!--     <p class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xs-none "><strong style="font-size: 23px;">Mr. Ram Mukhekar</strong><br>-->
        <!--     <strong style="font-size: 17px;">Founder, Soil Charger Technology<br>-->
        <!--         Nashik, Maharashtra</strong>-->

        <!--</p>-->
        <p>
          <?php echo $aboutuslist_array_data['content']; ?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<section class="farming-area farming-bg pt-200 pb-100 bg-clr" id="vision_mission">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">

      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  d-flex justify-content-center">
        <div class="organic-farm-item vision-shadow">
          <?php foreach ($frontvisionlist  as $key =>
$frontvisionlist_data) { ?>
          <div class="org-frm-icon">
            <img src="{{asset('img/icon/eye.gif')}}" alt="" srcset="" class="v_gif">
            <h2 class="vision-title1"><?php echo $frontvisionlist_data['title']; ?></h2>
            <img src="{{asset('img/images/organic_item_shape02.png')}}" alt="" class="org-frm-icon-shape">
          </div>
          <div class="org-frm-content">

            <?php echo $frontvisionlist_data['content']; ?>


          </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 justify-content-center d-flex">
        <div class="organic-farm-item vision-shadow">
          <?php foreach ($frontmissionlist  as $key =>
$frontmissionlist_data) { ?>
          <div class="org-frm-icon">
            <img src="{{asset('img/icon/rocket.gif')}}" alt="" srcset="" class="v_gif">
            <h2 class="vision-title1"><?php echo $frontmissionlist_data['title']; ?></h2>
            <img src="{{asset('img/images/organic_item_shape02.png')}}" alt="" class="org-frm-icon-shape">
          </div>
          <div class="org-frm-content">

            <?php echo $frontmissionlist_data['content']; ?>


          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="portfolio-section" id="Photo_Gallery">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-40">
          <h2 class="title"><b><span>Photo</span> Gallery</b></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="">
      <ul class="row portfolio-item">

        <?php foreach ($frontphotogallerylistlimit  as $key =>
$frontphotogallerylistlimit_data) { ?>

        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="<?php echo $frontphotogallerylistlimit_data['photopath']; ?>" width="250px"
            itemprop="thumbnail" alt="Image description" class="img-fluid" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category"></p>
              <a href="#" title="<?php echo $fronhreftphotogallerylistlimit_data['title']; ?>" target="_blank">
              </a>
              <a data-fancybox="item" title="click to zoom-in"
                href="<?php echo $frontphotogallerylistlimit_data['photopath']; ?>">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12 viewmore">
        <a href="{{route('sub-photo-gallery')}}"><button type="button" class="btn btn-primary viewbtn"
            style="padding: 10px 20px; "> view more </button></a>
      </div>
    </div>
  </div>
</section>
<section class="portfolio-section bg-clr" id="Video_Gallery">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-40">
          <h6 class="sub-title">your dream gallery</h6>
          <h2 class="title"><b><span>Video</span> Gallery</b></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <ul class="row portfolio-item1">

      <?php foreach ($webvideo_educationallimit as $key =>
 $webvideo_educationallimit_data) {?>

      <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
        <iframe width="280" height="190"
          src="https://www.youtube.com/embed/<?php echo $webvideo_educationallimit_data['url']; ?>"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </li>
      <?php }?>


    </ul>

    <div class="row">
      <div class="col-md-12 viewmore">
        <a href="{{route('sub-vedio-gallery')}}"><button type="button" class="btn btn-primary viewbtn"
            style="padding: 10px 20px; "> view more </button></a>
      </div>
    </div>
  </div>
</section>
{{-- <section id="product" class="home-product-area h-product-bg pt-50 pb-15">
  <div class="container  container-full">
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-title text-center mb-50">
          <h2 class="title mb-2"><span>Our</span> Products</h2>
          <p>Increase the soil fertility and strength of plant. Healthy plant development is our main aim. From last
            three years our technology experts Mr. Ram Mukhekar ji is educating and train farmers and want to make them
            independent for treatment and dicisions. Available platform to discuss various problems frankly and
            searching scientific way to resolve that problem from root.</p>
        </div>
      </div>
    </div>
    <div class="portfolio-menu mt-2 mb-4">
      <nav class="controls button_grp">
        <button type="button" class="pro-control outline btn-pro active" data-li="all">All</button>
        <?php foreach ($frontproductlist as $key => $frontproductlist_data) {?>
        <button type="button" class="pro-control outline btn-pro btn-pro"
          data-li="<?php echo str_replace(" ","_",$frontproductlist_data['title']); ?>"><?php echo $frontproductlist_data['title']; ?></button>
        <?php }?>
      </nav>
    </div>

    <div class="row product-item product-active slick item_grp">
      <?php foreach ($frontproductlist as $key => $frontproductlist_data) {?>
      <div class="col-xl-3 item <?php echo str_replace(" ","_",$frontproductlist_data['title']); ?>">
        <div class="project-item mb-5 mt-3">
          <div class="project-thumb">
            <img src="<?php echo $frontproductlist_data['productphotopath']; ?>" alt="">
          </div>
          <div class="project-overlay-content">
            <div class="project-tag">
              <a href="sub_product.php"><?php echo $frontproductlist_data['title']; ?></a>
            </div>
            <div class="project-content">
              <a href="{{ route('sub-products', ['prod' => $frontproductlist_data['id'] ])}}" type="button"
                class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section> --}}

<script>
$(document).ready(function() {
  $(".btn-pro").click(function() {


    var attr = $(this).attr("data-li");
    // alert(attr);

    $(".btn-pro").removeClass("active");
    $("this").addClass("active");

    $(".item").hide();

    if (attr == "cat-1") {
      $("." + attr).show();
    } else if (attr == "cat-2") {
      $("." + attr).show();
    } else if (attr == "cat-3") {
      $("." + attr).show();
    } else if (attr == "cat-4") {
      $("." + attr).show();
    } else {
      $(".item").show();
    }
  })
})
</script>

<section class="container-fluid bg-clr">
  <div class="container pt-50" id="career">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-50">
          <h2 class="title"><span>CAREER </span></h2>
        </div>
      </div>
    </div>
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
        <form id="internship_form" enctype="multipart/form-data">
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
            <button type="submit" class="btn btn-primary ">Save</button>
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
          <form id="distributor_form" method="post" enctype="multipart/form-data">
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
        <form id="employment_form" method="post" enctype="multipart/form-data">
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
            <a href="#"> <button type="Submit" class="p_modal_btn">Submit</button></a>
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

$("form#internship_form").submit(function(e) {
  $(".preloader").show();
  e.preventDefault();
  var formData = new FormData(this);
  var urlGet = "https://finalapi.soilchargertechnology.com/api/frontinternshipadd";
  $.ajax({
    url: urlGet,
    type: 'POST',

    data: formData,
    success: function(success) {
      $(".preloader").show();
      Swal.fire({
        icon: 'success',
        title: success.message,
        text: '',
      })
      $(".preloader").hide();
      $("#myModal29").modal('hide');

    },
    error: function(errorResponse) {
      if (errorResponse.responseJSON.status_code == 422) {
        $(".error").empty();
        $.each(errorResponse.responseJSON.message, function(key, value) {
          inputErrorMsg = value;
          inputId = key;
          $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
            '">' + inputErrorMsg + '</label>')
        });
        $(".preloader").hide();
      } else {
        swal({
          titile: "Error!",
          text: "Something Went Wrong",
          icon: "error",
          button: "Ok",
        });
        $(".preloader").hide();
        window.location = APP_URL;
      }
    },
    cache: false,
    contentType: false,
    processData: false
  });
});


// Distributor Add
$("form#distributor_form").submit(function(e) {
  $(".preloader").show();
  e.preventDefault();
  var formData = new FormData(this);

  var urlGet = "https://finalapi.soilchargertechnology.com/api/frontdistributorregistration";
  $.ajax({
    url: urlGet,
    type: 'POST',

    data: formData,
    success: function(success) {
      $(".preloader").show();
      Swal.fire({
        icon: 'success',
        title: success.message,
        text: '',
      })
      $(".preloader").hide();
      $("#myModal30").modal('hide');

    },
    error: function(errorResponse) {
      if (errorResponse.responseJSON.status_code == 422) {
        $(".error").empty();
        $.each(errorResponse.responseJSON.message, function(key, value) {
          inputErrorMsg = value;
          inputId = key;
          $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
            '">' + inputErrorMsg + '</label>')
        });
        $(".preloader").hide();
      } else {
        swal({
          titile: "Error!",
          text: "Something Went Wrong",
          icon: "error",
          button: "Ok",
        });
        $(".preloader").hide();
        window.location = APP_URL;
      }
    },
    cache: false,
    contentType: false,
    processData: false
  });
});


// Employment

$("form#employment_form").submit(function(e) {
  $(".preloader").show();
  e.preventDefault();
  var formData = new FormData(this);
  var urlGet = "https://finalapi.soilchargertechnology.com/api/frontjobpostingadd";
  $.ajax({
    url: urlGet,
    type: 'POST',

    data: formData,
    success: function(success) {
      $(".preloader").show();
      Swal.fire({
        icon: 'success',
        title: success.message,
        text: '',
      })
      $(".preloader").hide();
      $("#myModal31").modal('hide');

    },
    error: function(errorResponse) {
      if (errorResponse.responseJSON.status_code == 422) {
        $(".error").empty();
        $.each(errorResponse.responseJSON.message, function(key, value) {
          inputErrorMsg = value;
          inputId = key;
          $('#' + inputId).after('<label id=' + inputId + '"-error" class="error" for="' + inputId +
            '">' + inputErrorMsg + '</label>')
        });
        $(".preloader").hide();
      } else {
        swal({
          titile: "Error!",
          text: "Something Went Wrong",
          icon: "error",
          button: "Ok",
        });
        $(".preloader").hide();
        window.location = APP_URL;
      }
    },
    cache: false,
    contentType: false,
    processData: false
  });
});



$(document).on('change', '.personal_state', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/districtlist";
  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "state_id": $("#state").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#district').empty();
      $(function() {
        $('#district').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#district').append("<option value='" + item.location_id +
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

$(document).on('change', '.personal_dist', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/talukalist";
  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "dist_id": $("#district").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#taluka').empty();
      $(function() {
        $('#taluka').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#taluka').append("<option value='" + item.location_id +
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

$(document).on('change', '.personal_taluka', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/villagelist";
  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "taluka_id": $("#taluka").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#city').empty();
      $(function() {
        $('#city').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#city').append("<option value='" + item.location_id +
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


// Business Dependencies


$(document).on('change', '.business_state', function() {
  var urlGet = "https://finalapi.soilchargertechnology.com/api/districtlist";

  $.ajax({
    type: "POST",
    url: urlGet,
    data: {
      "state_id": $("#business_state").val(),
    },
    success: function(response) {
      const obj = response.data;
      $('#business_district').empty();
      $(function() {
        $('#business_district').append("<option value=''>select</option>");
        $.each(obj, function(i, item) {
          console.log(item);
          $('#business_district').append("<option value='" + item.location_id +
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
<section class="blog-area blog-bg pt-50 pb-50" id="blog">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center">
          <h2 class="title"><span>Latest</span> News & Articles</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center blog-active">
      <?php foreach ($frontblogarticlelist as $key => $frontblogarticlelist_data) {?>
      <div class="col-lg-3 col-md-6 card1">
        <div class="blog-post-item mb-30 mt-5">
          <div class="blog-post-thumb">
            <a><img src="<?php echo  $frontblogarticlelist_data['photopath']; ?>" alt=""></a>
          </div>
          <div class="blog-post-content">
            <h4><a><?php echo (mb_strlen($frontblogarticlelist_data['title'], 'UTF-8') > 30) ? mb_substr($frontblogarticlelist_data['title'], 0, 30, 'UTF-8') . '...' : $frontblogarticlelist_data['title']; ?></a></h4>
            <!-- <p><?php echo $frontblogarticlelist_data['content']; ?></p> -->
            <a href="sub-blogs?id=<?php echo $frontblogarticlelist_data['id']; ?>" class="arrow-btn">Read More
              <span></span></a>

          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section id="counter-stats">
  <div class="container-fluid text-center bg-img">
    <div class="row">
      <div class="col-sm-1"></div>
      <!-- <?php foreach ($counter_list  as $key =>
$counter_list_data) { ?> -->

      <div class="col-sm-2 my-3">
        <!-- <div class="icon-box"></div> --><i class=" fa fa-male count-icon "></i>
        <div class="hr-b"></div>

        <p class="head2" data-max="{{$counter_list_data['farmer_count']}}"> +<br>FARMER</p>
      </div>
      <div class="col-sm-2 my-3">
        <!-- <div class="icon-box"></div> --><i class="fab fa-youtube count-icon"></i>
        <div class="hr-b"></div>
        <p class="head2" data-max="{{$counter_list_data['youtube_sus_count']}}"> K <br>YOUTUBE SUBSCRIBER</p>
      </div>
      <div class="col-sm-2 my-3">
        <!-- <div class="icon-box"></div> --><i class="fa fa-download count-icon"></i>
        <div class="hr-b"></div>
        <p class="head2" data-max="{{$counter_list_data['app_down_count']}}"> K<br> APP DOWNLOAD</p>
      </div>
      <div class="col-sm-2 my-3">
        <!-- <div class="icon-box"></div> --><i class=" fa fa-handshake count-icon"></i>
        <div class="hr-b"></div>

        <p class="head2" data-max="{{$counter_list_data['sem_meet_count']}}" id="test"><br>SEMINAR MEETING
        </p>
      </div>
      <div class="col-sm-2 my-3">
        <!--   <div class="icon-box"></div> --><i class="fa fa-users count-icon"></i>
        <div class="hr-b"></div>
        <p class="head2" data-max="<?php echo $counter_list_data['distributor_count']; ?>" id="test"><br>DISTRIBUTOR</p>
      </div>
      <?php } ?>
      <div class="col-sm-1"></div>
    </div>
  </div>

</section>

<section class="new-testimonial-area new-testimonial-bg bg-clr pt-50 pb-50">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title white-title text-center mb-70">
                    <h2 class="title"><span>What</span> Our Farmer’s Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row new-testimonial-active">



                @foreach ($fronttestimonialslist as $key => $fronttestimonialslist_data)      
                    <div class="col-12">
                        <div class="new-testimonial-item">
                            <div class="new-testi-thumb">
                                <img src="{{$fronttestimonialslist_data['photopath']}}" alt="">
                            </div>
                            <div class="testi-leaf-img">
                                <img src="{{asset('img/leaf.png')}}" alt="" srcset="">
                            </div>
                            <div class="testi-icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                            <div class="new-testi-content">
                                {{$fronttestimonialslist_data['content']}}
                                <div class="testi-icon1">
                                    <span><i class="fas fa-quote-right"></i></span>
                                </div>

                                <div class="new-testi-avatar">
                                    <h5>{{$fronttestimonialslist_data['title']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                  



                </div>


                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <center><button type="button" class="modal-btn" data-toggle="modal"
                                data-target="#testi-Modal" data-whatever="@mdo">ADD TESTIMONIAL</button></center>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="video-iframe">
                    <div class="video-bg-clr">
                    <img src="{{asset('img/bg/subbanner00.png')}}" class="v-img">
                        <div class="video-img">
                            <div class="video_play">
                                <a href="https://www.youtube.com/watch?v=pB5BUEr5mHM&t=1s">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!--====================== Modal======================== -->
<!-- modal start -->
<div class="modal fade bd-example-modal-lg p_modal_text model-body" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true" id="testi-Modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">ENTER HERE OTP AND VERIFY</h5>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
        <form method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputname51"><b>Full Name :</b></label>
              <input type="text" class="form-control" id="txtname" placeholder="Enter your full name"
                required="required">
              <span id="lblError1" style="color: red"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputmobile51"><b>Mobile Number :</b></label>
              <input type="tel" class="form-control" id="txtnum" placeholder="Enter your mobile number"
                required="required">
              <span id="lblError" style="color: red"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="textareaadd51"><b>Feedback :</b></label>
            <textarea class="form-control" id="textareaadd51" rows="5" placeholder="Type Your Feedback Here ...."
              required="required"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label><b>Upload Image :</b></label>
              <input type="file" class="form-control-file" id="exampleFormControlFile51" required="required">
            </div>
            <div class="form-group col-md-6">
              <label><b>Upload Video :</b></label>
              <input type="file" class="form-control-file" id="exampleFormControlFile51" required="required">
            </div>
          </div>
          <center>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
              <input class="form-control d-none" data-recaptcha="true" required
                data-error="Please complete the Captcha">
              <div class="help-block with-errors"></div>
            </div>
          </center>
          <div class="text-center">
            <button type="Submit" class="modal-btn">Submit</button>
          </div>
          <br>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- model end -->
<!-- model end -->

<!-- Team Start -->
<div class="container mt-5 mb-5">
  <div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
      <div class="section-title white-title text-center mb-70">
        <h2 class="title">Meet Our <span>Team Members<span></h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center product-active" id="">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item">
          <h5>Aniket Sahane</h5>
          <p class="mb-4">Director</p>
          <img class="img-fluid rounded-circle w-100 mb-4" src="{{asset('img/team/team1.png')}}" alt="">
          <div class="d-flex justify-content-center">
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.facebook.com/Soil.Charger.Technology" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1" href="https://twitter.com/GoldenOpportu10"
              target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.instagram.com/sct_vedic_technology_official/" target="_blank"><i
                class="fab fa-instagram"></i></a>

          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item">
          <h5>Rushikesh Hadwale</h5>
          <p class="mb-4">Production Director</p>
          <img class="img-fluid rounded-circle w-100 mb-4" src="{{asset('img/team/team2.png')}}" alt="">
          <div class="d-flex justify-content-center">
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.facebook.com/Soil.Charger.Technology" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1" href="https://twitter.com/GoldenOpportu10"
              target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.instagram.com/sct_vedic_technology_official/" target="_blank"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item">
          <h5>Prasad Mukhekar</h5>
          <p class="mb-4">Devlopment Director</p>
          <img class="img-fluid rounded-circle w-100 mb-4" src="{{asset('img/team/team3.png')}}" alt="">
          <div class="d-flex justify-content-center">
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.facebook.com/Soil.Charger.Technology" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1" href="https://twitter.com/GoldenOpportu10"
              target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.instagram.com/sct_vedic_technology_official/" target="_blank"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item">
          <h5> Arun Patole</h5>
          <p class="mb-4">General Manager</p>
          <img class="img-fluid rounded-circle w-100 mb-4" src="{{asset('img/team/team5.png')}}" alt="">
          <div class="d-flex justify-content-center">
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.facebook.com/Soil.Charger.Technology" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1" href="https://twitter.com/GoldenOpportu10"
              target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.instagram.com/sct_vedic_technology_official/" target="_blank"><i
                class="fab fa-instagram"></i></a>

          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item">
          <h5>Bhausabheb Khemnar</h5>
          <p class="mb-4">Technical Expert</p>
          <img class="img-fluid rounded-circle w-100 mb-4" src="{{asset('img/team/team4.png')}}" alt="">
          <div class="d-flex justify-content-center">
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.facebook.com/Soil.Charger.Technology" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1" href="https://twitter.com/GoldenOpportu10"
              target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.linkedin.com/feed/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn-team btn-square text-primary bg-white m-1"
              href="https://www.instagram.com/sct_vedic_technology_official/" target="_blank"><i
                class="fab fa-instagram"></i></a>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Team End -->
<section class="position-relative fix top">
  <div class="iso-bg-img">
    <div class="iso-bg-clr">
      <div class="container-fluid pb-70 pt-50">
        <!-- mt-50 Remove for join iso -->
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="iso-title">
              <h1 class="text-center">AN <span class="iso">ISO 9001:2008</span> CERTIFIED COMPANY</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 px-0 justify-content-center">
            <div class="iso-img">
              <img src="{{asset('img/iso/ISO.png')}}" class="mx-auto vert-move" alt="" width="60%" height="auto">
            </div>
          </div>
          <div class="col-lg-8  col-md-8 col-sm-12 ">
            <div class="iso-info">
              <p>At Soil Charger Technologies INC We know our responsibility to offer eco friendly products and services
                that efficiently satisfy the growing food, fuel, and fodder demands driven by social and economic
                development in a safe and sustainable manner.<br>
                Our company is an leading biotech company who is active in the field of research, manufacturing and
                marketing of unique organic products for all…</p>
              <!-- <button class="btn"><a href="#">Continue Reading</a></button> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>
</section>
@include('website.layouts.footer')