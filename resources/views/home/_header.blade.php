<header>
    <div class="container">
        <div class="row">
            <div id="header">
                <div class="header-container">
                    <div class="header-logo"> <a href="{{route('home')}}" title="Car HTML" class="logo">
                            <div><img src="{{asset('assets')}}/images/logo.png" alt="Car Store"></div>
                        </a> </div>
                    <div class="header__nav">
                        <div class="header-banner">
                            <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                                <div class="assetBlock">
                                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                                        <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                                        <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
                        </div>
                        <div class="fl-header-right">
                            <div class="fl-links">
                                <div class="no-js"> <a title="" class="clicker"></a>
                                    <div class="fl-nav-links">
                                        <h3>Hesabım</h3>
                                        <ul class="links">
                                            @if(Session::has('UserSession'))
                                                <li><a href="{{route('dashboard')}}" title="My Account"><i class="far fa-user-circle"></i> Profilim</a></li>
                                                <li><a href="{{route('logout')}}" title="My Account"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
                                            @else
                                            <li><a href="{{route('login')}}" title="My Account"><i class="fas fa-sign-in-alt"></i> Giriş Yap</a></li>
                                            <li><a href="{{route('register')}}" title="Wishlist"><i class="far fa-save"></i> Kayıt Ol</a></li>
                                                @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="fl-cart-contain">
                                <div class="mini-cart">
                                    <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
                                    <div class="fl-mini-cart-content" style="display: none;">
                                        <div class="block-subtitle">
                                            <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                                            <!--top-subtotal-->
                                            <!--pull-right-->
                                        </div>
                                        <!--block-subtitle-->
                                        <ul class="mini-products-list" id="cart-sidebar">
                                            <li class="item first">
                                                <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                                                    <div class="product-details">
                                                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                        <!--access-->
                                                        <strong>1</strong> x <span class="price">$179.99</span>
                                                        <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item last">
                                                <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                                                    <div class="product-details">
                                                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                        <!--access-->
                                                        <strong>1</strong> x <span class="price">$80.00</span>
                                                        <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="actions">
                                            <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
                                        </div>
                                        <!--actions-->
                                    </div>
                                    <!--fl-mini-cart-content-->
                                </div>
                            </div>
                            <!--mini-cart-->
                            <div class="collapse navbar-collapse">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" id="search_bar" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">

                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                      </span> </div>
                                </form>
                                <ul id="search_list">
                                </ul>
                            </div>

                            <!--links-->
                        </div>
                        <div class="fl-nav-menu">
                            <nav>
                                <div class="mm-toggle-wrap">
                                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <div class="nav-inner">
                                    <!-- BEGIN NAV -->
                                    <ul id="nav" class="hidden-xs">
                                        <li class="active"> <a class="level-top" href="{{route('home')}}"><span>Anasayfa</span></a></li>

                                        <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Kategoriler</span></a>
                                            <ul class="level1">
                                                <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Blog</span></a>
                                            <ul class="level1">
                                                <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                                                <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu hidden-sm"> <a class="level-top" href="compare.html"><span>Compare Cars‎</span></a> </li>
                                        <li class="level0 parent drop-menu"><a href="{{route('aboutus')}}"><span>Hakkımızda</span> </a>
                                        </li>
                                        <li class="level0 parent drop-menu"><a href="{{route('faqs')}}"><span>SSS</span> </a>
                                        </li>
                                    </ul>
                                    <!--nav-->
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!--row-->

                </div>
            </div>
        </div>
    </div>
</header>
