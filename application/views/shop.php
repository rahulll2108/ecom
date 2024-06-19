<section id="page-header">
    <h2>#StayHome</h2>
    <p>
        Save more with coupons and upto 60% off
    </p>
</section>

<section id="product1" class="section-p1">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-lg-3">
                <div class="pro" onclick="window.location.href='<?php echo site_url('home/product/'.$product->id); ?>';">

                    <img src="<?php echo IMG;?>/products/<?php echo $product->image;?>" alt="">
                    <div class="des">
                        <span><?php echo $product->brand; ?></span>
                        <h5><?php echo $product->name;?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>
                            $<?php echo $product->price; ?>
                        </h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></i></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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