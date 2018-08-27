<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">New Product</div>
        <div class="card-body">
          <form action="<?= base_url('mrgAdmin/updateProduct') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="url_key" value="<?= $products->url_key ?>"  />
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required" value="<?= $products->name ?>" autofocus="autofocus" />
                    <label for="name">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity" value="<?= $products->quantity ?>" required="required" autofocus="autofocus" />
                    <label for="quantity">Quantity</label>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <textarea  id="description" name="description" class="form-control"   rows="5" required="required" autofocus="autofocus">
                    </textarea>
                    <label for="description"><?= $products->description ?></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="image">Image</label>
                  <div class="media">
                    <div class="media-left">
                      <img src="<?= base_url('resources/images/products/'.$products->image) ?>" class="media-object" style="width:80px">
                    </div>
                  </div>
                  <input type="file" id="image" name="image" class="form-control-file" />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S15ML" name="S15ML" class="form-control" placeholder="15ML Price" required="required" value="<?= $products->S15ML ?>" autofocus="autofocus" />
                    <label for="S15ML">15ML Price</label>
                  </div>
                </div>
              
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S60ML" name="S60ML" class="form-control" placeholder="60ML Price" value="<?= $products->S60ML ?>" required="required" autofocus="autofocus" />
                    <label for="S60ML">60ML Price</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S125ML" name="S125ML" class="form-control" placeholder="125ML Price" value="<?= $products->S125ML ?>" required="required" autofocus="autofocus" />
                    <label for="S125ML">125ML Price</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S250ML" name="S250ML" class="form-control" placeholder="250ML Price" value="<?= $products->S250ML ?>" required="required" autofocus="autofocus" />
                    <label for="S250ML">250ML Price</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S500ML" name="S500ML" class="form-control" placeholder="500ML Price" value="<?= $products->S500ML ?>" required="required" autofocus="autofocus" />
                    <label for="S500ML">500ML Price</label>
                  </div>
                </div>

              
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="S1Gallon" name="S1Gallon" class="form-control" placeholder="1 Gallon Price" value="<?= $products->S1Gallon ?>" required="required" autofocus="autofocus" />
                    <label for="S1Gallon">1 Gallon Price</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="is_feteaured">Feteaured</label>
                  <select class="form-control" id="is_feteaured" name="is_feteaured">
                    <option value="1" <?= ($products->is_featured == 1) ? 'selected' : '' ?>>Yes</option>
                    <option value="0" <?= ($products->is_featured == 0) ? 'selected' : '' ?>>No</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="is_new">New</label>
                  <select class="form-control" id="is_new" name="is_new">
                    <option value="1" <?= ($products->is_new == 1) ? 'selected' : '' ?>>Yes</option>
                    <option value="0" <?= ($products->is_new == 0) ? 'selected' : '' ?>>No</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="is_popular">Popular</label>
                  <select class="form-control" id="is_popular" name="is_popular">
                    <option value="1" <?= ($products->is_popular == 1) ? 'selected' : '' ?>>Yes</option>
                    <option value="0" <?= ($products->is_popular == 0) ? 'selected' : '' ?>>No</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="is_top">Top</label>
                  <select class="form-control" id="is_top" name="is_top">
                    <option value="1" <?= ($products->is_top == 1) ? 'selected' : '' ?>>Yes</option>
                    <option value="0" <?= ($products->is_top == 0) ? 'selected' : '' ?>>No</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <input type="submit" value="Save" class="btn btn-primary" />
                  <button onclick="window.location.href='<?= base_url('mrgAdmin') ?>'" class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>