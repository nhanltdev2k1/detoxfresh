<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; padding: 0px;"><a href='https://hackhe.xyz/'>Best city bikes</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; padding: 0px;"><a href='https://hackhe.xyz/'>Mountain bikes for beginners</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; padding: 0px;"><a href='https://hackhe.xyz/'>Women’s cycling apparel</a></h2>

<body>
    <div class="page-wrapper">
        <main class="main">
            <section class="popular-products">
                <div class="container">
                    <p class="section-title-home2 section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Most Popular Products</p>
                    <div class="row">
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                            <?php
                            require('db.php');
                            // Prepared statement for improved security
                            $stmt = $link->prepare("SELECT * FROM (SELECT * FROM ma_sanpham WHERE noibat=1 ORDER BY id DESC LIMIT 100) AS recent_news ORDER BY RAND() LIMIT 6");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Fetch data and display products
                            while ($row = $result->fetch_assoc()) {
                                $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh']);
                                $tieude = htmlspecialchars($row['tieude']);
                                $url = htmlspecialchars($row['linkurl']);
                                $giagoc = number_format($row['giagoc'], 2, '.', ',');
                                $giagoc_formatted = '$' . $giagoc;
                                $link = str_replace("?", "", strtolower("detail/$url"));
                            ?>
                                <div class="product-default">
                                    <figure>
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $link_hinh; ?>" width="280" height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="home" class="product-category">Bike</a>
                                        </div>
                                        <p class="product-title p-product-title">
                                            <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a>
                                        </p>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $giagoc_formatted; ?></span>
                                        </div>
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html"
                                                class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="<?php echo $link; ?>" class="btn-quickviews" title="Quick View"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            $stmt->close();
                            ?>
                        </div>

                        <div class="categories-slider owl-carousel owl-theme mb-4 appear-animate" data-owl-options="{
                        'margin': 2,
                        'nav': false,
                        'items': 1,
                        'responsive': {
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-1.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Saddles</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-2.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Pedals</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-3.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Frames</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-4.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Chains</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-5.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Tools</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <div class="banners-section mb-4">
                <div class="row row-sm">
                    <div class="col-md-4">
                        <div class="banner banner1 appear-animate" data-animation-name="fadeIn"
                            data-animation-delay="200" style="background-color: #696f6f;">
                            <figure>
                                <img src="hinhmenu/banner/banner-hackhebike-01.webp" alt="banner" width="640"
                                    height="640">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="banner banner2 h-100"
                            style="background: #101010 no-repeat center/cover url(hinhmenu/banner/banner-hackhebike-02.webp);">
                            <p class=" banner2-h4 text-light text-uppercase mb-0 appear-animate"
                                data-animation-name="fadeInUpShorter" data-animation-delay="100">Get Ready</p>
                            <p class="banner2-h2 d-inline-block align-middle text-uppercase m-b-3 appear-animate"
                                data-animation-name="fadeInUpShorter" data-animation-delay="300">20% off</p><a
                                href="product"
                                class="btn btn-dark btn-lg align-middle m-b-3 appear-animate d-none d-sm-inline-block"
                                data-animation-name="fadeInUpShorter" data-animation-delay="300">Shop All Sale</a>
                            <p class=" banner2-h3 heading-border appear-animate" data-animation-name="fadeInUpShorter"
                                data-animation-delay="500">BIKES</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="trendy-section mb-2">
                <div class="container">
                    <p class="section-title-home2 section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Best-sellers</p>

                    <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <div class="products-slider 5col owl-carousel owl-theme" data-owl-options="{
                            'margin': 0
                        }">
                            <?php
                            require('db.php');
                            // Prepared statement for improved security
                            $stmt = $link->prepare("SELECT * FROM (SELECT * FROM ma_sanpham WHERE banchay=1 ORDER BY id DESC LIMIT 100) AS recent_news ORDER BY RAND() LIMIT 6");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Fetch data and display products
                            while ($row = $result->fetch_assoc()) {
                                $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh']);
                                $tieude = htmlspecialchars($row['tieude']);
                                $url = htmlspecialchars($row['linkurl']);
                                $giagoc = number_format($row['giagoc'], 2, '.', ',');
                                $giagoc_formatted = '$' . $giagoc;
                                $link = str_replace("?", "", strtolower("detail/$url"));
                            ?>
                                <div class="product-default">
                                    <figure>
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $link_hinh; ?>" width="280" height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">Seller</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="home" class="product-category">Bike</a>
                                        </div>
                                        <p class="product-title p-product-title">
                                            <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a>
                                        </p>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $giagoc_formatted; ?></span>
                                        </div>
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html"
                                                class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="<?php echo $link; ?>" class="btn-quickviews" title="Quick View"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            $stmt->close();
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-2">
                            <div class="banner banner3 d-flex flex-wrap align-items-center bg-gray h-100 appear-animate"
                                data-animation-name="fadeInRightShorter" data-animation-delay="100">
                                <div class="col-sm-4 text-center">
                                    <p class="banner3-ads font5 mb-0">Summer Sale</p>
                                    <p class="banner3-h2-ads text-uppercase mb-0">20% off</p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="hinhmenu/banner/bannersale-hackhebike-03.webp" alt="banner"
                                        width="232" height="124">
                                </div>
                                <div class="col-sm-4 text-center">
                                    <a href="product" class="btn btn-dark">Shop All Sale</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-2">
                            <div class="banner banner4 d-flex flex-wrap align-items-center bg-primary h-100 appear-animate"
                                data-animation-name="fadeInRightShorter" data-animation-delay="400">
                                <div class="col-sm-4 text-center">
                                    <p class="banner4-ads font5 text-white mb-0">Flash Sale</p>
                                    <p class="banner4-h2-ads text-uppercase text-white mb-0">30% off</p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="hinhmenu/banner/bannersale-hackhebike-01.webp" alt="banner"
                                        width="232" height="124">
                                </div>
                                <div class="col-sm-4 text-center">
                                    <a href="product" class="btn btn-light">Shop All Sale</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="trendy-section mb-2">
                <div class="container">
                    <p class="section-title-home2 section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Premium Products</p>

                    <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <div class="products-slider 5col owl-carousel owl-theme" data-owl-options="{
                            'margin': 0
                        }">
                            <?php
                            require('db.php');
                            // Prepared statement for improved security
                            $stmt = $link->prepare("SELECT * FROM (SELECT * FROM ma_sanpham WHERE khuyenmai=1 ORDER BY id DESC LIMIT 100) AS recent_news ORDER BY RAND() LIMIT 6");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Fetch data and display products
                            while ($row = $result->fetch_assoc()) {
                                $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh']);
                                $tieude = htmlspecialchars($row['tieude']);
                                $url = htmlspecialchars($row['linkurl']);
                                $giagoc = number_format($row['giagoc'], 2, '.', ',');
                                $giagoc_formatted = '$' . $giagoc;
                                $link = str_replace("?", "", strtolower("detail/$url"));
                            ?>
                                <div class="product-default">
                                    <figure>
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $link_hinh; ?>" width="280" height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">Premium</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="home" class="product-category">Bike</a>
                                        </div>
                                        <p class="product-title p-product-title">
                                            <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a>
                                        </p>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $giagoc_formatted; ?></span>
                                        </div>
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html"
                                                class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="<?php echo $link; ?>" class="btn-quickviews" title="Quick View"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            $stmt->close();
                            ?>
                        </div>

                    </div>
            </section>
        </main>

    </div>
</body>