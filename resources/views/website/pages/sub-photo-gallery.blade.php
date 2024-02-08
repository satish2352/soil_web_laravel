@extends('website.layouts.master')

@section('content')
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/subbanner.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-content">
          <h2>Photo Gallery</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- slider-area-end -->


<!--  Photo Gallery -->

<section class="portfolio-section mt-5" id="Photo_Gallery">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-40">
          <h2 class="title"><b><span>Photo</span> Gallery</b></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="portfolio-menu mt-2 mb-4">
    <nav class="controls">
      <?php foreach ($gallarylist_array as $key =>
    $gallarylist_array_data) {?>

      <button type="button" class="control outline"
        data-filter="<?php echo $gallarylist_array_data['category']; ?>"><?php echo $gallarylist_array_data['category']; ?></button>
      <?php }?>
    </nav>
  </div>
  <div class="container">
    <ul class="row portfolio-item">
      <?php foreach ($gallarylist_array as $key =>
    $gallarylist_array_data) {?>

      <li class="mix <?php echo $gallarylist_array_data['category']; ?> col-xl-3 col-md-4 col-12 col-sm-6 pd">
        <img src="<?php echo $gallarylist_array_data['photopath']; ?>" width="250px" itemprop="thumbnail"
          alt="Image description" />
        <div class="portfolio-overlay">
          <div class="overlay-content">
            <p class="<?php echo $gallarylist_array_data['category']; ?>"></p>
            <a href="#" title="View Project" target="_blank">
            </a>
            <a data-fancybox="item" title="click to zoom-in" href="<?php echo $gallarylist_array_data['photopath']; ?>">
              <div class="magnify-icon">
                <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <?php }?>
    </ul>

  </div>

</section>


@endsection