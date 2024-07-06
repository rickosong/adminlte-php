<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!-- Main content -->
                <section class="content">
                  <div class="row">
                  <!-- left column -->
                    <div class="col-md-12">
                    <!-- general form elements -->
                      <div class="box box-primary">
                      <!-- /.box-header -->
                      <!-- form start -->
                        <form role="form" method="post" action="pages/product/proses_input_produk.php">
                          <div class="box-body">
                            <div class="form-group">
                              <label>Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                            </div>
                            <div class="form-group">
                              <label>Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="Harga" required>
                            </div>
                            <div class="form-group">
                              <label>Foto</label>
                                <input type="text" name="foto" class="form-control" placeholder="Foto" required>
                            </div>
                            <div class="form-group">
                              <label>Kategori</label>
                              <select class="form-control" name="level">
                                <option selected="true" disabled="disabled" value="">- Pilih Kategori Produk -</option>
                                <option value="admin">Administrator</option>
                                <option value="user">User</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required>
                            </div>
                          </div>
                        <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                          </div>
                        </form>
                      </div>
                    <!-- /.box -->
                    </div>
                  </div>
                </section>
              <!-- /.content -->
              </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
