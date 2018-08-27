<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              All Products
              <button onclick="window.location.href='<?= base_url('mrgAdmin/newProduct') ?>'" style="float: right;" type="button" class="btn btn-primary">Add</button></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>15ML</th>
                      <th>60ML</th>
                      <th>125ML</th>
                      <th>250ML</th>
                      <th>500ML</th>
                      <th>1 Gallon</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>15ML</th>
                      <th>60ML</th>
                      <th>125ML</th>
                      <th>250ML</th>
                      <th>500ML</th>
                      <th>1 Gallon</th>
                      <th>Operations</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if (count($products)) { ?>
                        <?php foreach ($products as $f) { ?>
                        <tr>
                          <td><?= $f->name ?></td>
                          <td><?= $f->S15ML ?></td>
                          <td><?= $f->S60ML ?></td>
                          <td><?= $f->S125ML ?></td>
                          <td><?= $f->S250ML ?></td>
                          <td><?= $f->S500ML ?></td>
                          <td><?= $f->S1Gallon ?></td>
                          <td>
                            <button onclick="window.location.href='<?= base_url('mrgAdmin/editProduct?id='.$f->url_key) ?>'" type="button" class="btn-sm btn-info">Edit</button>
                            <button onclick="window.location.href='<?= base_url('mrgAdmin/confirmDelete?id='.$f->url_key.'&name='.$f->name) ?>'" type="button" class="btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>

                      <?php } ?>    
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


      