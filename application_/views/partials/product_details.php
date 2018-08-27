
    <form action="<?= base_url('/order/checkout') ?>" id="orderForm" method="POST">
    
    <!-- section begin -->
    <section id="section-products" class="no-bottom">
        <div class="spacer-single"></div>
        <div class="spacer-single"></div>
        <div class="spacer-single"></div>
            <div class="spacer-single"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 no-padding wow fadeInUp" data-wow-delay=".2s">
            <div class="col-md-5">
            <div class="flex-container">
                    <div class="border">
                    <div class="flexslider single-portfolio-item-slider">
                        <ul class="slides round">
                            <li>
                            
                            <img src="<?= base_url('resources/images/products/'.$product->image) ?>" alt=" "/>
                            </li>
                            <li>
                            <img src="<?= base_url('resources/images/products/'.$product->image) ?>" alt=" "/>
                            
                            </li>
                            <li>
                            <img src="<?= base_url('resources/images/products/'.$product->image) ?>" alt=" "/>
                            
                            </li>
                            
                        </ul>
                    </div>
                    </div>
                    </div>
            </div>
            <div class="col-md-7">
            <h3 class="product-name"><?= $product->name ?></h3>    
            <input type="text" name="urlKey" style="display: none" value="<?= $product->url_key ?>" />
            <input type="text" name="name" style="display: none" value="<?= $product->name ?>" />
            
            Size : 
                <select name="size" id="size" style="width: auto;" class="form-control">
                    <option value="15ML">15 ML</option>
                    <option value="60ML">60 ML</option>
                    <option value="125ML">125 ML</option>
                    <option value="250ML">250 ML</option>
                    <option value="500ML">500 ML</option>
                    <option value="1Gallon">1 Gallon</option>
                </select>
            <br />

            Quantity : <input min="1" type="number" id="quantity" value="1" name="quantity" style="width: auto;" class="form-control" />
            <br />
            Price : <div id="total" style="font-size: 15px;" class="product-name"><?= $product->S15ML ?> EGP</div>
            <input type="number" id="totalH" name="total" style="display: none" value="<?= $product->S15ML ?>" />
            <input type="number" id="15ML" style="display: none" value="<?= $product->S15ML ?>">
            <input type="number" id="60ML" style="display: none" value="<?= $product->S60ML ?>">
            <input type="number" id="125ML" style="display: none" value="<?= $product->S125ML ?>">
            <input type="number" id="250ML" style="display: none" value="<?= $product->S250ML ?>">
            <input type="number" id="500ML" style="display: none" value="<?= $product->S500ML ?>">
            <input type="number" id="1Gallon" style="display: none" value="<?= $product->S1Gallon ?>">
            <br />

            <button type="button" title="Order Now" style="border:none" class="order" id="orderNow">Order Now</button>
            </div>
            <div class="col-md-12">
            <h4 class="product-name">Details</h4>
            <p><?= $product->description ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-double"></div>
    </section>
    <!-- section close --> 
    </form>











