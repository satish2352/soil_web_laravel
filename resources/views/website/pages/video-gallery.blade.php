@extends('website.layouts.master')

@section('content')
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

      <!-- <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
            <iframe width="280" height="190" src="https://www.youtube.com/embed/p0rcVWO-HSg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <iframe width="280" height="190" src="https://www.youtube.com/embed/2g-nN-QeQlk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <iframe width="280" height="190" src="https://www.youtube.com/embed/BbZ5Nhwngxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <iframe width="280" height="190" src="https://www.youtube.com/embed/qrJHxEMYdTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <iframe width="280" height="190" src="https://www.youtube.com/embed/4o6TTbOjQLg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                  <iframe width="280" height="190" src="https://www.youtube.com/embed/L6YsUl2WuCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                  <iframe width="280" height="190" src="https://www.youtube.com/embed/lw9KRu8LKUQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li>
            <li class="mix col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <iframe width="280" height="190" src="https://www.youtube.com/embed/DyuwR4HxwFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </li> -->
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