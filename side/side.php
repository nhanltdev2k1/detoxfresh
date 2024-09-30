<section class="intro-section">
    <div class="container">
        <div class="home-slider slide-animate owl-carousel owl-theme owl-carousel-lazy">
            <?php
            require('db.php');

            // Query to fetch the required data
            $stmt = $link->prepare("SELECT hinhanh FROM thuong_mai ORDER BY id ASC LIMIT 3");
            $stmt->execute();
            $result = $stmt->get_result();

            // Loop through the result and display the slides
            while ($row = $result->fetch_assoc()) {
                $link_hinh = "HinhCTSP/" . htmlspecialchars($row['hinhanh']); // Use htmlspecialchars to prevent XSS
            ?>
                <div class="home-slide home-slide-1 banner d-flex flex-wrap">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="d-flex flex-column justify-content-center appear-animate"
                            data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <p class="home-slide-h4 text-light text-uppercase m-b-1">Extra</p>
                            <p class="home-slide-h2 text-uppercase m-b-1">20% off</p>
                            <p class="heading-border-h4 font-weight-bold text-uppercase heading-border m-b-3">BIKES</p>
                            <p class="home-slide-h3 font5 m-b-5">Summer Sale</p>

                            <div>
                                <a href="product" class="btn btn-dark btn-lg">Shop all sale</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 with-bg"
                        style="background-image: url(hinhmenu/banner/slide-bg.png);">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="500">
                            <img class="m-b-5" src="<?php echo $link_hinh; ?>" width="740"
                                height="397" alt="banner" />
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