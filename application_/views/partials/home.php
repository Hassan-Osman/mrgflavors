<?php include 'slider.php'; ?>

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
             <div class="panel panel-default no-border">

                <div class="panel-body">

                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">FEATURED PRODUCTS</a></li>
                          <li><a href="#tab_2" data-toggle="tab">TOP SELLING</a></li>
                          <li><a href="#tab_3" data-toggle="tab">NEW PRODUCTS</a></li>
                          <li><a href="#tab_4" data-toggle="tab">MOST POPULAR</a></li>
                        </ul>




            <div class="tab-content">



<!-- single product start-->

<div class="tab-pane fade in active" id="tab_1">
<div class="divide-10"></div>
<div class="panel-body">

    <?php if (count($featured)) { ?>
        <?php foreach ($featured as $f) { ?>



                                


      <div class="col-md-3">
        <div class="item-wrapp">

          <div class="portfolio-item"> 
            <a href="<?= base_url('/product/details/'.$f->url_key) ?>"><img  src="<?= base_url('resources/images/products/'.$f->image) ?>" alt="<?= $f->name ?>" width="100%"></a> 
          </div>

                                      
             <div class="portfolio-item-title"><span><a href="<?= base_url('/product/details/'.$f->url_key) ?>" title="<?= $f->name ?>" id="productName"><?= $f->name ?></a></span>
                                        
              <p>
                <button type="button" title="Buy Now" style="border:none" class="order" onclick="window.location.href='<?= base_url('/product/details/'.$f->url_key) ?>'">View Details
                </button>
              </p>

            </div>
          </div>
        </div>


                                


                            <?php } ?>    
                        <?php } ?>

                         </div>
                      </div>



<!-- single product end-->






<!-- single product start-->
                      <div class="tab-pane fade in" id="tab_2">
                        <div class="divide-10"></div>
                        <div class="panel-body">
                        <?php if (count($top)) { ?>
                            <?php foreach ($top as $f) { ?>
                                


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


                                
                            <?php } ?>    
                        <?php } ?>

                         </div>
                      </div>
<!-- single product end-->







<!-- single product start-->
                      <div class="tab-pane fade in" id="tab_3">
                        <div class="divide-10"></div>
                        <div class="panel-body">
                        <?php if (count($new)) { ?>
                            <?php foreach ($new as $f) { ?>
                             
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
                                
                            <?php } ?>    
                        <?php } ?>

                         </div>
                      </div>


<!-- single product end-->


                      <div class="tab-pane fade in" id="tab_4">
                        <div class="divide-10"></div>
                        <div class="panel-body">
                        <?php if (count($popular)) { ?>
                            <?php foreach ($popular as $f) { ?>
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
                                
                            <?php } ?>    
                        <?php } ?>

                         </div>
                      </div>

<!-- single product end-->
                    </div>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>
    </section>
    <!-- section close --> 