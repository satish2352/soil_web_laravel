@extends('website.layouts.master')

@section('content')
<section id="product" class="home-product-area h-product-bg pt-50 pb-15">
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
              <a href="sub_product.php?prod=<?php echo str_replace(" ","_",$frontproductlist_data['title']); ?>"
                type="button" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section>







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

@endsection