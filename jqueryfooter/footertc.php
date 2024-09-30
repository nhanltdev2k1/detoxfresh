<footer class="footer font2">
    <div class="footer-top">
        <div class="instagram-box bg-dark">
            <div class="row m-0 align-items-center">
                <div class="instagram-follow col-md-4 col-lg-3 d-flex align-items-center">
                    <div class="info-box">
                        <i class="fab fa-instagram text-white mr-4"></i>
                        <div class="info-box-content">
                            <p class="footer-info-box-h4 text-white line-height-1"
                                style="font-size: 1.8rem;  margin-bottom: 3px;">Follow Us
                                on
                                Instagram
                            </p>
                            <p class="line-height-1">@hackhe.xyz</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9 p-0">
                    <div class="instagram-carousel owl-carousel owl-theme" data-owl-options="{
                                    'items': 2,
                                    'dots': false,
                                    'responsive': {
                                        '480': {
                                            'items': 3
                                        },
                                        '950': {
                                            'items': 4
                                        },
                                        '1200': {
                                            'items' : 5
                                        },
                                        '1500': {
                                            'items': 6
                                        }
                                    }
                                }">
                        <?php
                        require('db.php');
                        // Prepared statement for improved security
                        $stmt = $link->prepare("SELECT * FROM (SELECT * FROM tin_sanpham ORDER BY id DESC LIMIT 100) AS recent_news ORDER BY RAND() LIMIT 6");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Fetch data and display products
                        while ($row = $result->fetch_assoc()) {
                            $link_hinh = "HinhCTSP/Hinhdichvu/" . htmlspecialchars($row['hinhanh']);
                            $tieude = htmlspecialchars($row['tieude']);
                            $url = htmlspecialchars($row['linkurl']);
                            $giagoc = '$' . number_format($row['giagoc'], 2, '.', ',');
                            $link = str_replace("?", "", strtolower("detail/$url"));
                        ?>
                            <img src="<?php echo $link_hinh; ?>" alt="instagram" width="240" height="240">
                        <?php
                        }
                        $stmt->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container">
            <div class="widget-newsletter d-lg-flex align-items-center flex-wrap">
                <div class="footer-left d-md-flex flex-wrap align-items-center mr-5">
                    <div class="info-box w-auto mr-5 my-3">
                        <i class="far fa-envelope text-white mr-4"></i>
                        <div class="widget-newsletter-info">
                            <p class="footer-info-box-h4 line-height-1 text-white"
                                style="font-size: 1.8rem; margin-bottom: 3px;">
                                Get Special Offers and Savings
                            </p>
                            <p class="line-height-1">Get all the latest information on Events,
                                Sales
                                and Offers.</p>
                        </div>
                    </div>
                    <form action="#" class="my-3">
                        <div class="footer-submit-wrapper d-flex">
                            <input type="email" class="form-control font-italic"
                                placeholder="Enter Your E-mail Address..." size="40" required>
                            <button type="submit" class="btn btn-sm">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="footer-right text-lg-right">
                    <div class="social-icons my-3">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"></a>
                    </div><!-- End .social-icons -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3">
                    <a href="home"><img src="hinhmenu/logo/logowhite-hackhebike.webp" alt="Logo" class="logo"></a>
                    <div class="widget">
                        <ul class="contact-info">
                            <?php
                            require('db.php');
                            $query = "SELECT * FROM tin_thicong WHERE thuocloai = 2 AND id IN (1,2, 3, 4)";
                            $result = mysqli_query($link, $query);
                            $contact_info = [];

                            while ($row = mysqli_fetch_assoc($result)) {
                                $contact_info[$row['id']] = htmlspecialchars($row['mota']);
                            }
                            ?>
                            <li>
                                <?php echo $contact_info[1] ?? 'No meta found'; ?>
                            </li>
                            <li>
                                <span class="contact-info-label">Address:</span>
                                <?php echo $contact_info[2] ?? 'No address found'; ?>
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span> Toll Free <a
                                    href="tel:<?php echo $contact_info[3] ?? ''; ?>"><?php echo $contact_info[3] ?? 'No phone found'; ?></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a
                                    href="mailto:<?php echo $contact_info[4] ?? ''; ?>"><?php echo $contact_info[4] ?? 'No email found'; ?></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End .col-lg-3 -->
                <div class="col-lg-9">
                    <div class="row footer-content">
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">Quick Links</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            $tv = "select * from gioi_thieu order by id asc limit 0,4";
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
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">Popular Tags</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            // Use prepared statements for better security
                                            $stmt = $link->prepare("SELECT id, thuocloai, name_url FROM loai_ma_sanpham ORDER BY id ASC LIMIT 10");
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            // Fetch data and display the category list
                                            while ($row = $result->fetch_assoc()) {
                                                $categoryUrl = strtolower($row['name_url']);
                                                $categoryName = $row['thuocloai'];
                                            ?>
                                                <li><a
                                                        href="category/<?php echo $categoryUrl; ?>"><?php echo $categoryName; ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">News Corners</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
                                            $tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                                $ngay = "$row[ngay]";
                                                $url = $row['linkurl'];
                                                $link = str_replace("?", "", strtolower("post/$url"));
                                            ?>
                                                <h3 class="p-text-footer">
                                                    <a href="<?php echo $link; ?>">
                                                        <i class="fa fa-fire"></i> <?php echo $tieude_en; ?>
                                                    </a>
                                                </h3>
                                                <br>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget widget-time">
                                <p class="widget-title mb-1">Working Days/Hours</p>
                                <ul class="contact-info">
                                    <li>
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class=" d-sm-flex align-items-center">

                        <div class="footer-right ml-auto mt-1 mt-sm-0">
                            <div class="payment-icons mr-0">
                                <span class="payment-icon visa"
                                    style="background-image: url(hinhmenu/payments/payment-visa.svg)"></span>
                                <span class="payment-icon paypal"
                                    style="background-image: url(hinhmenu/payments/payment-paypal.svg)"></span>
                                <span class="payment-icon stripe"
                                    style="background-image: url(hinhmenu/payments/payment-stripe.png)"></span>
                                <span class="payment-icon verisign"
                                    style="background-image:  url(hinhmenu/payments/payment-verisign.svg)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End .row -->
        </div>
        <div class="footer-bottom">
            <p class="footer-copyright text-lg-center mb-0">&copy; Hackhe.xyz 2021. All Rights
                Reserved
            </p>
        </div><!-- End .footer-bottom -->
    </div><!-- End .container -->
</footer><!-- End .footer -->