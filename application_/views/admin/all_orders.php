          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              All Orders</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>item</th>
                      <th>size</th>
                      <th>total</th>
                      <th>quantity</th>
                      <th>status</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>id</th>
                      <th>item</th>
                      <th>size</th>
                      <th>total</th>
                      <th>quantity</th>
                      <th>status</th>
                      <th>Operations</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if (count($orders)) { ?>
                        <?php foreach ($orders as $f) { ?>
                        <tr>
                          <td><?= $f->id ?></td>
                          <td><?= $f->item ?></td>
                          <td><?= $f->size ?></td>
                          <td><?= $f->total ?></td>
                          <td><?= $f->quantity ?></td>
                          <td>
                            <?php 
                              if($f->status == 0) {
                                echo "New";
                              } elseif($f->status == 1) {
                                echo "Processing";
                              } elseif($f->status == 2) {
                                echo "Cancelled";
                              } elseif($f->status == 3) {
                                echo "Completed";
                              }     
                            ?>
                          </td>
                          <td>
                            <button onclick="window.location.href='<?= base_url('mrgAdmin/editOrder?id='.$f->id) ?>'" type="button" class="btn-sm btn-info">Edit</button>
                          </td>
                        </tr>
                      <?php } ?>    
                    <?php } ?>
                  </tbody>
                </table>
                <nav style="float: right;" aria-label="Page navigation example">
                  <ul class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
