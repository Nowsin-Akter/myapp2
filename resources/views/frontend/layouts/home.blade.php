@extends('frontend.app')
@section('content')
<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item background_bg active" data-img-src="{{asset('frontend/assets/images/banner16.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                            <div class="col-lg-7 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">LED 75 INCH F58</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s">Get up to <span class="text_default">50%</span> off Today Only!</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{asset('frontend/assets/images/banner17.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                    		<div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">Smart Phones</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s"><span class="text_default">50%</span> off in all products</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                    	</div>	
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{asset('frontend/assets/images/banner18.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                    		<div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">Beat Headphone</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s">Taking your Viewing Experience to Next Level</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- END SECTION BANNER -->

<!-- END MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION CATEGORIES -->
<div class="section small_pb small_pt">
	<div class="container">
    	<div class="row justify-content-center">
			<div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Categories</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
            </div>
		</div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img1.png') }}" alt="cat_img1"/>
                                <span>Television</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img2.png') }}" alt="cat_img2"/>
                                <span>Mobile</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img3.png') }}" alt="cat_img3"/>
                                <span>Headphone</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img4.png') }}" alt="cat_img4"/>
                                <span>Watch</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img5.png') }}" alt="cat_img5"/>
                                <span>Game</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img6.png') }}" alt="cat_img6"/>
                                <span>Camera</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/cat_img7.png') }}" alt="cat_img7"/>
                                <span>Audio</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CATEGORIES --> 


<!-- START SECTION BANNER --> 
<div class="section pb_20 small_pt">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="sale-banner mb-3 mb-md-4">
                	<a class="hover_effect1" href="#">
                		<img src="{{asset('frontend/assets/images/shop_banner_img11.png') }}" alt="shop_banner_img11">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BANNER -->

<!-- START SECTION BLOG -->
<div class="section pb_20">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8">
            	<div class="heading_s1 text-center">
                	<h2>Latest News</h2>
                </div>
                <p class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style2 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{asset('frontend/assets/images/el_blog_img1.jpg') }}" alt="el_blog_img1">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">But I must explain to you how all this mistaken idea</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style2 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{asset('frontend/assets/images/el_blog_img2.jpg') }}" alt="el_blog_img2">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">On the other hand we provide denounce with righteous</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style2 box_shadow1">
                	<div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{asset('frontend/assets/images/el_blog_img3.jpg') }}" alt="el_blog_img2">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                    	<div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BLOG -->

</div>
<!-- END MAIN CONTENT --> 
@endsection