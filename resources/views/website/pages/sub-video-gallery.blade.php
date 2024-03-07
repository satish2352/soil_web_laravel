@extends('website.layouts.master')

@section('content')

<style type="text/css">
.ag_portfolio_logo {
	position: relative;
}
.ag_portfolio_logo img {
	width: 100%;
	height: 300px%;
}
.ag_portfolio_inform_2 {
	position: absolute;
	bottom: 0;
	left: 0;
	width:100%;
}
.ag_portfolio_inform_2 > .container {
	position: relative;
}
.ag_portfolio_inform {

}
.ag_portfolio_inform .breadcrumb {
	padding: 8px 15px 8px 0;
	border-radius: 0;
	background-color: transparent;

}
.ag_portfolio_inform .breadcrumb li a {
	font-size: 15px;
	color: #000;
}

</style>
<!-- <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('img/bg/subbanner.jpg')}}">
  <div class="container">
    <div class="row mx-0">
      <div class="col-12">
        <div class="breadcrumb-content">
          <h2>Video Gallery</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section>
<div class="ag_portfolio_logo">
        <img src="{{asset('img/bg/subbanner.jpg')}}" alt="">
        <div class="ag_portfolio_inform_2">
          <div class="container">
            <div class="ag_portfolio_inform">
              <ol class="breadcrumb">
                <!-- <li><a href="#">Home</a></li>
                <li class="active">Video Gallery</li> -->
              </ol>
            </div>
          </div>
        </div>
      </div>
      </section>
<!-- slider-area-end -->

<!-- Rupali Video Gallery -->

<section class="portfolio-section mt-5" id="Video_Gallery">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-40">
          <h2 class="title"><b><span>Video</span> Gallery</b></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-menu mt-2 mb-4">
    <nav class="controls">
      <button type="button" class="control outline" data-filter="all">Educational</button>
      <button type="button" class="control outline" data-filter=".web">Farmers</button>
    </nav>
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


  </div>


</section>
@endsection