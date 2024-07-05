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
                <h3 class="card-title">Data Kategori</h3>

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
            <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <a href="index.php?page=input_kategori" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
              </div>
                <div class="box-body table-responsive">
                  <table id="user" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>ID</th>
                      <th>Kategori</th>
                      <th>AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
    
                    <?php
                        include "conf/conn.php";
                        $data = $db->query("select * FROM category ORDER BY id DESC");
                        $no = 0;
                        foreach ($data as $kategori) { ?>
                        <tr>
                            <td><?php echo $no=$no+1;?></td>
                            <td><?php echo $kategori['id'];?></td>
                            <td><?php echo $kategori['category'];?></td>
                            <td>
                                <a href="index.php?page=edit_kategori&id=<?=$kategori['id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                <a href="pages/category/delete_kategori.php?id=<?=$kategori['id'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
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
