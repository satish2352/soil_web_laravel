<?php
// $url = 'https://finalapi.soilchargertechnology.com/api/';

// function CallAPI($method, $url, $data = false)
// {
//     $curl = curl_init();

//     switch ($method) {
//         case 'POST':
//             curl_setopt($curl, CURLOPT_POST, 1);

//             if ($data) {
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             }
//             break;
//         case 'PUT':
//             curl_setopt($curl, CURLOPT_PUT, 1);
//             break;
//         default:
//             if ($data) {
//                 $url = sprintf('%s?%s', $url, http_build_query($data));
//             }
//     }

//     // Optional Authentication:
//     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//     curl_setopt($curl, CURLOPT_USERPWD, 'username:password');

//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//     $result = curl_exec($curl);

//     curl_close($curl);

//     return $result;
// }

// $getAddressAPILink->getAddressAPI() = json_decode(CallAPI('get', $url . 'address_list_web'), true);
// $getAddressAPILink->getAddressAPI() = $getAddressAPILink->getAddressAPI()['data'];


?>
@inject('getAddressAPILink', 'App\Http\Controllers\Website\AboutUsController')

<footer id="Footer">

    <div class="footer-bg-clr fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5 ">
                    <div class="footer-title justify-content-center">
                        <div class="footer-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h1>Get In Touch</h1>
                    </div>
                </div>
                <div class="col-1"></div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 foot">
                    <div class="fw-title1">
                        <h3>Contact</h3>
                    </div>

                    <div class="footer-contact d-flex">

                        <i class="fas fa-map-marker-alt"></i> <span>Address: </span>
                        <p class="ml-2">{{ $getAddressAPILink->getAddressAPI()->address }}</p>


                    </div>
                    <div class="footer-contact d-flex">


                        <i class="fas fa-mobile footer-mobi"></i> <span>Mobile&nbsp;&nbsp;: </span>
                        <p class="ml-2"><a href="callto:866 920 0221"
                                style="color: #b5b6b7">{{ $getAddressAPILink->getAddressAPI()->mobile_one }}</a> <br>
                            <a href="callto:866 920 0221" style="color: #b5b6b7">{{ $getAddressAPILink->getAddressAPI()->mobile_two }}</a>
                        </p>


                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 foot">
                    <div class="fw-title3">
                        <h3>Usefull Links</h3>
                    </div>
                    <div class="footer-nav-link ">
                        <div class="row">
                            <!-- <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div> -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul>
                                    <li><span><i class="fa fa-home" aria-hidden="true"></i></span><a
                                            href="index.php">Home</a></li>
                                    <li><span><i class="far fa-images" aria-hidden="true"></i></span><a
                                            href="#Photo_Gallery">Gallery</a>
                                    </li>
                                    <li><span><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i></span><a
                                            href="#career">Careers</a></li>
                                    <li><span><i class="fas fa-blog" aria-hidden="true"></i></span><a
                                            href="#blog">&nbsp;Blogs</a></li>

                                </ul>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                                <ul>
                                    <li><span><i class="far fa-address-card" aria-hidden="true"></i></span><a
                                            href="#about">Company
                                            Profile</a></li>
                                    <li><span><i class="fa fa-leaf" aria-hidden="true"></i></span><a
                                            href="#product">Products</a></li>
                                    <li><span><i class="fas fa-map-marked-alt" aria-hidden="true"></i></span><a
                                            href="">Distribution</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="footer-btn mt-4">
                                    <center><a><button class="btn " data-toggle="modal"
                                                data-target="#footer-enquiry">Send
                                                Enquiry</button></a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 foot">
                    <div class="fw-title2">
                        <h3>Website</h3>
                    </div>

                    <div class="footer-contact">
                        <p><i class="fa fa-globe" aria-hidden="true"></i><a
                                href="#"><span>www.soilchargertechnology.com</span></a>
                        </p>
                    </div>

                    <div class="footer-contact">
                        <h5><i class="fas fa-envelope-open"></i>Mails : </h5>
                        <ul>
                            <li><span>For Officials &nbsp;: </span><a href="mailto:{{ $getAddressAPILink->getAddressAPI()->email_office }}"
                                    style="color: #b5b6b7">{{ $getAddressAPILink->getAddressAPI()->email_office }}</a></li>
                            <li><span>For Sales &nbsp;&nbsp;&nbsp;&nbsp;: </span><a
                                    href="mailto:{{ $getAddressAPILink->getAddressAPI()->email_sales }}"
                                    style="color: #b5b6b7">{{ $getAddressAPILink->getAddressAPI()->email_sales }}</a></li>
                            <li><span>For Careers : </span><a href="mailto:{{ $getAddressAPILink->getAddressAPI()->email_careers }}"
                                    style="color: #b5b6b7">{{ $getAddressAPILink->getAddressAPI()->email_careers }}</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="footer-map mt-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15000.553414257052!2d73.828404!3d19.960683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89fda91686ee69ee!2ssoil%20charger%20technology!5e0!3m2!1sen!2sin!4v1650349089176!5m2!1sen!2sin"
                            width="100%" height="230px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="footer-social mb-4 mt-3">
                        <ul>
                            <li class="hovicon effect-1 sub-a"><a href="{{ $getAddressAPILink->getAddressAPI()->facebook_link }}"
                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="hovicon effect-1 sub-a"><a href="{{ $getAddressAPILink->getAddressAPI()->twitter_link }}"
                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="hovicon effect-1 sub-a"><a href="{{ $getAddressAPILink->getAddressAPI()->instagram_link }}"
                                    target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="hovicon effect-1 sub-a"><a href="{{ $getAddressAPILink->getAddressAPI()->whatsapp_link }}"
                                    target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                            {{-- <li class="hovicon effect-1 sub-a"><a href="mailto:soilchargertec@gmail.com"
                                    target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li> --}}
                        </ul>
                    </div>

                </div>

            </div>
        </div>

        <div class="footer-bottom-shape fb-shape1 running"><img src="img/images/tractor1.png" alt=""></div>
        <div class="footer-bottom-shape fb-shape2"><img src="img/images/footer_vector02.png" alt=""></div>
        <div class="footer-bottom-shape fb-shape3"><img src="img/images/footer_vector03.png" class="rotateme"
                alt=""></div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="copyright-text">
                        <p class="text-center">©{{ date('Y') }} All rights reserved<a href="#"> Soil
                                Charger Technology</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- Footer-Modal -->

<div class="modal fade" id="footer-enquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">ENQUIRY FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    @csrf

                    <input type="text" class="form-control" id="name_of_enq_person" name="name_of_enq_person"
                        placeholder="Your Name" required="required">
                    <input type="email" class="form-control mt-3" id="email_of_enq_person"
                        name="email_of_enq_person" placeholder="Your Email" required="required">
                    <input type="mobile" class="form-control mt-3" id="mobile_of_enq_person"
                        name="mobile_of_enq_person" placeholder="Mobile Number" required="required">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-3">
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Soil Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Soil Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Fruit Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Fruit Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Flower Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Flower Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Crop Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Crop Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Size Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Size Charger
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-3">
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Water Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Water Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Fungi Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Fungi Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Super Pest Charger" id="">
                                <label class="form-check-label" for="">
                                    Super Pest Charger
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Krushi Amrut" id="">
                                <label class="form-check-label" for="">
                                    Krushi Amrut
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input products" name="products_all" type="checkbox"
                                    value="Green Gujrat" id="">
                                <label class="form-check-label" for="">
                                    Green Gujrat
                                </label>
                            </div>
                        </div>
                    </div>
                    <textarea class="form-control mt-3" id="comment" name="comment" rows="3"
                        placeholder="Type Your Comment Here....."></textarea>
                    <input type="hidden" name="temp_checkbox_products" id="temp_checkbox_products" value="">
                    <div class="footer-modal d-flex justify-content-center">
                        <button type="button" data-dismiss="modal">CANCEL</button>
                        <input type="button" class="submit_data" id="submit_data" value="SUBMIT"
                            style="float: right;
              border: 2px solid #b9dd39;
              margin-right: 10px;
              margin-bottom: 10px;
              color: black;
              border-radius: 8px;
              padding: 8px 40px;
              background: transparent;">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Footer-Modal-End -->


<div class="dropup">
    <button class="whatsapp-button wtup-main" data-toggle="dropdown">
        <img class="wt-main" src="{{ asset('img/icon/whatsapp-button.png') }}" alt="botão whatsapp">
    </button>
    <div class="dropup-content drop-m">
        <a href="https://wa.me/918669200221?text=Hello" data-toggle="tooltip" data-placement="left"
            title="SCT Consulting" class="whatsapp-button wtup-1" target="_blank">
            <img class="wtup" src="{{ asset('img/icon/whatsapp-button.png') }}" alt="botão whatsapp">
            <p class="wtupp-1">SCT Consulting</p>
        </a>
        <a href="https://wa.me/918669950005?text=Hello" data-toggle="tooltip" data-placement="left"
            title="SCT Sales" class="whatsapp-button wtup-2" target="_blank">
            <img class="wtup" src="{{ asset('img/icon/whatsapp-button.png') }}" alt="botão whatsapp">
            <p class="wtupp-2">SCT Sales</p>
        </a>
        <a href="https://wa.me/919545710002?text=Hello" data-toggle="tooltip" data-placement="left"
            title="SCT Management" class="whatsapp-button wtup-3" target="_blank">
            <img class="wtup" src="{{ asset('img/icon/whatsapp-button.png') }}" alt="botão whatsapp">
            <p class="wtupp-3">SCT Management</p>
        </a>
    </div>
</div>


<!-- Whats App Integration End -->


<!-- JS here -->
<!-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script> -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/paroller.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/ajax-form.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


<!-- Photo Gallery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<!-- Mixitup -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
<!-- fancybox -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
<!-- Fancybox js -->

<script>
    /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");
    // 2. Passing the configura,tion object inline
    //https://www.kunkalabs.com/mixitup/docs/configuration-object/
    var mixer = mixitup(containerEl, {
        animation: {
            effects: "fade translateZ(-100px)",
            effectsIn: "fade translateY(-100%)",
            easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
        }
    });
    // fancybox insilaze & options //
    $("[data-fancybox]").fancybox({
        loop: true,
        hash: true,
        transitionEffect: "slide",
        /* zoom VS next////////////////////
        clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
        clickContent: function(current, event) {
            return current.type === "image" ? "next" : false;
        }
    });
</script>

<!-- Photo Gallery -->

<!-- Counter JS -->
<script>
    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {

            //chnage count up speed here
            duration: 2500,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
<!-- Counter js end -->


<!-- aos -->
<script>
    AOS.init();
</script>
<!-- aos -->


</body>

</html>
<script>
    var tmp_products = [];
    // $(document).on('click', '.products', function() {
    $("input[name='products_all']").change(function() {
        var checked = $(this).val();

        if (!$(this).is(':checked')) {

            tmp_products.splice($.inArray(checked, tmp_products), 1);
            $('#temp_checkbox_products').val(tmp_products);
        } else {

            tmp_products.push(checked);
            $('#temp_checkbox_products').val(tmp_products);

        }
    });

    $(document).on('click', '#submit_data', function() {

        if ($("#name_of_enq_person").val() == '') {
            alert("Please add you food name");
            return false;
        } else if ($("#email_of_enq_person").val() == '') {
            alert("Please add your mail address");
            return false;
        } else if ($("#mobile_of_enq_person").val() == '') {
            alert("Please add your mobile");
            return false;
        } else if ($("#comment").val() == '') {
            alert("Please add some comment");
            return false;
        } else if ($("#temp_checkbox_products").val() == '') {
            alert("Please select some details");
            return false;
        }


        $(".preloader").show();
        var urlGet = "{{ env('API_LINK_AJAX') }}/frontenquiryadd";
        $.ajax({
            url: urlGet,
            type: 'POST',

            data: {
                "name": $("#name_of_enq_person").val(),
                "email": $("#email_of_enq_person").val(),
                "mobile": $("#mobile_of_enq_person").val(),
                "comment": $("#comment").val(),
                "details": $("#temp_checkbox_products").val(),

            },


            success: function(success) {
                $("#footer-enquiry").modal('hide');
                $(".preloader").show();
                Swal.fire({
                    icon: 'success',
                    title: "Thanks for contacting us",
                    text: '',
                })
                $(".preloader").hide();
            },
            error: function(errorResponse) {

                swal({
                    titile: "Error!",
                    text: "Something Went Wrong",
                    icon: "error",
                    button: "Ok",
                });
                $(".preloader").hide();

            },
        });
    });
</script>
