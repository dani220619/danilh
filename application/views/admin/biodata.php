  <style>
      .center {
          text-align: center;
      }
  </style>
  <div class="main-panel">
      <div class="content">
          <div class="page-inner">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="d-flex align-items-center">
                              <h4 class="card-title"><?= $title ?></h4>
                              <!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#usermodal">
                                  <i class="fa fa-plus"></i>

                              </button> -->
                          </div>
                      </div>

                      <div class="card-body">
                          <!-- Modal -->
                          <div class="table-responsive">
                              <table id="datatable" class="display table table-striped table-hover">
                                  <thead class="center">
                                      <tr>
                                          <th>NO</th>
                                          <th>USERNAME</th>
                                          <th>FULL NAME</th>
                                          <!-- <th>TELPON</th> -->
                                          <th>LEVEL</th>

                                          <th>IS ACTIVE</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody class="center">
                                      <?php
                                        $no = 1;
                                        foreach ($biodata as $a) { ?>

                                          <tr>
                                              <td><?= $no++ ?></td>
                                              <td><?= $a->email ?></td>
                                              <td><?= $a->full_name ?></td>
                                              <!-- <td><?= $a->tlp ?></td> -->
                                              <td><?= $a->nama_level ?></td>

                                              <td><?= $a->is_active ?></td>

                                              <td>
                                                  <div class="form-button-action">
                                                      <a href="<?= base_url('admin/edit_biodata/') ?><?= $a->id_user ?>" type="button" title="Edit Data" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                          <i class="fa fa-edit"></i>
                                                      </a>
                                                  </div>
                                              </td>
                                          </tr>
                                      <?php } ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      });
  </script>