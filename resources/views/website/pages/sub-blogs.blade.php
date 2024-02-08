@extends('website.layouts.master')

@section('content')
 
    <section class="py-5 header">
        <div class="container py-4">
            <div class="row">
                <div class="mobile-view">
                <div class=" nav d-block nav-pills nav-pills-custom scrollmenu1" id="h-pills-tab" role="tablist">

                <?php foreach ($frontblogarticlelist as $key => $frontblogarticlelist_data) {?>
                    <a class="nav-link shadow tab-pane <?php if($key == 0) { echo "active"; } ?>" id="soilcharger-tab" data-toggle="tab"
                    href="#blog_<?php  echo $key; ?>" role="tab" aria-controls="h-pills-home" aria-selected="true"><?php echo $frontblogarticlelist_data['title']; ?></a>
                    <?php }?>
                </div>
                <div class="pro-scroll text-center mt-2">
                    <p class="blink_me1">Scroll <Span><i class="fa fa-arrow-right" aria-hidden="true"></i></Span></p>
                </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="tab-scroll desktop-view">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <?php foreach ($frontblogarticlelist as $key => $frontblogarticlelist_data) {?>
                        
                        <a class="nav-link mb-3 p-3 shadow <?php if($key == 0) { echo "active"; } ?>" id="soilcharger-tab" data-toggle="pill"
                            href="#blog_<?php  echo $key; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span><?php echo $frontblogarticlelist_data['title']; ?></span></a>
                     <?php }?>
                       
                    </div>
                </div>
                </div>
                
                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">

                    <?php foreach ($frontblogarticlelist as $key => $frontblogarticlelist_data) {?>
                        <div class="tab-pane fade  rounded bg-white show <?php if($key == 0) { echo "active"; } ?> p-5" id="blog_<?php  echo $key; ?>" role="tabpanel"
                            aria-labelledby="soilcharger-tab">
                            <div class="row s_blog_img">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <img src="<?php echo $frontblogarticlelist_data['photopath']; ?>" alt="" srcset="">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <h4 class="mt-5"><?php echo $frontblogarticlelist_data['title']; ?></h4>
                                    <p><?php echo $frontblogarticlelist_data['content']; ?></p>
                                </div>
                            </div>
                          

                        </div>

                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection