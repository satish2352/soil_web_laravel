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
          <img src="<?php echo $frontphotogallerylistlimit_data['photopath']; ?>" width="250px" itemprop="thumbnail"
            alt="Image description" class="img-fluid" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category"></p>
              <a href="#" title="<?php echo $frontphotogallerylistlimit_data['title']; ?>" target="_blank">
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

<!-- <section class="portfolio-section" id="Photo_Gallery">
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
                        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <img src="img/images/221_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/221_gallaryphoto.png">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                <img src="img/images/201_gallaryphoto.jpg" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/201_gallaryphoto.jpg" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                <img src="img/images/200_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/200_gallaryphoto.png" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                                <img src="img/images/195_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/195_gallaryphoto.png" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                                <img src="img/images/194_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/194_gallaryphoto.png" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                                <img src="img/images/191_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/191_gallaryphoto.png" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                <img src="img/images/151_gallaryphoto.png" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/151_gallaryphoto.png" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                <img src="img/images/201_gallaryphoto.jpg" width="250px" itemprop="thumbnail" alt="Image description" />
                                <div class="portfolio-overlay">
                                    <div class="overlay-content">
                                        <p class="category"></p>
                                        <a href="#" title="View Project" target="_blank">
                                        </a>
                                        <a data-fancybox="item" title="click to zoom-in" href="img/images/201_gallaryphoto.jpg" data-size="1200x600">
                                            <div class="magnify-icon">
                                            <p><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </li>
                    </ul>
            </div>
        <div class="row">
            <div class="col-md-12 viewmore">
                <a href="sub_photogallery.php"><button type="button" class="btn btn-primary viewbtn" style="padding: 10px 20px; "> view more </button></a>
            </div>
        </div>
    </div>
</section> -->
@endsection