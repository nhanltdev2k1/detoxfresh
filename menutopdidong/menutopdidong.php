<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-dropdown">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-right d-none d-lg-flex">
                <p class="top-message text-uppercase mr-2">Welcome HackheBike Store</p>
                <div class="header-dropdown dropdown-expanded">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="adminhackhebikestore">My Account</a></li>
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="news/">News</a></li>
                            <li><a href="#" class="login-link">Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="home" class="logo">
                    <img src="hinhmenu/logo/logo-hackhebike.webp" alt="Porto Logo" width="111" height="44">
                </a>
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="active">
                            <a href="home" class="pl-4">Home</a>
                        </li>
                        <li>
                            <a href="about/website-information-overview" class=" pl-4">About Us</a>
                        </li>
                        <li>
                            <a href="product">Products</a>
                            <div class="megamenu megamenu-fixed-width">
                                <?php
                                require('db.php');
                                function hien_thi_menu($limitStart, $limitEnd)
                                {
                                    global $link;
                                    $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC LIMIT $limitStart, $limitEnd";
                                    $tv_11 = mysqli_query($link, $tv1);
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $name_url = strtolower($tv_21['name_url']);
                                        $thuocloai = $tv_21['thuocloai'];
                                        echo "<li><a href='category/{$name_url}'>{$thuocloai}</a></li>";
                                    }
                                }
                                ?>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="submenu">
                                            <?php hien_thi_menu(0, 5); ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="submenu">
                                            <?php hien_thi_menu(5, 4); ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner menu-banner-2">
                                            <figure>
                                                <img src="hinhmenu/banner/Banner-menu.webp"
                                                    alt="Menu banner" class="product-promo">
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li><a href="news/">News</a></li>
                        <li>
                            <a href="#">Page</a>
                            <ul>
                                <?php
                                require('db.php');
                                $tv = "select * from gioi_thieu order by id asc limit 1,3";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude_en = "$tv_2[tieude_en]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $ngay = "$tv_2[ngay]";
                                    $url = $tv_2['linkurl'];
                                    $link = str_replace("?", "", strtolower("about/$url"));
                                ?>
                                    <li><a href="<?php echo "$link"; ?>"><?php echo $tieude; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>

                        <li class="float-right"><a href="https://hackhebikestore.site/" target="_blank">Hackhe Bike
                                Store!</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-right">
                <div
                    class="header-icon header-search header-search-inline header-search-category w-lg-max text-right d-none d-sm-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action=" #" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..."
                                required>
                            <div class="select-custom font2">
                                <select id="cat" name="cat">
                                    <option value="" selected="selected">Select type</option>
                                    <?php
                                    require('db.php');
                                    $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                    $tv_11 = mysqli_query($link, $tv1);
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $name_url = strtolower($tv_21['name_url']);
                                        $thuocloai = $tv_21['thuocloai'];
                                    ?>
                                        <option value="category/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button class="btn icon-magnifier" title="search" type="submit"></button>
                        </div>
                    </form>
                </div>
                <a href="wishlist.html" class="header-icon">
                    <i class="icon-wishlist-2 line-height-1"></i>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">0</span>
                    </a>
                    <div class="cart-overlay"></div>
                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Shopping Cart</div>

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                    Cart</a>
                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="owl-carousel info-boxes-slider" data-owl-options="{
                'items': 1,
                'dots': false,
                'loop': false,
                'responsive': {
                    '768': {
                        'items': 2
                    },
                    '992': {
                        'items': 3
                    }
                }
            }">
            <div class="info-box info-box-icon-left">
                <i class="icon-shipping text-white"></i>

                <div class="info-box-content">
                    <p class="info-box-h4 text-white">Free Shipping &amp; Return</p>
                </div>
            </div>
            <div class="info-box info-box-icon-left">
                <i class="icon-money text-white"></i>

                <div class="info-box-content">
                    <p class="info-box-h4 text-white">Money Back Guarantee</p>
                </div>
            </div>
            <div class="info-box info-box-icon-left">
                <i class="icon-support text-white"></i>

                <div class="info-box-content">
                    <p class="info-box-h4 text-white">Online Support 24/7</p>
                </div>
            </div>
        </div>
    </div>
</header>