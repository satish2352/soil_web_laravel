@extends('website.layouts.master')

@section('content')
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
            <h4><a><?php echo substr($frontblogarticlelist_data['title'], 0, 10); ?></a></h4>
            <!-- <p><?php echo $frontblogarticlelist_data['content']; ?></p> -->
            <a href="{{ route('sub-blogs', ['id' => $frontblogarticlelist_data['id']]) }}" class="arrow-btn">Read More
              <span></span></a>


          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
@endsection