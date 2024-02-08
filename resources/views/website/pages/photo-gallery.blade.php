@extends('website.layouts.master')

@section('content')
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
          <img src="<?php echo env('API_LINK') . $frontphotogallerylistlimit_data['photopath']; ?>" width="250px"
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
        <a href="sub_photogallery.php"><button type="button" class="btn btn-primary viewbtn"
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
        <a href="sub_videogallery.php"><button type="button" class="btn btn-primary viewbtn"
            style="padding: 10px 20px; "> view more </button></a>
      </div>
    </div>
  </div>
</section>


@endsection