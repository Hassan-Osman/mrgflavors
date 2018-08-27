<section id="section-slider">
   
       <div class="spacer-double"></div>
<div class="container">
    <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
            <h1>Order Now</h1>
            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
            <div class="spacer-single"></div>
          </div>
          <div class="col-md-12  col-md-offset-3 wow fadeInLeft">
          
                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?= base_url('/order/submitOrder') ?>">
                            <input type="hidden" name="urlKey" value="<?= $urlKey ?>" />

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="item">Item</label>
                                            <input type="text" value="<?= $item ?>" class="form-control" name="item" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="size">Size</label>
                                            <input type="text" value="<?= $size ?>" class="form-control" name="size" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="size">Quantity</label>
                                            <input type="text" value="<?= $quantity ?>" class="form-control" name="quantity" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="shiping">Shipping Fees</label>
                                            <input type="text" value="<?= $shipping ?>" class="form-control" name="shipping" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="total">Total</label>
                                            <input type="text" value="<?= $total ?>" class="form-control" name="total" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Name</label>
                                            <input type="text" class="form-control" name="name" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" class="form-control" name="company">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Address</label>
                                            <input type="text" class="form-control" name="address" required="">
                                        </div>
                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                             <input type="text" class="form-control" name="state" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" name="phone" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Request Now
                                             </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

            </div>
            </div>
            <!-- /.container -->
        </section>

       <div class="spacer-double"></div>
       
       <div class="spacer-double"></div>