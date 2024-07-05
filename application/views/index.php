<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>
        Save more with coupons and upto 60% off
    </p>
    <button>Shop Now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./assets/img/features/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./assets/img/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="./assets/img/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="./assets/img/features/f4.png" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="./assets/img/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="./assets/img/features/f6.png" alt="">
        <h6>Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>
        Featured Products
    </h2>
    <p>Summer Collection New Modern Design</p>
    <div class="container">
        <div class="row">
            <?php foreach ($first_section_products as $product) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="pro">
                    <a href="<?php echo site_url('index/product/'.$product->id); ?>">
                        <img src="<?php echo IMG;?>/products/<?php echo $product->image;?>" class="img-fluid" alt="">
                        <div class="des">
                            <span><?php echo $product->brand;?></span>
                            <h5><?php echo $product->name;?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$<?php echo $product->price;?></h4>
                        </div>
                    </a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Upto <span>70% Off</span> - All t-shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>

<section id="product1" class="section-p1">
    <h2>
        New Arrivals
    </h2>
    <p>Summer Collection New Modern Design</p>
    <div class="container">
        <div class="row">
            <?php foreach ($second_section_products as $product) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="pro">
                    <a href="<?php echo site_url('index/product/'.$product->id); ?>">
                        <img src="<?php echo IMG;?>/products/<?php echo $product->image;?>" class="img-fluid" alt="">
                        <div class="des">
                            <span><?php echo $product->brand;?></span>
                            <h5><?php echo $product->name;?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$<?php echo $product->price;?></h4>
                        </div>
                    </a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>Buy 1 Get 1 Free!</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Learn More</button>
    </div>

    <div class="banner-box banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming Season</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Collections</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection 50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/Summer 2024</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
    </div>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign up for Newsletter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
    </div>

    <div class="form">
        <input type="text" placeholder="Your E-mail Address">
        <button class="normal">Sign Up</button>
    </div>
</section>