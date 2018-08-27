<div class="spacer-single"></div>
            <div class="spacer-single"></div>
            <div class="spacer-single"></div>
    <!-- section begin -->
    <section id="section-products" class="no-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
            <h1>Our Products</h1>
            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
            <div class="spacer-single"></div>

          </div>
          <div class="col-md-12 no-padding wow fadeInUp" data-wow-delay=".2s">
                
            <div class="panel-body">
               <div class="tabbable">
                    <?php if (count($products)) { ?>
                            <?php foreach ($products as $f) { ?>
                                <!-- single product start-->
                                  <div class="col-md-3">
                                    <div class="item-wrapp">
                                      <div class="portfolio-item"> 
                                        <a href="<?= base_url('/product/details/'.$f->url_key) ?>"><img  src="<?= base_url('resources/images/products/'.$f->image) ?>" alt="<?= $f->name ?>" width="100%"></a> 
                                        </div>
                                      <div class="portfolio-item-title"> 
                                        <span><a href="<?= base_url('/product/details/'.$f->url_key) ?>" title="<?= $f->name ?>" id="productName"><?= $f->name ?></a></span>
                                        <p>
                                          <button type="button" title="Buy Now" style="border:none" class="order" onclick="window.location.href='<?= base_url('/product/details/'.$f->url_key) ?>'">View Details</button>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                <!-- single product end-->
                               
                               
                            <?php } ?>    
                        <?php } ?>
                    
                </div>
              </div>
          </div>
    </section>
    <!-- section close --> 
    <div class="spacer-single"></div>
    <div class="spacer-single"></div>