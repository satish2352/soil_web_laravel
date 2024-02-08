@extends('website.layouts.master')

@section('content')
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
        <img src="<?php echo env('API_LINK') .$aboutuslist_array_data['photopath']; ?>" class="img-fluid" />
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

        <p>
          <?php echo $aboutuslist_array_data['content']; ?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>


@endsection