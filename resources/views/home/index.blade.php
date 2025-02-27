@extends('layouts.main')

@section('javascript')
    <script src="{{ asset('assets') }}/js/search.js"></script>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <!-- Slider -->
                <div class="home-slider5">
                    <div id="thmg-slideshow" class="thmg-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <ul>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='{{asset('assets')}}/images/slide-img1.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2019</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='{{asset('assets')}}/images/slide-img2.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Category slider Start-->

        <div class="section-filter">
            <div class="b-filter__inner bg-grey container">
                <h2>Size özel aracı bulun</h2>
                <form style="z-index: 50" action="{{route('carlist')}}" class="b-filter">
                    @csrf
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" name="category_id" data-width="100%" tabindex="-98">
                            <option value="0">Kategori Seçiniz</option>
                            @foreach($categories as $ct)
                                <option value="{{$ct->id}}">{{$ct->title}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" id="brand" name="brand_id" data-width="100%" tabindex="-98">
                            <option value="0">Marka Seçiniz</option>
                            @foreach($brand as $br)
                                <option value="{{$br->id}}">{{$br->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" id="model" name="model_id" data-width="100%" tabindex="-98">
                            <option value="0">Model Seçiniz</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" id="equipment" name="equipment_id" data-width="100%" tabindex="-98">
                            <option value="0">Ekipman Seçiniz</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" name="shifter_type" data-width="100%" tabindex="-98">
                            <option value="0">Vites Tipi Seçiniz</option>
                            <option value="Düz">Düz</option>
                            <option value="Yarı Otomatik">Yarı Otomatik</option>
                            <option value="Otomatik">Otomatik</option>
                        </select>
                    </div>
                    <div class="ui-filter-slider">
                        <div class="sidebar-widget-body m-t-10">
                            <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$100.00</span> <span class="pull-right">$900.00</span> </span>
                                <input type="range" name="price" id="price_slider"  min="0" max="900000" step="10000" style="display:block" >
                            </div>
                            <!-- /.price-range-holder -->
                        </div>
                    </div>
                    <div>
                        <div class="b-filter__btns">
                            <input type="submit"  value="Araç Bul" class="btn btn-lg btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--Category silder End-->

        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="{{asset('assets')}}/images/speakers.png" alt="promotion-banner1"> </a> </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="{{asset('assets')}}/images/schedule.png" alt="promotion-banner2"> </a> </div>
                </div>
            </div>
        </div>

        <!-- best Pro Slider -->
        <section class=" wow bounceInUp animated">
            <div class="hot_deals slider-items-products container">
                <div class="new_title">
                    <h2>En Beğenilen Araçlar</h2>
                    <div class="box-timer">
                    </div>
                </div>
                <div id="hot_deals" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">


                        <!-- Item -->
                        @foreach($cars as $car)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('storage/'.$car->pictures->first()->image)}}" alt="Retis lapen casen"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">{{$car->price}}₺</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> {{$car->kilometre}}km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> {{$car->shifter_type}}</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$car->production_year}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- End Item -->

                    </div>
                    <div class="slider-items slider-width-col4 products-grid">


                        <!-- Item -->
                        @foreach($cars as $car)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('storage/'.$car->pictures->first()->image)}}" alt="Retis lapen casen"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">{{$car->price}}₺</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> {{$car->kilometre}}km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> {{$car->shifter_type}}</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$car->production_year}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                    <!-- End Item -->

                    </div>

                </div>
            </div>
        </section>

        <!-- Logo Brand Block -->
        <div class="brand-logo wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="testimonials-section">
                            <div class="offer-slider parallax parallax-2">
                                <ul class="bxslider">
                                    <li>
                                        <div class="avatar"><img src="{{asset('assets')}}/images/member1.png" alt="Image"></div>
                                        <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                                        <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="{{asset('assets')}}/images/member2.png" alt="Image"></div>
                                        <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                                        <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="{{asset('assets')}}/images/member3.png" alt="Image"></div>
                                        <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them! </div>
                                        <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
