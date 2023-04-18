<?php
include_once("connection.php");
?>

     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/imgslide.png" alt="Slide">
                        <div class="caption-group">
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
					</li>
					<li>
                        <img src="img/imgslide2.png" alt="Slide">
                        <div class="caption-group">
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
					</li>
					<li>
                        <img src="img/imgslide3.png" alt="Slide">
                        <div class="caption-group">
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
					</li>
					<li>
                        <img src="img/imgslide4.png" alt="Slide">
                        <div class="caption-group">
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--load product -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM product" );
			
			               
		
			            
			                while($row = pg_fetch_array($result)){
				            ?>
				            <!--Product-->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="#=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="#=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="#=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?php echo  $row['Price']?></ins>
                                </div> 
                            </div>
                
                <?php
				}   
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">>
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-1.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Luffy Snake Man wano</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$100.00</ins> <del>$125.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-2.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Luffy Gear 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$150.00</ins> <del>$250.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-3.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Luffy gear 5 Nika Nika god sun</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$320.00</ins> <del>$330.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-4.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Goku SSJ 1</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$100.00</ins> <del>$125.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-5.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Goku SSJ 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$150.00</ins> <del>$250.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-6.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Goku SSJ Master Ultra instinct</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$320.00</ins> <del>$330.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-7.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Naruto kyubi charkra</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$100.00</ins> <del>$125.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-8.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sasuke sharinran</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$100.00</ins> <del>$125.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-9.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Madara legend kyubi</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$200.00</ins> <del>$225.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
   
  