@extends('website.layouts.master')

@section('content')
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

@endsection