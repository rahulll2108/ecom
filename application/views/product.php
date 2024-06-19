<section id="prodetails" class="section-p1">
    <div class="single-pro-image">

        <a href="<?php echo URL;?>home/product/<?php echo $product->id; ?>">
            <img src="<?php echo IMG;?>/products/<?php echo $product->image;?>" width="100%" id="MainImg" alt="">
        </a>
        <div class="small-img-group">
            <?php foreach ($randomImages as $randomImage) { ?>
            <div class="small-img-col">
                <a href="<?php echo URL;?>home/product/<?php echo $randomImage->id; ?>">
                    <img src="<?php echo IMG;?>/products/<?php echo $randomImage->image;?>" width="100%"
                        class="small-img" alt="">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home/T-Shirt</h6>
        <h4><?php echo $product->name;?></h4>
        <h2>$<?php echo $product->price;?></h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eaque quia enim reiciendis mollitia
            voluptate blanditiis, quam ad consectetur minus ea quas illum, et, soluta quo architecto nostrum maxime
            sed?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam earum accusantium, necessitatibus,
            tempora vitae unde recusandae ipsum corrupti maiores autem magni, adipisci harum sit libero placeat
            distinctio culpa vel molestiae.</span>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>
        Featured Products
    </h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div>
            <div class="row">
                <?php foreach ($randomImages as $randomImage) { ?>
                <div class="col-lg-3">
                    <!-- <div class="pro"> -->
                    <a href="<?php echo URL;?>home/product/<?php echo $randomImage->id; ?>">
                        <div class="des">
                            <img src="<?php echo IMG;?>/products/<?php echo $randomImage->image;?>" width="100%"
                                id="MainImg" alt="">
                            <div
                                onclick="window.location.href='<?php echo site_url('home/product/'.$randomImage->id); ?>';">
                                <span><?php echo $randomImage->brand;?></span>
                                <h5><?php echo $randomImage->name;?></h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>
                                    <h2>$<?php echo $randomImage->price;?></h2>
                                </h4>
                            </div>
                            <a href="#"><i class="fa-solid fa-cart-shopping"></i></i></a>
                        </div>
                    </a>
                    <!-- </div> -->
                </div>
                <?php } ?>
            </div>
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