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
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="<?php echo  $frontblogarticlelist_data['photopath']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
          <h4><a><?php echo $frontblogarticlelist_data['title']; ?></a></h4>
            <!-- <p><?php echo $frontblogarticlelist_data['content']; ?></p> -->
          </div>
          <div class="card-footer">
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