<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit Order</div>
        <div class="card-body">
          <form action="<?= base_url('mrgAdmin/updateOrder') ?>" method="POST">
            <input type="hidden" name="id" value="<?= $orders->id ?>"  />
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="item" name="item" class="form-control" required="required" value="<?= $orders->item ?>" autofocus="autofocus" />
                    <label for="item">item</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="quantity" name="quantity" class="form-control" value="<?= $orders->quantity ?>" required="required" autofocus="autofocus" />
                    <label for="quantity">Quantity</label>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="size" name="size" class="form-control" required="required" value="<?= $orders->size ?>" autofocus="autofocus" />
                    <label for="size">Size</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="total" name="total" class="form-control" value="<?= $orders->total ?>" required="required" autofocus="autofocus" />
                    <label for="total">Total</label>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="shipping" name="shipping" class="form-control" required="required" value="<?= $orders->shipping ?>" autofocus="autofocus" />
                    <label for="shipping">Shipping</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="name" name="name" class="form-control" value="<?= $orders->name ?>" required="required" autofocus="autofocus" />
                    <label for="name">Name</label>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="company" name="company" class="form-control" required="required" value="<?= $orders->company ?>" autofocus="autofocus" />
                    <label for="company">Company</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="address" name="address" class="form-control" value="<?= $orders->address ?>" required="required" autofocus="autofocus" />
                    <label for="address">Address</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="state" name="state" class="form-control" required="required" value="<?= $orders->state ?>" autofocus="autofocus" />
                    <label for="state">State</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="phone" name="phone" class="form-control" value="<?= $orders->phone ?>" required="required" autofocus="autofocus" />
                    <label for="phone">Phone</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" required="required" value="<?= $orders->email ?>" autofocus="autofocus" />
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="0" <?= ($orders->status == 0) ? 'selected' : '' ?>>New</option>
                      <option value="1" <?= ($orders->status  == 1) ? 'selected' : '' ?>>Processing</option>
                      <option value="2" <?= ($orders->status  == 2) ? 'selected' : '' ?>>Cancelled</option>
                      <option value="3" <?= ($orders->status  == 3) ? 'selected' : '' ?>>Completed</option>
                    </select>
                  </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="created_at" name="created_at" class="form-control" required="required" value="<?= $orders->created_at ?>" readonly autofocus="autofocus" />
                    <label for="created_at">Created at</label>
                  </div>
                </div>
              </div>
            </div>
          

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <input type="submit" value="Save" class="btn btn-primary" />
                  <button onclick="window.location.href='<?= base_url('mrgAdmin/orders') ?>'" class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>